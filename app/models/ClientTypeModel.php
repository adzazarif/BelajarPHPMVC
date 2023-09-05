<?php
class ClientTypeModel{
    private $table = 'client_type';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table." JOIN client_markup ON client_type.clientMarkupId = client_markup.clientMarkupId");
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
