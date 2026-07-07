<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $id = session()->get('id_user');

        $user = $this->userModel->find($id);

        return view('profile/index', [
            'user' => $user
        ]);
    }

    public function updatePassword()
    {
        $id = session()->get('id_user');

        $user = $this->userModel->find($id);

        $oldPassword = $this->request->getPost('old_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // cek password lama
        if (!password_verify($oldPassword, $user['password'])) {
            return redirect()->back()->with('error', 'Password lama salah');
        }

        // cek konfirmasi
        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'Konfirmasi password tidak sama');
        }

        // update password
        $this->userModel->update($id, [
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ]);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }
}
