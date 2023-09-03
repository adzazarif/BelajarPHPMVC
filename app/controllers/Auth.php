<?php

class Auth extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('login/index');
        $this->view('templates/footer');
    }
    
    public function login(){
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $cekUser = $this->model("UserModel")->getByUsername($username);
        if($cekUser){
            header("Location:".BASEURL);
        }else{
            
        }
    }
}