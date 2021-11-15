<?php

class User {

    public $mysqli;

    public function __construct($connect)
    {
        $this->mysqli = $connect;
    }

    public function view($id = null)
    {
        $sql = "SELECT * FROM users";
        if ($id !== null) $sql = "SELECT * FROM users WHERE id = $id";
        $query = mysqli_query($this->mysqli, $sql);
        return $query;
    }

    public function create($name, $email, $phone)
    {
        $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', $phone)";
        $query = mysqli_query($this->mysqli, $sql);
        return $query;
    }

    public function update($id, $name, $email, $phone)
    {
        $sql = "UPDATE users SET name='$name', email='$email', phone=$phone WHERE id = $id";
        $query = mysqli_query($this->mysqli, $sql);
        return $query;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = $id";
        $query = mysqli_query($this->mysqli, $sql);
        return $query;
    }
}