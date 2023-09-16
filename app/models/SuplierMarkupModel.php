<?php
class SUplierMarkupModel{
    private $table = 'suplier_markup';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }

    public function save($data){
        $query = "INSERT INTO $this->table VALUES('', :suplierMarkupName, :percentage, :amount, :value)";

        $this->db->query($query);
        $this->db->bind('suplierMarkupName', $data['name']);
        $this->db->bind('percentage', $data['percentage']);
        $this->db->bind('amount', $data['amount']);
        $this->db->bind('value', $data['value']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
