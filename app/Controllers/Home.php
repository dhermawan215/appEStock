<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboad - welcome'
        ];
        return view('pages/dashboard', $data);
    }
}
