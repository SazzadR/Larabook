<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class FollowsController extends Controller
{
    public function follow($followed_id)
    {
		$follower = User::find(Auth::user()->id);

		$follower->follows()->sync([$followed_id], false);

		return redirect()->back();
    }

    public function unfollow($followed_id)
    {
        $follower = User::find(Auth::user()->id);

        $follower->follows()->detach([$followed_id], false);

        return redirect()->back();
    }
}
