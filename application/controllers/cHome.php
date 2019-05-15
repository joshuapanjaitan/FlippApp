<?php 

class cHome extends CI_Controller{

    public function index(){
        $data['judul'] = 'FlippApp';
        $this->load->view('templates/header',$data);
        $this->load->view('home/home');
        $this->load->view('templates/footer');
    }

   

}


?>