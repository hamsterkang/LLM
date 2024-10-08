<?php

require_once 'connection.php';

Class Academai{
    //attributes

    public $creation_id;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $password;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO academai (first_name,middle_name,last_name, email, password) VALUES 
        (:first_name,:middle_name, :last_name, :email, :password);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':first_name', $this->first_name);
        $query->bindParam(':middle_name', $this->middle_name);
        $query->bindParam(':last_name', $this->last_name);
        $query->bindParam(':email', $this->email);
        // Hash the password securely using password_hash
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query->bindParam(':password', $hashedPassword);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    // function edit(){
    //     $sql = "UPDATE staff SET firstname=:firstname, lastname=:lastname, role=:role, email=:email, password=:password, status=:status WHERE id = :id;";

    //     $query=$this->db->connect()->prepare($sql);
    //     $query->bindParam(':firstname', $this->firstname);
    //     $query->bindParam(':lastname', $this->lastname);
    //     $query->bindParam(':role', $this->role);
    //     $query->bindParam(':email', $this->email);
    //     // Hash the password securely using password_hash
    //     $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    //     $query->bindParam(':password', $hashedPassword);
    //     $query->bindParam(':status', $this->status);
    //     $query->bindParam(':id', $this->id);
        
    //     if($query->execute()){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }	
    // }

    function fetch($creation_id){
        $sql = "SELECT * FROM academai WHERE id = :creation_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $creation_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    // function show(){
    //     $sql = "SELECT * FROM staff ORDER BY firstname ASC, lastname ASC;";
    //     $query=$this->db->connect()->prepare($sql);
    //     $data = null;
    //     if($query->execute()){
    //         $data = $query->fetchAll();
    //     }
    //     return $data;
    // }
}

?>