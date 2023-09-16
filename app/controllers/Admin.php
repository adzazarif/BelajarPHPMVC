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
        $this->view('templates/header2', $data);
        $this->view('admin/detailClient',$data);
        $this->view('templates/footer2');
    }

    //controler untuk mengatur client
    public function suplier(){
        $data['dataAll'] = $this->model('SuplierModel')->getAll();
        $data['dataType'] = $this->model('SuplierTypeModel')->getAll();
        $data['dataStatus'] = $this->model('SuplierStatusModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/suplier',$data);
        $this->view('templates/footer');
    }

    public function searchSuplier()
    {
        $data['dataAll'] = $this->model('SuplierModel')->getByName($_POST);
        $data['dataType'] = $this->model('SuplierTypeModel')->getAll();
        $data['dataStatus'] = $this->model('SuplierStatusModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/suplier',$data);
        $this->view('templates/footer');
    }

    public function addSuplier(){
        if($this->model('SuplierModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/suplier");
        }else{
            echo "gagal";
        }
    }


    public function suplierMarkup(){
        $data['dataAll'] = $this->model('SuplierMarkupModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/suplierMarkup',$data);
        $this->view('templates/footer');
    }

    public function addSuplierMarkup(){
        if($this->model('SuplierMarkupModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/suplierMarkup");
        }else{
            echo "gagal";
        }
    }

    public function suplierType()
    {
        $data['dataAll'] = $this->model('SuplierTypeModel')->getAll();
        $data['dataMarkup'] = $this->model('SuplierMarkupModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/suplierType',$data);
        $this->view('templates/footer');
    }

    public function addSuplierType(){
        if($this->model('SuplierTypeModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/suplierType");
        }else{
            echo "gagal";
        }
    }

    public function suplierStatus()
    {
        $data['dataAll'] = $this->model('SuplierStatusModel')->getAll();
        $this->view('templates/header', $data);
        $this->view('admin/suplierStatus',$data);
        $this->view('templates/footer');
    }

    public function addSuplierStatus(){
        if($this->model('SuplierStatusModel')->save($_POST) > 0){
            header("Location:".BASEURL."/admin/suplierStatus");
        }else{
            echo "gagal";
        }
    }
}