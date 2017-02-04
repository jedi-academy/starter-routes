<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{
    
    function __construct()
    {
            parent::__construct();
    }

    /**
     * First page for our app
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('1');

        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    public function zzz()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('1');

        $this->data = array_merge($this->data, $source);

        $this->render();
    }

    public function gimme($id)
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($id);

        $this->data = array_merge($this->data, $source);

        $this->render();
    }
}
