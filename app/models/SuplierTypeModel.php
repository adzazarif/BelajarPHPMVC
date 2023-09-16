<?php
class SuplierTypeModel{
    private $table = 'suplier_type';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table." JOIN suplier_markup ON suplier_type.suplierMarkupId = suplier_markup.suplierMarkupId");
        return $this->db->resultSet();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :statusName, :markupId)";
        $this->db->query($query);
        $this->db->bind('statusName', $data['name']);
        $this->db->bind('markupId', $data['markupId']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
