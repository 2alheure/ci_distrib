<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Model {

	private $css = array(
		'datatables' => 'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css',
		'bootstrap' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
		'fontawesome' => 'https://use.fontawesome.com/releases/v5.0.13/css/all.css',
	);

	private $js = array(
		'jquery' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',
		'datatables' => 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
		'bootstrap' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
		'fontawesome' => 'https://use.fontawesome.com/releases/v5.3.1/js/all.js',
		
	);

	private $img = array(
		'favicon' => 'img/favicon.png',
	);

	public function css($css) {
		if (!isset($this->css[$css])) return null;
		return $this->css[$css];
	}

	public function js($js) {
		if (!isset($this->js[$js])) return null;
		return $this->js[$js];
	}

	public function img($img) {
		if (!isset($this->img[$img])) return null;
		return $this->img[$img];
	}
}