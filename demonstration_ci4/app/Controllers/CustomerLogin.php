<?php

namespace App\Controllers;

use App\Models\User;

class CustomerLogin extends BaseController
{
    public function index()
    {
        if (session()->get('customer_logged_in') === true) {
            return redirect()->to(site_url('account'));
        }

        return view('customer_login', [
            'title' => 'My Account Login - Puihaha Electric',
            'page' => 'customer_login',
        ]);
    }

    public function authenticate()
    {
        $email = trim((string) $this->request->getPost('email'));
        $password = (string) $this->request->getPost('password');

        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email|max_length[255]',
            'password' => 'required',
        ]);

        if (! $validation->run(['email' => $email, 'password' => $password])) {
            return redirect()->to(site_url('account/login'))->with('error', 'Enter a valid email and password.');
        }

        $user = (new User())->findByEmail($email);

        if ($user === null || ! $user['is_active'] || ! password_verify($password, $user['password'])) {
            return redirect()->to(site_url('account/login'))->with('error', 'Invalid email or password.');
        }

        session()->regenerate(true);
        session()->set([
            'customer_logged_in' => true,
            'customer_user_id' => $user['id'],
        ]);

        return redirect()->to(site_url('account'));
    }

    public function logout()
    {
        session()->remove(['customer_logged_in', 'customer_user_id']);
        return redirect()->to(site_url());
    }
}
