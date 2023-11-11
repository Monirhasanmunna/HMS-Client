<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Models\Userlog;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $user = User::where('email',$request->email)->first();
        if(@$user->status == 1){

            $request->authenticate();
            $request->session()->regenerate();

            //user log create
            if(Auth::check()){
                Userlog::create([
                    'user_name' => Auth::user()->name,
                    'role' => Auth::user()->role->name,
                    'email' => Auth::user()->email,
                    'created_at' => Carbon::now(),
                    'log_date'  => date('Y-m-d')
                ]);
            }

            return redirect()->intended(RouteServiceProvider::HOME);
        }else{
             return abort('401');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
