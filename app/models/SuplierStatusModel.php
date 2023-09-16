<?php
class SuplierStatusModel{
    private $table = 'suplier_status';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :statusName)";
        $this->db->query($query);
        $this->db->bind('statusName', $data['status']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
