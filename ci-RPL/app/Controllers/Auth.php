<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Pembeli;

class Auth extends Controller
{
    public function index()
    {
        //include helper form
        // helper(['form']);
        $data = [];
        echo view('layout/header');
        echo view('test_register', $data);
        echo view('layout/footer');
    }
 
    public function save()
    {
        //include helper form
        // helper(['form']);
        //set rules validation form
        $rules = [
            'nama'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'no_ktp'        => 'required|min_length[16]|max_length[16]',
            'username'      => 'required|min_length[3]|max_length[20]',
            'no_hp'         => 'required|min_length[10]|max_length[13]',
            'alamat'        => 'required|min_length[6]|max_length[200]'
        ];
         
        if($this->validate($rules)){
            $model = new Model_Pembeli();
            $data = [
                'no_ktp'     => $this->request->getVar('no_ktp'),
                'username'    => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'email'    => $this->request->getVar('email'),
                'no_hp'    => $this->request->getVar('no_hp'),
                'nama'    => $this->request->getVar('nama'),
                'jenis_kelamin'    => $this->request->getVar('jenis_kelamin'),
                'alamat'    => $this->request->getVar('alamat'),

            ];
            $model->save($data);
            return redirect()->to('/homepage');
        }else{
            $data['validation'] = $this->validator;
            echo view('layout/header');
            echo view('test_register', $data);
            echo view('layout/footer');
        }
         
    }
}