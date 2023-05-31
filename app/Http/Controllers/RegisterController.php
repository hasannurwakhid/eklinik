<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => "Register",
            'active' => "register"
        ]);
    }
    public function store(Request $request){
        $ValidatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'username' => ['required','min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);
        // $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['password'] = Hash::make($ValidatedData['password']);

        // $userdata = [
        //         'username' => $ValidatedData['username'],
        //         'email' => $ValidatedData['email']
        // ];

        $user = User::create($ValidatedData);
            
        $user->UserData()->create([
                'username' => $ValidatedData['username'],
                'email' => $ValidatedData['email']
        ]);

        // UserData::cre    ate($user);
        
        // $request = session();
        // $request->session()->flash('success', 'Registrasi Berhasil! Silahkan login');
        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login');
    }
}
