<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {//function name should be same on target view file e.g.(application/views/pages/index.php)
		$this->view_data = [
			"title" => "Success!", //page title
			"styles" => [
				"assets/css/icon", //css to load omitting .css file extension
			],
			"scripts" => [
				"assets/js/custom", //js to load omitting .js file extension
			]
		];  
	}
	
	public function function_name() {

	}
}
