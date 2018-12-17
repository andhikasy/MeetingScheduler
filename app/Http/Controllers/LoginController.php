<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends \BaseController
{

    public function getLoginForm()
    {
      return View::make('login');
    }

    public function doLogin()
    {
      $rules = array(
        'email' => 'required | email',
        'password' => 'required'
      );
      $validator = Validator::make(Input::all(),$rules);

      if(&$validator->fails()){
        return Redirect::to('login-admin')
        ->withErrors($validator)
        ->withErrors(Input::except('password')
      );
    }else{
      $userdata = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
      );

      if(Auth::attempt($userdata)){
        return "Successfully Login"
      }else{
        return "OOPS!! Can not Login"
      }
    }
    }
}
