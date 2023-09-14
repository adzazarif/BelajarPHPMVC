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
        $data['dataType'] = $this->model('ClientTypeModel')->getAll();
        $data['dataStatus'] = $this->model('ClientStatusModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/client',$data);
        $this->view('templates/footer');
      
    }

    public function addClient(){
        if($this->model('ClientModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/client");
        }else{
            echo "gagal";
        }
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

    public function clientStatus()
    {
        $data['dataAll'] = $this->model('ClientStatusModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/clientStatus',$data);
        $this->view('templates/footer');
    }

    public function addClientStatus(){
        if($this->model('ClientStatusModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/clientStatus");
        }else{
            echo "gagal";
        }
    }

    public function clientType()
    {
        $data['dataAll'] = $this->model('ClientTypeModel')->getAll();
        $data['dataMarkup'] = $this->model('ClientMarkupModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/clientType',$data);
        $this->view('templates/footer');
    }

    public function addClientType(){
        if($this->model('ClientTypeModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/clientType");
        }else{
            echo "gagal";
        }
    }

    public function searchClient()
    {
        $data['dataAll'] = $this->model('ClientModel')->getByName($_POST);
        $data['dataType'] = $this->model('ClientTypeModel')->getAll();
        $data['dataStatus'] = $this->model('ClientStatusModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/client',$data);
        $this->view('templates/footer');
      
    }

    public function detailClient($id)
    {
        $data['id'] = $id;
        $data['dataAddress'] = $this->model('ClientAddressModel')->getById($id);
        $data['dataContact'] = $this->model('ContactModel')->getByClientId($id);
        $data['detail'] = $this->model('ClientModel')->getById($id);
        $data['dataAll'] = $this->model('ClientTypeModel')->getAll();
        $data['dataMarkup'] = $this->model('ClientMarkupModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/detailClient',$data);
        $this->view('templates/footer');
    }
}