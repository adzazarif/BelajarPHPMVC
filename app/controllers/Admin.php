<?php

class Admin extends Controller{
    public function index()
    {
        $data['url'] = BASEURL;
        $this->view('templates/header',$data);
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }
    public function client()
    {
        
        $data['dataAll'] = $this->model('ClientModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/client',$data);
        $this->view('templates/footer');
    }
    
    public function clientMarkup()
    {
        $data['dataAll'] = $this->model('ClientMarkupModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/clientMarkup',$data);
        $this->view('templates/footer');
    }

    public function addClientMarkup(){
        if($this->model('ClientMarkupModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/clientMarkup");
        }else{
            echo "gagal";
        }
    }
}