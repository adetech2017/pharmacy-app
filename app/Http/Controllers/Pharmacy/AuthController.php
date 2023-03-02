<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class AuthController extends Controller
{
    public function register()
    {
        return view('pharmacy.auth.register');
    }

    public function create_pharmacy(Request $request)
    {

        $request->validate( [
            'store_name' => 'required|string|between:2,100',
            'office_phone_number' => 'required|string|max:11|unique:pharmacies',
            'office_address' => 'required|string',
            'email' => 'required|string|email|max:100|unique:pharmacies',
            'password' => 'required|string|confirmed|min:5',
            'reg_number' => 'required|unique:pharmacies',
            'business_number' => 'required|string|unique:pharmacies',
            'contact_name' => 'required',
            'contact_email' => 'required|string',
            'contact_phone_number' => 'required',
            'contact_address' => 'required|string',
        ]);

        //dd($request->all());

        $pharmacy = Pharmacy::create([
            'store_name' => $request->store_name,
            'email' => $request->email,
            'office_phone_number' => $request->office_phone_number,
            'password' => Hash::make($request->password),
            'reg_number' => $request->reg_number,
            'business_number' => $request->business_number,
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_phone_number' => $request->contact_phone_number,
            'contact_address' => $request->contact_address,
            'office_address' => $request->office_address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        if ($pharmacy->save())
        {
            return redirect('pharmacy/login')->with('message', 'Pharmacy account created successfully!');
        }
        return back()->with('message', 'Error creating store!.');
    }


    public function login()
    {
        return view('pharmacy.auth.login');
    }

    public function login_auth(Request $request)
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


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('pharmacy')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
