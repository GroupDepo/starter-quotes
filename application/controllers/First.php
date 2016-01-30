<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

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
                $record = $this->quotes-> first();      // fetch the first person's quote function
                
                $this->data = array_merge($this->data,$record);     //convert and output
                
		$this->render();
	}
        
        function zzz()      //create the new zzz function for sleep page
        {
            $this->data['pagebody'] = 'justone';	// this is the view we want shown
                $record = $this->quotes-> first();      // set to first person in the list using first function
                
                $this->data = array_merge($this->data,$record); //convert and output
                
		$this->render();
        }
        
        function gimme($id)
        {
            $this->data['pagebody'] = 'justone';	// this is the view we want shown
                $record = $this->quotes-> get($id);     //call the get() function and allows for retrieve of id value from site
                
                $this->data = array_merge($this->data,$record);     //convert and output
                
		$this->render();
        }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */