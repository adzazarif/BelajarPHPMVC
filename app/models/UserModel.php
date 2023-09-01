<?php
class UserModel{
    private $table = 'user';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    private $data = [
        [
            "name" => "Adza zarif nur iskandar",
            "age" => "20",
            "addres" => "Blitar"
        ],
         [
            "name" => "Wahyu atmara",
            "age" => "22",
            "addres" => "Blitar"
        ]
         ];

    public function getName(){
        return $this->name;
    }

    public function getAll(){
        $this->db->query("SELECT * FROM ".$this->table);
        return $this->db->resultSet();
    }
}
