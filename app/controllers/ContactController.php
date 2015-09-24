<?php

class ContactController extends BaseController {
    
    /**
	  * Contact info
      *
	  * @return Response
	  */
	public function index()
	{
		return View::make('pages.contact.contact');
	}

}
