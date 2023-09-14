<?php
class contactModel{
    private $table = 'address';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function getByClientId($id){
        $this->db->query("SELECT * FROM contact JOIN address ON address.contactId = contact.contactId WHERE address.clientId=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :clientMarkupName, :percentage, :amount, :value)";

        $this->db->query($query);
        $this->db->bind('clientMarkupName', $data['name']);
        $this->db->bind('percentage', $data['percentage']);
        $this->db->bind('amount', $data['amount']);
        $this->db->bind('value', $data['value']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
