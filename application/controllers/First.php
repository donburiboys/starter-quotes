<?php

class First extends Application {
    
    function __construct()
    {
            parent::__construct();
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
