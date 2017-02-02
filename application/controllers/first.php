<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author ljf92
 */
 class first extends Application {
    //put your code here
     function __construct()
	{
		parent::__construct();
	}
     public function index(){
       $this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$record = $this->quotes->first();
		
		$this->data = array_merge($this->data, $record);

		$this->render();
     }

    public function zzz(){
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(1);
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->render();
    }
     
}
