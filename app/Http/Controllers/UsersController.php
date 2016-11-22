<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->orderBy('username', 'asc')->simplePaginate(25);
        return view('users.index', compact('users'));
    }

    public function show($username)
    {
        $user = User::with([
            'statuses' => function ($query) {
                $query->latest();
            }
        ])->where('username', $username)->first();

        return view('users.show', compact('user'));
    }
}
