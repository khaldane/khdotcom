<?php

class UserController extends BaseController {
    
	public function index() {
		return View::make('pages.admin.login');
	}
    
    public function logout() {
        if (Auth::user()) {
            Auth::logout();
        }
		return Redirect::to('/');
	}

    public function authenticate() {
       if((Auth::attempt(['email' => 'khaldane19@gmail.com', 'password' => $_POST['password']]))) {
            $portfolio = DB::table('portfolio')->orderBy('id','desc')->get();
            $tutorials = ""; 
            return View::make('pages.admin.admin-panel', array('portfolio' => $portfolio, 'tutorials' => $tutorials));
       } else {
           return Redirect::back()->withErrors(['Incorrect Password', 'error']);
       }
    }
    
    public function register() {
        $user = new User();
        $user->email = 'khaldane19@gmail.com';
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        Auth::login($user);
    }
}