<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:100'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        Alert::success('Registration successfull!!', 'Please Login');
        return redirect('/login');
    }
}
