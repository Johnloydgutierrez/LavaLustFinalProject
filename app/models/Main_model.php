<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function index() {
		$this->call->view('Nhome');
	}
	
	public function home() {
		$this->call->view('Nhome');
	}
	public function AddAssignment() {
		$this->call->view('AddAssignment');
	}
	
}
?>