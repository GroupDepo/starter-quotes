<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

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
                $record = $this->quotes-> get("5");     //get the 5th picture and quote
                
                $this->data = array_merge($this->data,$record);     //conjugate string
                
		$this->render();
	}
        
        
}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */