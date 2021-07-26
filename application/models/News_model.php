<?php
// Catatan penting CAri kejelasan di GOOGLe
// catatan perbedaan result_array dan row_array
// result_array digunakan untuk melakukan looping data
// sedangkan row_array digunakan untuk melakukan pemanggilan data secara langsung
class News_model extends CI_Model {

        public function __construct()
        {
          $this->load->database();
        }

        // mendapatkan nilai visitor
        public function get_jumlah_visitor(){
          $query = $this->db->query("SELECT * FROM tb_visitor");
          return $query->result_array();
        }

        // update jumlah visitor
        public function update_visitor(){
          $this->db->query("UPDATE tb_visitor SET visitor = visitor + 1 WHERE id = 1");
        }

        // update jumlah visitor perArticle
        public function update_visitor_article($slug = FALSE){
          $this->db->query("UPDATE news SET visitor = visitor + 1 WHERE slug = '$slug'");
        }

        // menampilakan semua Post update

        public function get_news_all(){
          $query = $this->db->query("SELECT * FROM news ORDER BY tanggal DESC");
          return $query->result_array();
        }

        // function menampikan data news home

        public function get_news_terpopuler(){
          $query = $this->db->query("SELECT * FROM news ORDER BY visitor DESC LIMIT 6");
          return $query->result_array();
        }

        public function get_news_infoterkiniA(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'hot' ORDER BY tanggal DESC LIMIT 4");
          return $query->result_array();
        }

        public function get_news_infoterkiniB(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'info' ORDER BY tanggal DESC limit 4");
          return $query->result_array();
        }

        public function get_news_infoterkiniC(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'unik' ORDER BY tanggal DESC limit 4");
          return $query->result_array();
        }

        public function get_news_seputar_tech(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'teknologi' ORDER BY tanggal DESC limit 12");
          return $query->result_array();
        }

        public function get_aplikasimenarik(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'aplikasi' ORDER BY tanggal DESC limit 6");
          return $query->result_array();
        }

        public function get_kabargame(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'game' ORDER BY tanggal DESC limit 6");
          return $query->result_array();
        }

        public function get_infogetged(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'gedget' ORDER BY tanggal DESC limit 6");
          return $query->result_array();
        }

        public function get_tipsunik(){
          $query = $this->db->query("SELECT * FROM news WHERE kategori = 'tips' ORDER BY tanggal DESC limit 6");
          return $query->result_array();
        }

        //Kutipan

        public function get_kutipan(){
          $query = $this->db->query("SELECT * FROM slide_update");
          return $query->result_array();
        }


        //function untuk menampilakan berita berdasarkan slug
        public function get_news($slug = FALSE){
          $query = $this->db->get_where('news', array('slug' => $slug));
          return $query->row_array();
        }

        // menampilkan semua konten sesuai Kategori

        public function get_content($slug){
          if ($slug == 'populer') {
            $query = $this->db->query("SELECT * FROM news ORDER BY visitor DESC");
          }elseif ($slug == 'terupdate') {
            //script ini masih harus dicek kembali
            $query = $this->db->query("SELECT * FROM news WHERE kategori = 'hot' OR kategori = 'info' OR kategori = 'unik' ORDER BY tanggal DESC");
          }else {
            $query = $this->db->query("SELECT * FROM news WHERE kategori = '$slug' ORDER BY tanggal DESC");
          }
          return $query->result_array();
        }

        // menampilakan data articlelainnya secara acak

        public function get_articlelainnya(){
          $query = $this->db->query("SELECT * FROM news ORDER BY RAND() LIMIT 6");
          return $query->result_array();
        }

        public function getSLideupdate()
        {
          $query = $this->db->query("SELECT * FROM slide_update");
          return $query->result();
        }


      public function edit_slide($id = FALSE)
      {
      $query = $this->db->get_where('slide_update', array('id' => $id));
      return $query->row_array();
      }


      public function delete_berita($id){
        return $this->db->delete('news', array('id'=>$id));
      }

      //Mesin login
      public $username;
      public $password;
      public function login_model(){
        $query = $this->db->query("SELECT COUNT(*) AS data FROM user WHERE username = '$this->username' AND password = '$this->password' ");
        $row = $query->row_array();
        return $row['data'] == TRUE;
        }
###############################---BATAS AMAN-----###############################

}
