<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function sendAllEmail()
    {
        $email = Email::all();

        
        return view('admin.input_leader',  [
            'leader' => $leader,
            'user' => $user,
        ]);
    }
}
