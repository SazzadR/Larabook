<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->orderBy('username', 'asc')->simplePaginate(25);
        return view('users.index', compact('users'));
    }

    public function show(Request $request, $username)
    {
        $user = User::with([
            'statuses' => function ($query) {
                $query->latest()->paginate(5);
            }
        ])->where('username', $username)->first();

        $statuses = $user->statuses;

        if ($request->ajax()) {
            $view = view('status.ajax.status-data', compact('statuses'))->render();
            return response()->json(['html' => $view]);
        }

        if ($user->is(Auth::user())) {
            return view('users.show', compact('user', 'statuses'));
        }

        $currentUser = User::find(Auth::user()->id);
        $currentUserFollows = $currentUser->follows->contains($user->id);

        return view('users.show', compact('user', 'currentUserFollows', 'statuses'));
    }
}
