<?php

namespace App\Controllers;

use App\Models\User;

class CustomerAccount extends BaseController
{
    public function index()
    {
        if (session()->get('customer_logged_in') !== true) {
            return redirect()->to(site_url('account/login'));
        }

        $user = (new User())->find(session()->get('customer_user_id'));

        if ($user === null) {
            session()->remove(['customer_logged_in', 'customer_user_id']);
            return redirect()->to(site_url('account/login'))->with('error', 'Please log in again.');
        }

        return view('customer_account', [
            'title' => 'My Account - Puihaha Electric',
            'page' => 'account',
            'user' => $user,
        ]);
    }
}
