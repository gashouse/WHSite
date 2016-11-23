<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    protected $redirectTo = '/admin';

// --------------------------------------------------------------------------------
// Create a new controller instance.
// --------------------------------------------------------------------------------
    public function __construct()
    {
        $this->middleware('guest');
    }

// --------------------------------------------------------------------------------
// Display the password reset view for the given token.
// --------------------------------------------------------------------------------
	public function showResetForm(Request $request, $token = null)
	{
		return view('auth.templates-password__reset')->with(
			['token' => $token, 'email' => $request->email]
		);
	}

}
