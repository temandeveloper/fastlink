<?php
class Control_Login extends CI_Controller {

  public $model = NULL;

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->model = $this->news_model;
                $this->load->library('session');
                $this->load->helper('url');
        }
        public function index(){
          if(isset($_POST['submit'])){
            $this->model->username = $_POST['username'];
            $this->model->password = $_POST['password'];
            if($this->model->login_model() == TRUE){
              $this->session->set_userdata('username',$this->model->username);
              $this->load->view('pages/dashboard');
            }else{
              echo 'gagal login';
            }
          }else{
            echo 'gagal konek';
          }
        }
        public function logout(){
          if($this->session->has_userdata('username')){
            $this->session->sess_destroy();
            $this->load->view('pages/login');
          }
        }
}
