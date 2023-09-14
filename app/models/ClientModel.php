<?php
class ClientModel{
    private $table = 'client';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table." JOIN client_type ON client.clientTypeId = client_type.clientTypeId JOIN client_status ON client.clientStatusId = client_status.clientStatusId");
        return $this->db->resultSet();
    }

    public function getByName($data){
        $key = $data['keywoard'];
        $this->db->query("SELECT * FROM ".$this->table." JOIN client_type ON client.clientTypeId = client_type.clientTypeId JOIN client_status ON client.clientStatusId = client_status.clientStatusId WHERE clientName LIKE :name");
        $this->db->bind('name', "%$key%");
        return $this->db->resultSet();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM client JOIN client_type ON client.clientTypeId = client_type.clientTypeId JOIN client_status ON client.clientStatusId = client_status.clientStatusId JOIN client_markup ON client_type.clientMarkupId = client_markup.clientMarkupId WHERE clientId=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :clientName, :clientTypeId, :clientStatusId)";

        $this->db->query($query);
        $this->db->bind('clientName', $data['name']);
        $this->db->bind('clientTypeId', $data['typeId']);
        $this->db->bind('clientStatusId', $data['statusId']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
