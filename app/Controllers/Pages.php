<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function profile()
    {
        // Implementasi metode profile
    }

    public function skills()
    {
        // Implementasi metode skills
        return view('skills');
    }
}
?>