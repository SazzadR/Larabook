<?php

namespace App\Http\Controllers;

use App\Events\StatusWasPublished;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('status.index');
    }

    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->statuses()->create($request->all());

        Event::fire(new StatusWasPublished());

        return redirect()->back();
    }
}
