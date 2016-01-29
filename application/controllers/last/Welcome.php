<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 * This is created for the last link
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	//-------------------------------------------------------------
	//  The normal pages
	//-------------------------------------------------------------

	function index()
	{
		$this->data['pagebody'] = 'justone';	// this is the view we want shown
                $record = $this->quotes-> last();   //call for the last function for the last link
                
                $this->data = array_merge($this->data,$record);  //combine output from function with data
                
		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */