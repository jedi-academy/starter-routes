<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        // loads justone
        $this->data['pagebody'] = 'justone';

        // gets the quote
        $source = $this->quotes->get(1);

        // merge the records to data array
        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    public function bingo() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(6);
        $this->data = array_merge($this->data, $source);
        $this->render();
    }

}
