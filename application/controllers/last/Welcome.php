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
 class Welcome extends Application {
    //put your code here
     function __construct()
	{
		parent::__construct();
	}
     public function index(){
       $this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$record = $this->quotes->last();
		
		$this->data = array_merge($this->data, $record);

		$this->render();
     }
}
