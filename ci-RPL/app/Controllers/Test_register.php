<?php

namespace App\Controllers;

use App\Models\test_register_model;

class Test_register extends BaseController
{
    public function test_register()
    {
        echo view('layout/header');
        echo view('test_register');
        echo view('layout/footer');
    }
    public function save()
    {
        $model = new test_register_model();
        $data = array(
            'customer_firstname'  => $this->request->getPost('customer_firstname'),
            'customer_lastname' => $this->request->getPost('customer_lastname'),
        );
        $model->saveCustomer($data);
        return redirect()->to('/customer');
    }
}
