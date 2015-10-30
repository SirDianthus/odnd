<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$data['content'] = $this->markdown->parse_file('../views/md/index');
		$data['title'] = 'Home';
		$this->load->view('template', $data);
	}
}
