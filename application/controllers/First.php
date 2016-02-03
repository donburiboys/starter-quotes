<?php

class First extends Application {
    
    function __construct()
    {
            parent::__construct();
    }

    function index() 
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $this->data['mug']  = $source['mug'];
        $this->data['who']  = $source['who'];
        $this->data['what'] = $source['what'];
        $this->render();
    }
    function zzz()
    {
        // load view
        $this->data['pagebody'] = 'justone';
        
        // get qoute data
        $source = $this->quotes->get('1');
        
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
