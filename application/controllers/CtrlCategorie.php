<?php
    class CtrlCategorie extends CI_Controller
    {
        public function index()
        {
            $data['titre'] = "Les nouvelles catégories";
            $data['sousTitre'] = "Classement";
            $data['titre'] = array('Hasard', 'Aventure');
            $this->load->view('AfficherCategorie', $data);
        }
    }
?>