<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function usersOnline()
    {
        $users = new User();
        return response($users->mostRecentOnline());
    }
}
