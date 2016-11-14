<?php

namespace App\Http\Controllers;

use App\Events\StatusWasPublished;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $statuses = Status::all();
        return view('status.index', compact('statuses'));
    }

    public function validator($request)
    {
        $rules = [
            'body' => 'required',
        ];

        $messages = [
            'body.required' => 'Status can\'t be empty',
        ];

        Validator::make($request->all(), $rules, $messages)->validate();
    }

    public function store(Request $request)
    {
        $this->validator($request);

        $user = User::find(Auth::user()->id);

        $user->statuses()->create($request->all());

        Event::fire(new StatusWasPublished());

        return redirect()->back();
    }
}
