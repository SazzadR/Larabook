<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->simplePaginate(25);
        return view('users.index', compact('users'));
    }
}
