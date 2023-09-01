<?php

class Home extends Controller{
    public function index()
    {
        // $data['nama'] = $this->model('UserModel')->getName();
        $data['all'] = $this->model("UserModel")->getAll();
        $data['url'] = BASEURL;
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}