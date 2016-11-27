<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, $statusId)
    {
        $status = Status::find($statusId);

        $status->comments()->create($request->all());

        return redirect()->back();
    }
}
