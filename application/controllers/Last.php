<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Last
 *
 * @author Francis Quintal
 */
class Last extends Application {

    function __construct()
	{
		parent::__construct();
	}
    
    public function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $full = $this->quotes->all();
        $authorNum = count($full);
        $source = $this->quotes->get($authorNum);
        
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

}
