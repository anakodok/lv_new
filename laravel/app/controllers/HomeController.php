<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
  
  protected $layout = "layouts.master";
  
  public function index() {
    //$data['header'] = "Home Header";
    //$data['title'] = "Home Title";
    //$data['description'] = "Home Page Meta Description";
    
    //return View::make('home', $data);
    
    $data['header'] = "Home Header";
    
    $this->layout->title = "Home Title";
    $this->layout->description = "Home Meta Description";
    $this->layout->content = View::make('home', $data);
  }

}
