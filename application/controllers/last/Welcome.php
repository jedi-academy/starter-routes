<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Last
 *
 * @author Jake
 */
class Welcome extends Application {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        // loads justone
        $this->data['pagebody'] = 'justone';
        
        // gets last low
        $record = $this->quotes->last();
        
        // merge the records to data array
        $this->data = array_merge($this->data, $record);
        
        $this->render();
    }
}
