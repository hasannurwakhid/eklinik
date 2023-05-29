<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserData;

class DashboardController extends Controller
{
    public function index(User $user){
        return view('dashboard',[
            "userData" => UserData::where('username',auth()->user()->username)->get()
        ]);
    }
}
