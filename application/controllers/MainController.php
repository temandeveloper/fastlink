<?php
require_once ('./vendor/autoload.php');
use \Statickidz\GoogleTranslate;
class MainController extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->model('Login_model');
                $this->load->helper('url_helper');
                $this->load->helper('date');
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
        }
        public function home()
        {
          // akses data dari news_model
          $data['populer'] = $this->news_model->get_news_terpopuler();
          $data['infoterkiniA'] = $this->news_model->get_news_infoterkiniA();
          $data['infoterkiniB'] = $this->news_model->get_news_infoterkiniB();
          $data['infoterkiniC'] = $this->news_model->get_news_infoterkiniC();
          $data['teknologi'] = $this->news_model->get_news_seputar_tech();
          $data['aplikasi'] = $this->news_model->get_aplikasimenarik();
          $data['kabargame'] = $this->news_model->get_kabargame();
          $data['kabargetged'] = $this->news_model->get_infogetged();
          $data['tipsunik'] = $this->news_model->get_tipsunik();
          $data['kutipan'] = $this->news_model->get_kutipan();
          // template home
          $this->load->view('template/header');
          $this->load->view('pages/home',$data);
          $this->load->view('template/footer');
          // setiap akses manambah 1 visitor
          $this->news_model->update_visitor();
        }

        public function shortlink()
        {
          $datalink = str_replace("/","",$_SERVER['REQUEST_URI']);
          $datalink = $this->news_model->getlinkshorten($datalink);
          if(!empty($datalink)){
            redirect($datalink[0]['linktext']);
          }else{
            redirect('/');
          }
        }


        public function opennews(){
          $data['article'] = $this->news_model->get_news_all();
          $this->load->view('template/header');
          $this->load->view('pages/article',$data);
          $this->load->view('template/footer');
        }

        public function getpage($slug){
          $data['contentpage'] = $this->news_model->get_content($slug);
          $this->load->view('pages/article',$data);
          $this->load->view('template/footer');
        }

        public function view($slug = NULL){
          $data['news_item'] = $this->news_model->get_news($slug);
          $data['articlelainnya'] = $this->news_model->get_articlelainnya($slug);
          if (empty($data['news_item'])){
              show_404();
          }
          $this->load->view('pages/view', $data);
          $this->load->view('template/footer');
          $this->news_model->update_visitor();
          $this->news_model->update_visitor_article($slug);
        }


        public function adminView($dashboard){
          if ($this->session->userdata('username') == TRUE) {
            $data['berita'] = $this->news_model->get_news_all();
            $data['log'] = $this->Login_model->getRiwayat();
            $data['slide'] = $this->news_model->getSLideupdate();
            $this->load->view('pages/dashboard',$data);
          }else {
            redirect('login');
          }
        }

        public function uploadNews()
        {
          $this->load->view('pages/tabDashboard/upload_form');
        }

        public function kembaliUpload(){
          redirect('dashboard?halaman=updatewebsite');
        }
        public function kembaliUploadSlide(){
          redirect('dashboard?halaman=slideupdate');
        }

        public function delRiwayat($id){
          $this->Login_model->id = $id;
          $this->Login_model->deleteRiwayat();
          redirect('dashboard?halaman=riwayatlogin');
        }

        public function login($login){
          $this->load->view('pages/login',$login);
        }
        //ini login

        public function deleteberita($id){
          $this->news_model->delete_berita($id);
          redirect('index.php/dashboard?halaman=updatewebsite');
        }



        function do_upload2()
        {

                $tipe = $_FILES['userfile']['type'];

                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);


                if (  $this->upload->do_upload('userfile'))

                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('pages/tabDashboard/upload_success', $data);
                }
                $nama = $_FILES['userfile']['name'];
                 $slug = url_title($this->input->post('news'),'dash',TRUE);

                 $tmp_name = $_FILES["userfile"]["tmp_name"];


                 $jam = date("d-m-y");
                 $data = array(
                 'title' => $this->input->post('title'),
                 'slug' => $this->input->post('slug'),
                 'kategori' => $this->input->post('kategori'),
                 'text' => $this->input->post('text'),
                 'foto' => $nama,
                 'tanggal' => $jam
                 );
                 return $this->db->insert('news',$data);
        }
        public function do_upload(){

          $type = $_FILES['foto']['type'];

          $config['upload_path']          = './upload/santri/';
          $config['allowed_types']        = 'gif|jpg|png';


          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('foto'))

          {
                echo "error cok !!!!";
          }
          else
          {
                  $data = array('upload_data' => $this->upload->data());
                    $this->load->view('pages/tabDashboard/upload_success', $data);
                }
                $nama = $_FILES['foto']['name'];
                 $slug = url_title($this->input->post('data_santri'),'dash',TRUE);

                 $data = array(
                   'nomer_induk' => $this->input->post('nomer_induk'),
                   'nomor_santri'=> $this->input->post('nomor_santri'),
                   'nama_santri' => $this->input->post('nama_santri'),

                   'kelamin' => $this->input->post('kelamin'),

                   'tempat_lahir' => $this->input->post('tempat_lahir'),
                   'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                   'nama_bapak' => $this->input->post('nama_bapak'),
                   'nama_ibu' => $this->input->post('nama_ibu'),
                   'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                   'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                   'anakke' => $this->input->post('anakke'),
                   'provinsi' => $this->input->post('provinsi'),
                   'kabupaten' => $this->input->post('kabupaten'),
                   'kecamatan' => $this->input->post('kecamatan'),
                   'desa' => $this->input->post('desa'),
                   'dusun' => $this->input->post('dusun'),
                   'rt' => $this->input->post('rt'),
                   'rw' => $this->input->post('rw'),
                   'tgl_masuk' => $this->input->post('tgl_masuk'),
                   'nomor_hp' => $this->input->post('nomor_hp'),
                   'diniyah' => $this->input->post('diniyah'),
                   'jurusan' => $this->input->post('jurusan'),
                   'foto' => $nama
                 );
                 return $this->db->insert('data_santri',$data);
               }

              function slideupdate($id)
              {

                      $tipe = $_FILES['userfile']['type'];

                      $config['upload_path']          = './upload/';
                      $config['allowed_types']        = 'gif|jpg|png';

                      $this->load->library('upload', $config);


                      if (  $this->upload->do_upload('userfile'))

                      {
                              $data = array('upload_data' => $this->upload->data());

                              $this->load->view('pages/tabDashboard/upload_success_slide', $data);
                      }
                      $nama = $_FILES['userfile']['name'];
                       $slug = url_title($this->input->post('news'),'dash',TRUE);
                       $tmp_name = $_FILES["userfile"]["tmp_name"];
                       $format = 'DATE_RFC850';
                       $time = now('Asia/Jakarta');;
                       $waktu = standard_date($format,$time);
                        $data = array(
                          'tanggal' => $waktu,
                          'nama' => $this->input->post('nama'),
                          'text' => $this->input->post('text'),
                          'foto' => $nama
                        );
                        $this->db->where('id',$id);
                       return $this->db->update('slide_update',$data);
              }

              public function editslide($id)
              {
                      $data['slide_item'] = $this->news_model->edit_slide($id);
                      if (empty($data['slide_item']))
              {
                      show_404();
              }
              $this->load->view('pages/tabDashboard/edit_slide',$data);
              }

/*==================================== shorten link ===================================*/

              public function checklink(){
                  $taglink  = $_POST['taglink'];
                  $response = $this->news_model->checklinkshorten($taglink);
                  echo $response;
              }

              public function createlink(){
                  $textlink = $_POST['textlink'];
                  $taglink = $_POST['taglink'];
                  $response = $this->news_model->insertshortenlink($textlink,$taglink);
                  echo $response['status'];
              }

              public function livespeech(){
                  $this->load->view('pages/livespeech');
              }


              public function gettranslation(){
                $source = $_GET['source']; // asal bahasa
                $target = $_GET['target']; // target bahasa
                $text = $_GET['text']; //text

                $trans = new GoogleTranslate();
                $result = $trans->translate($source, $target, $text);
                echo $result;
              }

}
