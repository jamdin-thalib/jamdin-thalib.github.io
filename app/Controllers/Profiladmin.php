
<?php 

namespace App\Controllers;

class Profiladmin extends BaseController
{
    public function index()
    {
        echo view('admin\layout\backend-header');
        echo view('admin\backend-index');
        echo view('admin\layout\backend-foter');
    }
    public function editor()
    {
        echo view('admin\layout\headeradmin');
        echo view('admin\profil\editor');
        echo view('admin\layout\foteradmin');
    }
}