<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	/**
	 * Create 3 Oct 2017
	 * Author Arip Budiyono
	 * budiyono85@gmail.com
	 */
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('AboutUs');
		$this->load->view('Footer');
	}
	public function test()
	{
		$this->load->view('welcome_message');
	}
}
