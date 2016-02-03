<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
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
		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$parms = array();
		foreach ($source as $record)
		{
			$parms = array('who' => $record['who'], 'mug' => $record['mug'], 'what' => $record['what']);
                        
		}
                
                $this->data['who'] = $parms['who'];
                $this->data['mug'] = $parms['mug'];
		$this->data['what'] = $parms['what'];

		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */