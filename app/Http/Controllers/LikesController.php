<?php

namespace App\Http\Controllers;

use Auth;
use App\Status;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like(Request $request)
    {
        $statusId = $request->get('status_id');

        $status = Status::find($statusId);

        $request->merge(['user_id' => Auth::user()->id]);

        $status->likes()->firstOrCreate($request->all());

        $totalLikes = $status->likes()->count();

        return response()->json(['totalLikes' => $totalLikes], 200);
    }
}
