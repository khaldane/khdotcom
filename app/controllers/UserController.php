<?php

use models\Admin;

class UserController extends BaseController {
    
    /**
	  * Login
      *
	  * @return Response
	  */   
	public function index() {
		return View::make('pages.admin.login');
	}
    
    /**
	  * Logout
      *
	  * @return Response
	  */
    public function logout() {
        if (Auth::user()) {
            Auth::logout();
        }
		return Redirect::to('/');
	}

    /**
	  * Authenticate
      *
	  * @return Response
	  */
    public function authenticate() {
       if((Auth::attempt(['email' => 'khaldane19@gmail.com', 'password' => $_POST['password']]))) {
            $portfolio = Admin::getPortfolio();
            $tutorials = Admin::getTutorials(); 
		  return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
       } else {
           return Redirect::back()->withErrors(['Incorrect Password', 'error']);
       }
    }
    
    /**
	  * Register
      *
	  * @return Response
	  */
    public function register() {
        $user = new User();
        $user->email = 'khaldane19@gmail.com';
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        Auth::login($user);
    }
}
