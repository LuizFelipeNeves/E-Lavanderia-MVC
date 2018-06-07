<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
		/* Inserir aqui a Função para checar a permissão */	
		$this->load->view('admin');	
    }
}