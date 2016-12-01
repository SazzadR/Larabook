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


        if ($user->id == Auth::user()->id) {
            return view('users.show', compact('user'));
        }

        $currentUser = User::find(Auth::user()->id);
        $currentUserFollows = $currentUser->follows->contains($user->id);

        return view('users.show', compact('user', 'currentUserFollows'));
    }
}
