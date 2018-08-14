<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Errors {

	public function error_404() {
		// personalizar
		header("Location: ./");
		exit();
	}

	public function show_error($msg) {
		die($msg);
	}

}