<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseProject extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('databaseProject/home');
        $this->load->view('templates/footer');
	}
}
 ?>
