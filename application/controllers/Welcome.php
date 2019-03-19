<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('console');
		if (ENVIRONMENT == 'development') $this->output->enable_profiler();
	}

	public function index() {
		$this->console->log(42, 'testLog');
		$this->load->model('assets');
		$this->load->view('base', array(
			'title' => 'Ma distribution CodeIgniter !'
		));
	}
}
