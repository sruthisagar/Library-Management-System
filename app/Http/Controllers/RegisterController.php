<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the registration form submission.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'otp' => 'required',
        ]);

        // Insert the form values into the 'users' table using Query Builder
        DB::table('users')->insert([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'otp' => $request->input('otp'),
            // ... Set other user properties
        ]);

        // Redirect to a success page or perform any other actions
        return view('pages.home');
    }

    public function showRegForm()
    {
        return view('registration');
    }
}
