<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuiter extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('post_model');
		$coisas['posts'] = $this->post_model->recuperar();
		$this->load->view('nav');
		$this->load->view('conteudo',$coisas);
		$this->load->view('rodape');
	}
	public function tuitar()
	{
		$this->load->view('nav');
		$this->load->view('tuitar');
		$this->load->view('rodape');
              
	}
	public function salvar()
	{
		$this->load->model('post_model');
		$msg = $_POST["mensagem"];
		$this->post_model->msg = $msg;
        $this->post_model->inserir();      
	}

}
