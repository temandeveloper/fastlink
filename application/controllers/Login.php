<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	//login var
	public $model = NULL;
 

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper','url');
		$this->load->helper('date');
		$this->load->model('Login_model');
		$this->model = $this->Login_model;
		$this->load->model('news_model');
		$this->load->library('session');

	}

  public function dashboardView(){
    if (isset($_POST['submit'])) {
      $this->model->user = $_POST['username'];
      $this->model->pass = $_POST['password'];
      if ($this->model->validation() == TRUE) {
        $this->session->set_userdata('username', $this->model->user);
				$this->model->logUser = $this->session->userdata('username');
				$format = 'DATE_RFC850';
				$time = now('Asia/Jakarta');;
				$this->model->logtgl = standard_date($format, $time);
				$this->model->riwayatLogin();
        redirect('dashboard');
      }else {
				echo "<script>alert('gagal');</script>";
				redirect('login');
      }
    }else {
      $this->load->view('pages/login');
    }
  }
  public function logout(){
    if($this->session->has_userdata('username')){
      $this->session->sess_destroy();
      redirect('administrator');
    }
  }

	public function viewLogin(){
		if ($this->session->userdata('username') == TRUE) {
			redirect('dashboard');
		}else {
			$this->load->view('pages/login');
		}
	}

	public function sessCheck(){
		if ($this->session->userdata('username') == TRUE) {
			redirect('dashboard');
		}else {
			redirect('login');
		}
	}
}
