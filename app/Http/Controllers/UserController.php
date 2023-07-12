<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }

    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);


        if ($validator->fails()) {
            return back()->with('message', 'Validation error!.');
        }

        if (Auth::guard('pharmacy')->attempt($validator->validated(),$request->filled('remember')))
        {
            //return redirect('pharmacy/dashboard')->with('message', 'Pharmacy account created successfully!');
            return redirect()->intended(route('pharmacy.dashboard'))
            ->with('status','You are Logged in as Admin!');
        }
        return back()->with('message', 'User not found!.');
    }
}
