<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Classe de controle principal
	 */
	public function index(){
		if(!isset($_SESSION['logged'])){
			//echo base_url();
			$this->load->view('login');
		} else {
			$this->load->view('inicio');
		}
	}
}
