<?php

namespace App\Http\Controllers\OtherLogin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login()
    {
        require base_path() . '\qq\Connect2.1\API\qqConnectAPI.php';
    }
}
