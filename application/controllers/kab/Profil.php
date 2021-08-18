<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  $this->load->model('Wilayah_model', 'wilayah');
        //is_logged_in();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil Lembaga',
            'content' => 'kab/profil'
        ];
        $this->load->view('templates/main_template', $data);
    }
}
