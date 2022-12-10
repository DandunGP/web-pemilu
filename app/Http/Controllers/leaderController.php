<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use App\Models\User;
use Illuminate\Http\Request;

class leaderController extends Controller
{
    public function index()
    {
        $leader = Leader::withCount('User')->get();
        $user = User::all();
        return view('admin.input_leader',  [
            'leader' => $leader,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $dataValidate = $request->validate([
            'name' => 'required',
            'vision_mission' => 'required',
        ]);
        
        Leader::create($dataValidate);
        
        return redirect('/input-leader');
    }
}
