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
 * @author Nick
 */
class First extends Application {
    //put your code here
    
    public function index()
	{      
            $record = $this->quotes->get('1');
            $this->data = array_merge($this->data, $record);
            $this->data['pagebody'] = 'justone';
            $this->render();
	}
       
}
