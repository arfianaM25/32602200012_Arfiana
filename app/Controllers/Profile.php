<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function profile()
    {
        return view('profile');
    }

    public function skills()
    {
        return view('skills');
    }
}