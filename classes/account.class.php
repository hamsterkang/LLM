<?php

require_once 'connection.php';

class Account {
    public $creation_id;
    public $email;
    public $password;

    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function sign_in_customer() {
        $sql = "SELECT * FROM academai WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);

            if ($accountData && password_verify($this->password, $accountData['password'])) {
                $this->creation_id = $accountData['creation_id']; // Ensure correct field
                return true;
            }
        }

        return false;
    }

    public function getUserDetails() {
        if (empty($this->creation_id)) {
            error_log("Creation ID is not set.");
            return false;
        }

        $sql = "SELECT first_name, middle_name, last_name FROM academai WHERE creation_id = :creation_id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':creation_id', $this->creation_id, PDO::PARAM_INT);

        try {
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

            // Log query result
            error_log("Query result: " . print_r($result, true));

            if ($result === false) {
                error_log("No user found with Creation ID: " . $this->creation_id);
            } else {
                error_log("User details fetched: " . print_r($result, true));
            }
            return $result;
        } catch (PDOException $e) {
            error_log("Database query error: " . $e->getMessage());
            return false;
        }
    }

    // Method to get creation_id
    public function getUserCreationId() {
        return $this->creation_id;
    }
}
?>
