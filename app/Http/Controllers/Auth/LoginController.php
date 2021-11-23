<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 */
class LoginController extends Controller
{
   /**
    * Undocumented function
    *
    * @return void
    */
   public function create()
   {
      return Inertia::render('Auth/Login');
   }

   /**
    * Authntication in store
    *
    * @param Request $request
    * @return void
    */
   public function store(Request $request)
   {
      $credentials = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();
         return redirect()->intended('/');
      }

      return back()->withErrors([
         'email' => 'The provided credentials do not match our records.',
      ]);
   }

   /**
    * Undocumented function
    *
    * @return void
    */
   public function destroy()
   {
      Auth::logout();
      return redirect()->route('login');
   }
}
