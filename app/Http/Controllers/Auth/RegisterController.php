<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request->only('username','password'));
        $this->validate($request, [
            'name' => 'required|max:20',
            'username' => 'required|max:20',
            'email' => 'required|email|max:20',
            'password' => 'required|confirmed',
        ]);
        //Creating array of data to store in db
        User::create([
'name' => $request->name,
'username' => $request->username,
'email' => $request->email,
'password' => Hash::make($request->password),
        ]);
        //Signing in
        auth()->attempt($request->only('username','password'));
        return redirect()->route('dashboard');
    }
}
