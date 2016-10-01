<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// get first quote
		$source = $this->quotes->get('1');
                
		$this->data = array_merge($this->data, $source);

		$this->render();
	}

}
