<?php

namespace App\Controllers;

use App\Models\Model_Mobil;

class Input_mobil extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('input_mobil_baru');
        echo view('layout/footer');
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'id_mobil'        => 'required',
            'tipe_mobil'      => 'required',
            'merek'           => 'required',
            'model'           => 'required',
            'harga'           => 'required',
            'stok'            => 'required',
            'transmisi'       => 'required',
            'bahan_bakar'     => 'required',
            'tahun_perakitan' => 'required|min_length[4]'
        ];
         
        if($this->validate($rules)){
            $model = new Model_Mobil();
            $data = [
                'id_mobil'          => $this->request->getVar('id_mobil'),
                'tipe_mobil'        => $this->request->getVar('tipe_mobil'),
                'merek'             => $this->request->getVar('merek'),
                'model'             => $this->request->getVar('model'),
                'harga'             => $this->request->getVar('harga'),
                'stok'              => $this->request->getVar('stok'),
                'transmisi'         => $this->request->getVar('transmisi'),
                'bahan_bakar'       => $this->request->getVar('bahan_bakar'),
                'tahun_perakitan'   => $this->request->getVar('tahun_perakitan'),

            ];
            $model->save($data);
            return redirect()->to('Main');
        }else{
            $data['validation'] = $this->validator;
            echo view('layout/header');
            echo view('input_mobil_baru', $data);
            echo view('layout/footer');
        }
         
    }
}
