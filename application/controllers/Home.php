<?php
    class Home extends CI_Controller
    {
        public function index()
        {
            $data['score1'] = 15;
            $data['score2'] = 69;
            $data['ville'] = "Dijon";
            $this->load->view("bellepage", $data);
        }
    }
?>