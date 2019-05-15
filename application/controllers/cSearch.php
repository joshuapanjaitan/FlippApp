<?php 

class cSearch extends CI_Controller{

    public function index(){
        $data['judul'] = 'Search';
        $this->load->view('templates/header',$data);
        $this->load->view('search/search');
        $this->load->view('templates/footer');
    }

   

}


?>