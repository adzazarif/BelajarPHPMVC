<?php
class ClientAddressModel{
    private $table = 'address';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM client JOIN address ON client.clientId = address.clientId WHERE client.clientId=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :addressType, :addressName, :city, :phone, :clientId, :suplierId, :contactId)";

        $this->db->query($query);
        $this->db->bind('addressType', $data['name']);
        $this->db->bind('addressName', $data['percentage']);
        $this->db->bind('city', $data['amount']);
        $this->db->bind('phone', $data['value']);
        $this->db->bind('clientId', $data['value']);
        $this->db->bind('contactId', $data['value']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
