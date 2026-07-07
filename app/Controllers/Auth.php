<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('login', [
            'title' => 'Login Sistem'
        ]);
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (empty($username) || empty($password)) {

            return redirect()->back()->with(
                'error',
                'Username dan Password wajib diisi.'
            );
        }

        $userModel = new UserModel();

        $user = $userModel
            ->where('username', $username)
            ->first();

        if (!$user) {

            return redirect()->back()->with(
                'error',
                'Username tidak ditemukan.'
            );
        }

        if (!password_verify($password, $user['password'])) {

            return redirect()->back()->with(
                'error',
                'Password salah.'
            );
        }

        session()->set([
            'id_user'   => $user['id_user'],
            'nama'      => $user['nama'],
            'username'  => $user['username'],
            'logged_in' => true
        ]);

        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}
