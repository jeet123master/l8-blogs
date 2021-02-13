<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;



    protected $redirectTo;


    public function __construct()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.home');
        }else{
            $this->redirectTo = route('author.home');   
        }
        
        $this->middleware('guest');
    }
}
