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

}
