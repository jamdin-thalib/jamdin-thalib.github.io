<?php namespace App\Controllers;

class Login extends BaseController {
    protected $configIonAuth;
	protected $validation;
	public function __construct(){
		$this->validation = \Config\Services::validation();
		$this->configIonAuth = config('IonAuth');
	}
    public function index(){
        $this->data['title'] = lang('Auth.login_heading');
		// validate form input
		$this->validation->setRule('identity', str_replace(':', '', lang('Auth.login_identity_label')), 'required');
		$this->validation->setRule('password', str_replace(':', '', lang('Auth.login_password_label')), 'required');

		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()){
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool)$this->request->getVar('remember');
			if ($this->ionAuth->login($this->request->getVar('identity'), $this->request->getVar('password'), $remember)){
				//return redirect()->to('/home')->withCookies();
                $status['type'] = 'success';
                $status['text'] = $this->ionAuth->messages();
                $status['title'] = 'Success';
			}else{
				//return redirect()->back()->withInput();
                $status['type'] = 'error';
                $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                $status['title'] = 'Error';
			}
            echo json_encode($status);
		}else{
			$this->data['message'] = $this->ionAuth->isAdmin();//$this->validation->listErrors($this->validationListTemplate);
			$this->data['success'] = $this->session->getFlashData('success'); 
            $this->data['error'] = $this->session->getFlashData('error'); 
            echo view('login',$this->data);
		}
    }
    public function register(){
        echo view('register');
    }
    public function logout(){
		// log the user out
		$this->ionAuth->logout();
		// redirect them to the login page
		$this->session->setFlashdata('message', $this->ionAuth->messages());
		return redirect()->to('login')->withCookies();
	}
}
