<?php namespace App\Controllers;
use App\Models\Pendaftaran_model;
class Auth extends BaseController{
	protected $data = [];
	protected $configIonAuth;
	protected $validation;
    protected $pendaftar;
	public function __construct(){
		$this->validation = \Config\Services::validation();
		$this->configIonAuth = config('IonAuth');
        $this->pendaftar = new Pendaftaran_model();
	}
	public function index(){
		if (! $this->ionAuth->loggedIn()){
			return redirect()->to('login');
		}else if (! $this->ionAuth->isAdmin()){ // remove this elseif if you want to enable this for non-admins
            $this->session->setFlashdata('message', 'You must be an administrator to view this page.');
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}else{
            $this->data = array(
                'title'  => lang('Auth.index_heading'),
                'session'=> $this->session,
                'url'    => 'auth/',
                'm_mu'   => 'active',
                'm_user' => 'active'
            );
            return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\index', $this->data,false);
		}
	}
    public function login(){
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
			$this->data['message'] = $this->validation->listErrors($this->validationListTemplate);
			return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\login', $this->data);
		}
	}
    public function logout(){
		// log the user out
		$this->ionAuth->logout();
		// redirect them to the login page
		$this->session->setFlashdata('message', $this->ionAuth->messages());
		return redirect()->to('login')->withCookies();
	}
    public function create_user(){
		if (! $this->ionAuth->loggedIn() || ! $this->ionAuth->isAdmin()){
			return redirect()->to('/auth');
		}
		$this->data['title'] = lang('Auth.create_user_heading');
		$this->data['sub_title'] = lang('Auth.create_user_subheading');	
        $this->data['action'] = 'insert';
        $this->data['btn'] = lang('Auth.create_user_submit_btn');
        $this->data['required'] = 'required="required"';
        $this->data['identity_column'] = $this->configIonAuth->identity;

        return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\form_user', $this->data);
	}
    public function edit_user(int $id){
        $this->data['title'] = lang('Auth.edit_user_heading');
        $this->data['sub_title'] = lang('Auth.edit_user_subheading');
        if (! $this->ionAuth->loggedIn() || (! $this->ionAuth->isAdmin() && ! ($this->ionAuth->user()->id == $id))){
            return redirect()->to('/login');
        }
        $user          = $this->ionAuth->user($id);
        $groups        = $this->ionAuth->groups();
        $currentGroups = $this->ionAuth->getUsersGroups($id)->getResult();

        // pass the user to the view
        $this->data['user']          = $user;
        $this->data['groups']        = $groups;
        $this->data['currentGroups'] = $currentGroups;

        $this->data['ionAuth'] = $this->ionAuth;
        $this->data['action'] = 'update';
        $this->data['btn'] = 'Update';
        $this->data['required'] = '';
        $this->data['identity_column'] = $this->configIonAuth->identity;

        return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\form_user', $this->data);
    }
    public function save(){
        $this->validation->setRule('nama_user', lang('Auth.create_user_validation_name_label'), 'required');
        $this->validation->setRule('phone', lang('Auth.edit_user_validation_phone_label'), 'trim|required');
        switch ($this->request->getPost('action')) {
            case 'insert':
                $tables                        = $this->configIonAuth->tables;
                $identityColumn                = $this->configIonAuth->identity;               
                if ($identityColumn !== 'email'){
                    $this->validation->setRule('identity', lang('Auth.create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identityColumn . ']');
                    //$this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required');
                    $this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|valid_email');
                }else{
                    //$this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
                    $this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|is_unique[' . $tables['users'] . '.email]');
                }
                $this->validation->setRule('password', lang('Auth.create_user_validation_password_label'), 'required|min_length[' . $this->configIonAuth->minPasswordLength . ']|matches[password_confirm]');
                $this->validation->setRule('password_confirm', lang('Auth.create_user_validation_password_confirm_label'), 'required');

                if ($this->validation->withRequest($this->request)->run()){
                    $email    = strtolower($this->request->getPost('email'));
                    $identity = ($identityColumn === 'email') ? $email : $this->request->getPost('identity');
                    $password = $this->request->getPost('password');
                    $additionalData = [
                        'nama_user' => $this->request->getPost('nama_user'),
                        'phone'     => $this->request->getPost('phone'),
                        'posisi'     => $this->request->getPost('jabatan')
                    ];
                    if ($this->ionAuth->register($identity, $password, $email, $additionalData)){
                        // check to see if we are creating the user
                        // redirect them back to the admin page
                        $status['type'] = 'success';
                        $status['text'] = $this->ionAuth->messages();
                        $status['title'] = 'Success';
                    }else{
                        $status['type'] = 'error';
                        $status['text'] =  $this->ionAuth->errors($this->validationListTemplate);
                        $status['title'] = 'Error';
                    }
                }else{
                    $status['type'] = 'error';
                    $status['text'] = $this->validation->listErrors($this->validationListTemplate);
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
                break;
            case 'update':
                $tables=  $this->configIonAuth->tables;
                $id = $this->request->getPost('id');
                if ($this->request->getPost('password')){
                    $this->validation->setRule('password', lang('Auth.edit_user_validation_password_label'), 'required|min_length[' . $this->configIonAuth->minPasswordLength . ']|matches[password_confirm]');
                    $this->validation->setRule('password_confirm', lang('Auth.edit_user_validation_password_confirm_label'), 'required');
                }
                $this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|is_unique[' . $tables['users'] . '.email]');
                if ($this->validation->withRequest($this->request)->run()){
                    $data = [
                        'nama_user' => $this->request->getPost('nama_user'),
                        'email'     => $this->request->getPost('email'),
                        'phone'     => $this->request->getPost('phone')
                    ];
                    // update the password if it was posted
                    if ($this->request->getPost('password')){
                        $data['password'] = $this->request->getPost('password');
                    }
                    // Only allow updating groups if user is admin
                    if ($this->ionAuth->isAdmin()){
                        // Update the groups user belongs to
                        $groupData = $this->request->getPost('groups');
                        if (! empty($groupData)){
                            $this->ionAuth->removeFromGroup('', $id);
                            foreach ($groupData as $grp) {
                                $this->ionAuth->addToGroup($grp, $id);
                            }
                        }
                    }
                    // check to see if we are updating the user
                    if ($this->ionAuth->update($id, $data)){
                        $status['type'] = 'success';
                        $status['text'] = $this->ionAuth->messages();
                        $status['title'] = 'Success';
                    }else{
                        $status['type'] = 'error';
                        $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                        $status['title'] = 'Error';
                    }
                }else{
                    $status['type'] = 'error';
                    $status['text'] = $this->validation->listErrors($this->validationListTemplate);
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
                break;
            case 'register':
                $now = time() * 1000;
                $tgl_akhir = strtotime('05-02-2022 23:59:59') * 1000;
                if($now >= $tgl_akhir){
                    $status['type'] = 'error';
                    $status['text'] =  "Waktu Registrasi Telah Berakhir";
                    $status['title'] = 'Error';
                    echo json_encode($status);
                    return false;
                }

                $tanggal_lahir = $this->request->getPost('tanggal_lahir');
                $nik = $this->request->getPost('nik');
                if (cekUmur($tanggal_lahir)  > 35) {
                    $status['type'] = 'error';
                    $status['text'] =  "Usia Anda Telah Melewati Batas 35 Tahun, Usia Anda Sekarang ".hitungUmur($tanggal_lahir)." ";
                    $status['title'] = 'Error';
                    echo json_encode($status);
                    return false;
                }else if (cekUmur($tanggal_lahir)  < 20) {
                    $status['type'] = 'error';
                    $status['text'] =  "Sorry Bro Belum Cukup Umur NT, Usia Anda Sekarang ".hitungUmur($tanggal_lahir)." ";
                    $status['title'] = 'Error';
                    echo json_encode($status);
                    return false;
                }
                $nik = $this->ionAuth->getByNik($nik);
                if (isset($nik)) {
                    $status['type'] = 'warning';
                    $status['text'] =  "NIK $nik->nik Telah Digunakan Oleh Pelamar $nik->nama_user";
                    $status['title'] = 'Warning';
                    echo json_encode($status);
                    return false;
                }
                $tables                        = $this->configIonAuth->tables;
                $identityColumn                = $this->configIonAuth->identity;               
                if ($identityColumn !== 'email'){
                    $this->validation->setRule('identity', lang('Auth.create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identityColumn . ']');
                    //$this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required');
                    $this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|valid_email');
                }else{
                    //$this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
                    $this->validation->setRule('email', lang('Auth.create_user_validation_email_label'), 'trim|required|is_unique[' . $tables['users'] . '.email]');
                }
                $this->validation->setRule('password', lang('Auth.create_user_validation_password_label'), 'required|min_length[' . $this->configIonAuth->minPasswordLength . ']|matches[password_confirm]');
                $this->validation->setRule('password_confirm', lang('Auth.create_user_validation_password_confirm_label'), 'required');

                if ($this->validation->withRequest($this->request)->run()){
                    $email    = strtolower($this->request->getPost('email'));
                    $identity = ($identityColumn === 'email') ? $email : $this->request->getPost('identity');
                    $password = $this->request->getPost('password');
                    $additionalData = [
                        'nama_user' => $this->request->getPost('nama_user'),
                        'phone'     => $this->request->getPost('phone'),
                        'tgl_lahir' => get_format_date_sql($tanggal_lahir),
                        'posisi'    => $this->request->getPost('jabatan'),
                        'nik'       => $this->request->getPost('nik')
                    ];
                    if ($this->ionAuth->register($identity, $password, $email, $additionalData)){
                        // check to see if we are creating the user
                        // redirect them back to the admin page
                        $status['type'] = 'success';
                        $status['text'] = $this->ionAuth->messages();
                        $status['title'] = 'Success';
                    }else{
                        $status['type'] = 'error';
                        $status['text'] =  $this->ionAuth->errors($this->validationListTemplate);
                        $status['title'] = 'Error';
                    }
                }else{
                    $status['type'] = 'error';
                    $status['text'] = $this->validation->listErrors($this->validationListTemplate);
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
                break;
            case 'delete':
                $id = $this->request->getPost('id');
                $success = array();
                $failed = array();
                foreach($id as $ids){
                    if($this->ionAuth->deleteUser($ids)){
                        $success[] ='success';
                    }else{
                        $failed[] = 'failed';
                    }
                }
                $jum_success = count($success);
                $jum_failed = count($failed);
                if(count($success) > 0){
                    $status['type'] = 'success';
                    $status['text'] = '<strong>Deleted..!</strong>Berhasil dihapus '.$jum_success.', Gagal dihapus '.$jum_failed.'..!!!';
                    $status['title'] = 'Success';
                }else{
                    $status['type'] = 'error';
                    $status['text'] = '<strong>Oh snap!</strong> '.$this->ionAuth->errors($this->validationListTemplate) .' '. $failed[0];
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
                break;
        }
    }
    //group
    public function create_group(){
        if (! $this->ionAuth->loggedIn() || ! $this->ionAuth->isAdmin()){
			return redirect()->to('/auth');
		}
		$this->data['title'] = lang('Auth.create_group_heading');
		$this->data['sub_title'] = lang('Auth.create_group_subheading');
        $this->data['action'] = 'insert';
        $this->data['btn'] = lang('Auth.create_group_submit_btn');

        return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\form_group', $this->data);
	}
    public function edit_group(int $id){
		if (! $this->ionAuth->loggedIn() || ! $this->ionAuth->isAdmin()){
			return redirect()->to('/auth');
		}
        $this->data['title'] = lang('Auth.edit_group_title');
        $this->data['sub_title'] = lang('Auth.edit_group_subheading');
		$group = $this->ionAuth->group($id)->row();
		$this->data['group'] = $group;

		$readonly = $this->configIonAuth->adminGroup === $group->name ? 'readonly' : '';

		$this->data['id']                = $id;
		$this->data['group_name']        = $group->name;
		$this->data['group_description'] = $group->description;
		$this->data['readonly']          = $readonly;
        $this->data['action']            = 'update';
        $this->data['btn']               = lang('Auth.edit_group_submit_btn');

		return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\form_group', $this->data);
	}
    public function save_groups(){
        if (! $this->ionAuth->loggedIn() || ! $this->ionAuth->isAdmin()){
			return redirect()->to('/auth');
		}
        switch ($this->request->getPost('action')) {
            case 'insert':
                $this->validation->setRule('group_name', lang('Auth.create_group_validation_name_label'), 'trim|required|alpha_dash');
                if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()){
                    $newGroupId = $this->ionAuth->createGroup($this->request->getPost('group_name'), $this->request->getPost('description'));
                    if ($newGroupId){
                        $status['type'] = 'success';
                        $status['text'] = $this->ionAuth->messages();
                        $status['title'] = 'Success';
                    }else{
                        $status['type'] = 'error';
                        $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                        $status['title'] = 'Error';
                    }
                }else{
                    $status['type'] = 'error';
                    $status['text'] = $this->validation->listErrors($this->validationListTemplate);
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
                break;
            case 'update':
                $this->validation->setRule('group_name', lang('Auth.edit_group_validation_name_label'), 'required|alpha_dash');
                if ($this->validation->withRequest($this->request)->run()) {
                    $groupUpdate = $this->ionAuth->updateGroup($this->request->getPost('id'), $this->request->getPost('group_name'), ['description' => $this->request->getPost('group_description')]);
                    if ($groupUpdate) {
                        $this->session->setFlashdata('message', lang('Auth.edit_group_saved'));
                        $status['type'] = 'success';
                        $status['text'] = lang('Auth.edit_group_saved');
                        $status['title'] = 'Success';
                    } else {
                        $status['type'] = 'error';
                        $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                        $status['title'] = 'Error';
                    }
                }else{
                    $status['type'] = 'error';
                    $status['text'] = $this->validation->listErrors($this->validationListTemplate);
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
                break;
            case 'delete':

                break;
        }
    }
    public function activate(int $id, string $code = ''){
		$activation = false;

		if ($code){
			$activation = $this->ionAuth->activate($id, $code);
            if ($activation) {
                $user = $this->ionAuth->user($id);
                $dPes['user_id'] = $id;
                $dPes['full_name'] = $user->nama_user;
                $dPes['email'] = $user->email;
                $dPes['no_telpon'] = $user->phone;
                $dPes['tanggal_lahir'] = $user->tgl_lahir;
                $dPes['nik'] = $user->nik;
                $this->pendaftar->insert($dPes);
                $this->pendaftar->addBerkasPendaftar($user->posisi,$id);
                $this->session->setFlashdata('success', $this->ionAuth->messages());
                return redirect()->to('login');
            }
            $this->session->setFlashdata('error', $this->ionAuth->errors($this->validationListTemplate));
            return redirect()->to('login/register');
		}else if ($this->ionAuth->isAdmin()){
			$activation = $this->ionAuth->activate($id);
            if ($activation){
                $status['type'] = 'success';
                $status['text'] = $this->ionAuth->messages();
                $status['title'] = 'Success';
            }else{
                $status['type'] = 'error';
                $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                $status['title'] = 'Error';
            }
            echo json_encode($status);
		}
	}
    public function deactivate(int $id = 0) {
        if (!$this->ionAuth->loggedIn() || !$this->ionAuth->isAdmin()) {
            // redirect them to the home page because they must be an administrator to view this
            throw new \Exception('You must be an administrator to view this page.');
            // TODO : I think it could be nice to have a dedicated exception like '\IonAuth\Exception\NotAllowed
        }
        if($this->ionAuth->deactivate($id)){
            $status['type'] = 'success';
            $status['text'] = $this->ionAuth->messages();
            $status['title'] = 'Success';
        }else{
            $status['type'] = 'error';
            $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
            $status['title'] = 'Error';
        }
        echo json_encode($status);         
    }
    public function ajax_list() {
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('/auth/login');
        }
        $list = $this->ionAuth->get_datatables();
        $data = array();
        $no = $_GET['offset'] + 1;
        foreach ($list as $rows) {
            $group = array();
            foreach ($this->ionAuth->getUsersGroups($rows->id)->getResult() as  $value) {
                $group[] = $value->name;
            }
            $row = array();
            $row['id'] = $rows->id;
            $row['no'] = $no++;
		    $row['nama'] = $rows->nama_user;
		    $row['username'] = $rows->username;
		    $row['email'] = $rows->email;
		    $row['group'] = $group;
            $row['active'] = ($rows->active) ? '<a class="btn btn-success btn-xs" href="javascript:void(0)" onclick="activate('."'".site_url("auth/deactivate/".$rows->id)."'".',1)"> '.lang('Auth.index_active_link').'</a>' :
                '<a class="btn btn-danger btn-xs" href="javascript:void(0)" onclick="activate('."'".site_url("auth/activate/".$rows->id)."'".')"> '.lang('Auth.index_inactive_link').'</a>';
		    $row['edit'] = '<a href="javascript:void(0)" onclick="edit('."'".site_url("auth/edit_user/".$rows->id)."'".')" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Edit</a>';
		    $data[] = $row;
        }
        $output = array(
            "total" => $this->ionAuth->count_filtered(),
            "totalNotFiltered" => $this->ionAuth->count_all(),
            "rows" => $data,
        );
        echo json_encode($output);
    }
    //lupa pass
    public function forgot_password() {
        $this->data['title'] = lang('Auth.forgot_password_heading');

        // setting validation rules by checking whether identity is username or email
        if ($this->configIonAuth->identity !== 'email') {
            $this->validation->setRule('identity', lang('Auth.forgot_password_identity_label'), 'required');
        } else {
            $this->validation->setRule('identity', lang('Auth.forgot_password_validation_email_label'), 'required|valid_email');
        }

        if (!($this->request->getPost() && $this->validation->withRequest($this->request)->run())) {
            $this->data['type'] = $this->configIonAuth->identity;

            if ($this->configIonAuth->identity !== 'email') {
                $this->data['identity_label'] = lang('Auth.forgot_password_identity_label');
            } else {
                $this->data['identity_label'] = lang('Auth.forgot_password_email_identity_label');
            }

            // set any errors and display the form
            $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors($this->validationListTemplate) : $this->session->getFlashdata('message');
            return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\forgot_password', $this->data);
        } else {
            $identity = $this->ionAuth->getUserFromIdentity($this->request->getPost('identity'))->limit(1)->get()->getRow();
            if (empty($identity)) {
                if ($this->configIonAuth->identity !== 'email') {
                    $this->ionAuth->setError('Auth.forgot_password_identity_not_found');
                } else {
                    $this->ionAuth->setError('Auth.forgot_password_email_not_found');
                }
                $status['type'] = 'error';
                $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                $status['title'] = 'Error';
                echo json_encode($status);
                return false;
            }
            // run the forgotten password method to email an activation code to the user
            $forgotten = $this->ionAuth->forgottenPassword($identity->{$this->configIonAuth->identity});
            if ($forgotten) {
                $status['type'] = 'success';
                $status['text'] = $this->ionAuth->messages();
                $status['title'] = 'Success';
            } else {
                $status['type'] = 'error';
                $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                $status['title'] = 'Error';
            }
            echo json_encode($status);
        }
    }
    public function reset_password($code = null){
        if (!$code) {
            $this->session->setFlashdata('message', 'code is empty');
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->data['title'] = lang('Auth.reset_password_heading');

        $user = $this->ionAuth->forgottenPasswordCheck($code);

        if ($user) {
            // if the code is valid then display the password reset form

            $this->validation->setRule('new', lang('Auth.reset_password_validation_new_password_label'), 'required|min_length[' . $this->configIonAuth->minPasswordLength . ']|matches[new_confirm]');
            $this->validation->setRule('new_confirm', lang('Auth.reset_password_validation_new_password_confirm_label'), 'required');

            if (!$this->request->getPost()) {
                $this->data['minPasswordLength'] = $this->configIonAuth->minPasswordLength;
                $this->data['code'] = $code;
                $this->data['user_id'] = $user->id;
                $this->data['message'] = $this->session->getFlashdata('message');
                // render
                return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\reset_password', $this->data);
            } else {
                $identity = $user->{$this->configIonAuth->identity};

                // do we have a valid request?
                if ($user->id != $this->request->getPost('user_id')) {
                    // something fishy might be up
                    $this->ionAuth->clearForgottenPasswordCode($identity);
                    throw new \Exception(lang('Auth.error_security'));
                } else if($this->validation->withRequest($this->request)->run()){
                    // finally change the password
                    $change = $this->ionAuth->resetPassword($identity, $this->request->getPost('new'));
                    if ($change) {
                        $status['type'] = 'success';
                        $status['text'] = $this->ionAuth->messages();
                        $status['title'] = 'Success';
                    } else {
                        $status['type'] = 'error';
                        $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                        $status['title'] = 'Error';
                    }
                }else{
                    $status['type'] = 'error';
                    $status['text'] = $this->validation->listErrors($this->validationListTemplate);
                    $status['title'] = 'Error';
                }
                echo json_encode($status);
            }
        } else {
            // if the code is invalid then send them back to the forgot password page
            $this->session->setFlashdata('message', $this->ionAuth->errors($this->validationListTemplate));
            return redirect()->to('forgot-password');
        }
    }
    public function change_password(){
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }

        $this->validation->setRule('old', lang('Auth.change_password_validation_old_password_label'), 'required');
        $this->validation->setRule('new', lang('Auth.change_password_validation_new_password_label'), 'required|min_length[' . $this->configIonAuth->minPasswordLength . ']|matches[new_confirm]');
        $this->validation->setRule('new_confirm', lang('Auth.change_password_validation_new_password_confirm_label'), 'required');

        $user = $this->ionAuth->user();

        if (!$this->request->getPost() || $this->validation->withRequest($this->request)->run() === false) {
            // display the form
            // set the flash data error message if there is one
            $this->data['message'] = ($this->validation->getErrors()) ? $this->validation->listErrors($this->validationListTemplate) : $this->session->getFlashdata('message');

            $this->data['minPasswordLength'] = $this->configIonAuth->minPasswordLength;
            $this->data['old_password'] = [
                'name' => 'old',
                'id'   => 'old',
                'type' => 'password',
            ];
            $this->data['new_password'] = [
                'name'    => 'new',
                'id'      => 'new',
                'type'    => 'password',
                'pattern' => '^.{' . $this->data['minPasswordLength'] . '}.*$',
            ];
            $this->data['new_password_confirm'] = [
                'name'    => 'new_confirm',
                'id'      => 'new_confirm',
                'type'    => 'password',
                'pattern' => '^.{' . $this->data['minPasswordLength'] . '}.*$',
            ];
            $this->data['user_id'] = [
                'name'  => 'user_id',
                'id'    => 'user_id',
                'type'  => 'hidden',
                'value' => $user->id,
            ];

            // render
            return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\change_password', $this->data);
        } else {
            $identity = $this->session->get('identity');

            $change = $this->ionAuth->changePassword($identity, $this->request->getPost('old'), $this->request->getPost('new'));

            if ($change) {
                //if the password was successfully changed
                $this->session->setFlashdata('message', $this->ionAuth->messages());
                return $this->logout();
            } else {
                $this->session->setFlashdata('message', $this->ionAuth->errors($this->validationListTemplate));
                return redirect()->to('/auth/change_password');
            }
        }
	}
    public function profile(){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('/auth/login');
        }
        $this->data['title'] = 'Profile';
        $this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors($this->validationListTemplate) : $this->session->getFlashdata('message');
        $this->data['session']  = $this->session;
        $this->data['m_Bprofile']     = 'active';
        $this->data['m_profile']   = 'active';

        $user = $this->ionAuth->user($this->session->user_id);
        $this->data['get']   = $user;

        $this->data['minPasswordLength'] = $this->configIonAuth->minPasswordLength;
        $this->data['old_password'] = [
            'name' => 'old',
            'id'   => 'old',
            'type' => 'password',
            'class'=> 'form-control',
            'required' => 'required',
            'placeholder'=> lang('Auth.change_password_old_password_label')
        ];
        $this->data['new_password'] = [
            'name'    => 'new',
            'id'      => 'new',
            'type'    => 'password',
            'class'   => 'form-control',
            'required' => 'required',
            'data-validate-length-range' => '8,20',
            'placeholder'=> sprintf(lang('Auth.change_password_new_password_label'), $this->data['minPasswordLength'])
        ];
        $this->data['new_password_confirm'] = [
            'name'    => 'new_confirm',
            'id'      => 'new_confirm',
            'type'    => 'password',
            'class'   => 'form-control',
            'data-validate-linked'   => 'new',
            'required' => 'required',
            'placeholder'=> lang('Auth.change_password_new_password_confirm_label')
        ];
        return $this->renderPage(DIRECTORY_SEPARATOR . 'auth\profile', $this->data,false);
    }
    public function save_profile(){
        if (! $this->ionAuth->loggedIn()){
            return redirect()->to('/auth/login');
        }
        if(!empty($_FILES['file-img']['name'])){
            $file = $this->request->getFile('file-img');
            $file_name = $file->getRandomName();
            $file_old = $this->request->getPost('old_foto');
            if($this->ionAuth->upload_img($file,$file_name, $file_old)){
                $data = ['img' => $file_name];
                $this->ionAuth->update($this->request->getPost('user_id'), $data);
                $this->session->remove('foto');
                $this->session->set('foto',base_url('/assets/img/'.$file_name));
            }else{
                $status['type'] = 'error';
                $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
                $status['title'] = 'Error';
                echo json_encode($status);
                return false;
            }
        }
        $data = [
            'full_name'     => $this->request->getPost('nama_user'),
            'username'      => $this->request->getPost('username'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $this->request->getPost('phone'),
        ];
        if ($this->ionAuth->update($this->request->getPost('user_id'), $data)){
            $status['type'] = 'success';
            $status['text'] = $this->ionAuth->messages();
            $status['title'] = 'Success';
        }else{
            $status['type'] = 'error';
            $status['text'] = $this->ionAuth->errors($this->validationListTemplate);
            $status['title'] = 'Error';
        }
        echo json_encode($status);
    }
    private function upload_img($file_name){
        $file = $this->request->getFile('profilephoto');
        $type = $file->getClientMimeType();
        $size = $file->getSize();

        if ($type == (('image/png') or ('image/jpeg'))) {	// File Tipe Sesuai
            if($size <= '2146304') {
                $file_old = $this->request->getPost('old_foto');
                helper('filesystem'); // Load Helper File System
                $direktori = ROOTPATH . 'public/assets/img/'; //definisikan direktori upload
                if(!empty($file_old)){
                    delete_files($direktori , $file_old); //Hapus terlebih dahulu jika file ada
                }
                $image = \Config\Services::image('gd'); //Load Image Libray
                $upload = $image->withFile($file)->resize(200, 250, false, 'height')
                    ->save($direktori .''. $file_name);
                if ($upload) {
                    return true;
                } else {
                    $this->session->setFlashdata('message', 'File Gagal Di Upload');
                    return false;
                }
            }else{
                $this->session->setFlashdata('message', 'Extensi File Tidak Sesuai.. Gunakan file .jpeg atau .png');
                return false;
            }
        }else{
            $this->session->setFlashdata('message', 'Extensi File Tidak Sesuai.. Gunakan file .jpeg atau .png');
            return false;
        }
    }
    protected function renderPage(string $view, $data = null, bool $returnHtml = true){
		$viewdata = $data ? : $this->data;
		if ($returnHtml){
			echo view('App\Views'.$view, $viewdata);
		}else{
            echo view('App\Views\backend\layout-admin\header', $viewdata);
			echo view('App\Views'.$view);
			echo view('App\Views\backend\layout-admin\footer');
		}
	}
    public function redirectUser(){
		if ($this->ionAuth->isAdmin()){
			return redirect()->to('auth');
		}
		return redirect()->to('admin');
	}
}