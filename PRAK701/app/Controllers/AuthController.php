<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('buku'));
        }
        return view('auth/login');
    }

    public function process()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)
                          ->orWhere('email', $username)
                          ->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'logged_in' => true,
                'user_id'   => $user['id'],
                'username'  => $user['username']
            ]);
            return redirect()->to(base_url('buku'));
        } else {
            session()->setFlashdata('error', 'Username/Email atau Password salah.');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function register()
    {
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('buku'));
        }
        return view('auth/register');
    }

    public function registerProcess()
    {
        if (!$this->validate([
            'username' => 'required|min_length[3]|is_unique[user.username]',
            'email'    => 'required|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[6]'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        
        $userModel->save([
            'username' => $username,
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);
        
        // Auto login after register
        $user_id = $userModel->insertID();
        session()->set([
            'logged_in' => true,
            'user_id'   => $user_id,
            'username'  => $username
        ]);
        
        return redirect()->to(base_url('buku'))->with('success', 'Registrasi berhasil! Anda telah otomatis login.');
    }
}
