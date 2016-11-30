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

        $comment = $status->comments()->create($request->all());

        if ($request->ajax()) {
            $view = view('status.ajax.comment-data', compact('comment'))->render();
            return response()->json(['comment' => $view]);
        }

        return redirect()->back();
    }
}
