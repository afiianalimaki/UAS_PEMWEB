<?php

class Info extends Controller{
    public function index()
    {
        $data['judul'] = 'Info index';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('info/index', $data);  
        $this->view('templates/footer'); 
    }
}