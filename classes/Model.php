<?php

class Model {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=mvc_example', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Database connection successful! <br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "<br>";
        }
    }

    public function getUsers() {
        $query = $this->db->query('SELECT * FROM users;');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($username , $password , $role) {  
        $stmt = $this->db->prepare('INSERT INTO users (username , password , role) VALUES (:username , :password , :role);');
        $stmt->bindParam(':username', $username);
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $passwordhash);
        $stmt->bindParam(':role', $role);
        $stmt->execute();
    }

    public function deleteUser($id) { 
        $stmt = $this->db->prepare('DELETE FROM users WHERE id = :id;');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getUserById($id) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getRoleById($roleid) {
        $stmt = $this->db->prepare('SELECT * FROM role WHERE roleid = :id');
        $stmt->bindParam(':id', $roleid);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser( $id ,$username , $password , $role) {
        $stmt = $this->db->prepare('UPDATE users SET username = :username , password = :password , role = :role WHERE id = :id;');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $passwordhash);
        $stmt->bindParam(':role', $role);   
        $stmt->execute();
    }

    public function searchUsers($query) {
    $stmt = $this->db->prepare('SELECT * FROM users WHERE username LIKE :query');
    $searchQuery = '%' . $query . '%';
    $stmt->bindParam(':query', $searchQuery);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

error_reporting(E_ALL);
ini_set('display_errors', 1);