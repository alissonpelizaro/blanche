<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/**
	 * Classe de controle de inicio
	 * (login, logout e pagina inicial)
	 */
	public function index(){
		if(!isset($_SESSION['logged'])){
			$this->load->view('login');
		} else {
			$this->load->view('inicio');
		}
	}

	public function login(){
		echo "entrou";
	}
}
