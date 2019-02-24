<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**  
  * Main class controller, will be loading pages under views/<class_name>
  */
class Main extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	/**
	 * @method index()
	 * @return null
	 * Method will load under views/<class_name>/<method_name>.php
	 * All data handling should be passed under $this->view_data['key' => 'value']
	 * Data value will be accessed at view via @$key
	 * @ identifier denotes that the variable is a server variable
	 */
	
	public function index() {//function name should be same on target view file e.g.(application/views/pages/index.php)
		$this->view_data = [
			"title" => "Hello World!", //page title
			"styles" => [
				//"", //css to load while omitting .css file extension
			],
			"scripts" => [
				"assets/js/custom", //js to load while omitting .js file extension
			]
		];  
	}
	
	public function function_name() {

	}
}
