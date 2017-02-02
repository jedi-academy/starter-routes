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
       $source = $this->quotes->get(6);
       $this->data['mug'] = $source['mug'];
       $this->data['who'] = $source['who'];
       $this->data['what'] = $source['what'];
       $this->render();
     }
}
