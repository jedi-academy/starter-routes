<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Jake
 */
class First extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        // loads justone
        $this->data['pagebody'] = 'justone';

        // gets first low
        $record = $this->quotes->first();

        // merge the records to data array
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    public function zzz()
    {

        // loads justone
        $this->data['pagebody'] = 'justone';

        // gets first quote
        $record = $this->quotes->first();

        // merge the records to data array
        $this->data = array_merge($this->data, $record);

        $this->render();
    }

    public function gimme($id)
    {
        // loads justone
        $this->data['pagebody'] = 'justone';

        // gets quote of id
        $source = $this->quotes->get($id);

        // merge the records to data array
        $this->data = array_merge($this->data, $source);

        $this->render();
    }

}
