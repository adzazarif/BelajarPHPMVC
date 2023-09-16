<?php
class SuplierModel{
    private $table = 'suplier';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table." JOIN suplier_type ON suplier.suplierTypeId = suplier_type.suplierTypeId JOIN suplier_status ON suplier.suplierStatusId = suplier_status.suplierStatusId");
        return $this->db->resultSet();
    }

    public function getByName($data){
        $key = $data['keywoard'];
        $this->db->query("SELECT * FROM ".$this->table." JOIN suplier_type ON suplier.suplierTypeId = suplier_type.suplierTypeId JOIN suplier_status ON suplier.suplierStatusId = suplier_status.suplierStatusId WHERE suplierName LIKE :name");
        $this->db->bind('name', "%$key%");
        return $this->db->resultSet();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM suplier JOIN suplier_type ON suplier.suplierTypeId = suplier_type.suplierTypeId JOIN suplier_status ON suplier.suplierStatusId = suplier_status.suplierStatusId JOIN suplier_markup ON suplier_type.suplierMarkupId = suplier_markup.suplierMarkupId WHERE suplierId=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :suplierName, :suplierTypeId, :suplierStatusId)";

        $this->db->query($query);
        $this->db->bind('suplierName', $data['name']);
        $this->db->bind('suplierTypeId', $data['typeId']);
        $this->db->bind('suplierStatusId', $data['statusId']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
