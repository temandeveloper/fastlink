<?php
class Login_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public $user;
  public $pass;

  public function validation(){

    $sql = "SELECT COUNT(*) AS data FROM login WHERE username = '$this->user' AND password = '$this->pass'";
    $query = $this->db->query($sql);
    $row = $query->row_array();
    return $row['data'] == 1;
//  $query = $this->db->select('login', array('username' => $this->user,'password' => $this->pass));
//  return $query->row_array();
  }

  public $logUser;
  public $logtgl;
  public $id;

  public function riwayatLogin()
  {
    $this->db->query("INSERT INTO log_login VALUES('$this->id','$this->logUser','$this->logtgl')");
  }

  public function getRiwayat()
  {
    $query = $this->db->query("SELECT * FROM log_login");
    return $query->result();
  }
  public function deleteRiwayat(){
    $this->db->query("DELETE FROM log_login WHERE id='$this->id'");
  }
}
