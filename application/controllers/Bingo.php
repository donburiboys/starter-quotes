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
		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array('who' => $source[4]['who'], 'mug' => $source[4]['mug'], 'what' => $source[4]['what']);
		
		$this->data['who'] = $authors['who'];
                $this->data['mug'] = $authors['mug'];
                $this->data['what'] = $authors['what'];

		$this->render();
	}

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */