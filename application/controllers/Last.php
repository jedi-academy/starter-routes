<?php

defined('BASEPATH') OR exit('No direct script allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Last
 *
 * @author Kearney
 */
class Last extends Application {
    
    public function index()
    {
        //$last = $this->quotes->all()->length;
        $record = $this->quotes->get('6');
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
}
