<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $loginuser = new \App\Models\LoginModel();
        $login = $this->request->getVar('login');
        $data = [
            'title' => 'Login Admin'
        ];
        if ($login) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            if ($username == '' or $password == '') {
                $err = "Masukan Username dan Password";
            }
            if (empty($err)) {
                $dataUser = $loginuser->where('username', $username)->first();
                if ($dataUser['password'] != md5($password)) {
                    $err = "Password yang Anda Masukan <b>Salah</b>";
                }
                if ($dataUser['username'] != $username) {
                    $err = "Username yang Anda Masukan <b>Salah</b>";
                }
            }
            if (empty($err)) {
                $sesi = [
                    'id' => $dataUser['id'],
                    'username' => $dataUser['username'],
                    'password' => $dataUser['password'],
                ];
                session()->set($sesi);
                return redirect()->to('/data');
            }
            if ($err) {
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('/login');
            }
        }
        return view('login/admin.php', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user');
    }
}
