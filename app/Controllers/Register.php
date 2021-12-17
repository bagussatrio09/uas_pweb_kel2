<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function save()
    {

        $model = new UserModel();
        $data = [
            'username'     => $this->request->getVar('username'),
            'name'     => $this->request->getVar('name'),
            'email'     => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $model->insert($data);
        return redirect()->to('/home');
    }
}
