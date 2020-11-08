<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
        if (Auth::check() && Auth::user()->role->id==1){
            $this->redirectTo=route('admin.dashboard');
        }elseif (Auth::check() && Auth::user()->role->id==2){
            $this->redirectTo=route('institute.dashboard');
        }elseif (Auth::check() && Auth::user()->role->id==3){
            $this->redirectTo=route('student.dashboard');
        }else
        {
            $this->redirectTo = route('login');
        }

    }
}
