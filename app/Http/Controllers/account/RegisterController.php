<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:8|unique:users',
            'password' => 'required|min:8'
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make(
                $request->password
            )
        ]);

        return redirect()->route('login');
    }
}
