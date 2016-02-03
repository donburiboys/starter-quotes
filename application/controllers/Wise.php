<?php


class Wise extends Application {
    
    function __construct()
	{
            parent::__construct();
	}

	function bingo()
	{
            // load view
            $this->data['pagebody'] = 'justone';

            // get qoute data
            $source = $this->quotes->get('6');

            // image
            $this->data['mug']  = $source['mug'];

            // person
            $this->data['who']  = $source['who'];

            // qoute
            $this->data['what'] = $source['what'];

            // render page
            $this->render();
	}
}
