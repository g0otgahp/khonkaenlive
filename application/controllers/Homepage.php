<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function home()
	{
		$this->load->view('header');
		$this->load->view('front/home');
		$this->load->view('footer');
	}
}
