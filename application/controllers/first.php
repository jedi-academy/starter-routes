<?php

defined('BASEPATH') OR exit('No direct script access allowed');
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
        $source = $this->quotes->get(1);
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->render();
     }

    public function zzz(){
        $this->data['pagebody'] = 'justone';   
        $source = $this->quotes->get(1);
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->render();
    }
   public function gimme($id){
        // loads justone
        $this->data['pagebody'] = 'justone';	
        
	$source = $this->quotes->get($id);

	$this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->render();
    }
     
}
