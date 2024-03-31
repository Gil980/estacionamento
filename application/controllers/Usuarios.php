<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Usuarios extends CI_Controller{


    public function index() {

        $data = array(
            'titulo' => 'Usuários cadastrados',
            'sub_titulo' => 'Todos os usuários cadastrados',
            
            
            'style' => array(
                'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'
            ),            
            
            'scripts' => array(
                'plugins/datatables.net/js/jquery.dataTables.min.js', 
                'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                'plugins/datatables.net/js/estacionamento.js',
            ),
            'usuarios' => $this->ion_auth->users()->result(), // get all users
        );

       

        $this->load->view('layout/header', $data);
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');

    }
}