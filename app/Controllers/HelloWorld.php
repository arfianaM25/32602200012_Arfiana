<?php

namespace app\Controllers;

use App\Controllers\BaseController;

class HelloWorld extends BaseController
{
        public function halodunia()
        {
            return "<h1>Hello World</h1>";
        }
}