<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CustomAuthController extends Controller
{

   public function index()
   {
      return view('auth.login');
   }

   public function customLogin(Request $request)
   {
      $request->validate([
         'username' => 'required',
         // 'email'    => 'required',
         'password' => 'required'
      ]);

      $credentials = $request->only('username', 'password');
      if (Auth::attempt($credentials)) {
         return redirect()->intended('/')
            ->withSuccess('Signed in');
      }

      return redirect("login")->withSuccess('Login details are not valid');
   }

   public function registration()
   {
      return view('auth.registration');
   }

   public function customRegistration(Request $request)
   {
      $request->validate([
         'name'     => 'required',
         'email'    => 'required|email|unique:users',
         'password' => 'required|min:6'
      ]);

      $data  = $request->all();
      $check = $this->create($data);

      return redirect("/")->withSuccess('You have signed-in');
   }

   public function create(array $data)
   {
      return User::create([
         'name'     => $data['name'],
         'email'    => $data['email'],
         'password' => Hash::make($data['password'])
      ]);
   }

   public function main()
   {
      if (Auth::check()) {
         return view('main');
      }

      return redirect("login")->withSuccess('You are not allowed to access');
   }

   public function signOut()
   {
      Session::flush();
      Auth::logout();

      return Redirect('login');
   }
}
