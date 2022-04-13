<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class StartController extends Controller
{
    public function index () {
         $users = User::get();

         dd($users);
    }
}
