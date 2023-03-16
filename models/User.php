<?php

class User {

    public function __construct(){}

    public function getAllUsers(){
        $db = new DBConnection();
        $conn = $db->connect();
        $query = "SELECT id, name, mail, adress FROM utilisateurs";
        $temp = $conn->prepare($query);
        $temp->execute();
        $users = $temp->fetchAll();
        if(!isset($users) || empty($users)) {
            return false;
        }
        else {
            return $users;
        }
    }

    public function getUserById($id){
        $db = new DBConnection();
        $conn = $db->connect();
        $query = "SELECT * FROM users";
        $temp = $conn->prepare($query);
        $temp->execute();
        $users = $temp->fetchAll();
        if(!isset($users) || empty($users)) {
            return false;
        }
        else {
            return $users;
        }
    }
}
?>