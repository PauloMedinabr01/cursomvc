<?php

namespace app\models;

class Crud extends Connection
{
    public function create()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        $conn = $this->connect();
        $sql = "INSERT INTO tb_person VALUES(DEFAULT, :nome, :email)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt;
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person ORDER BY nome";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }


    public function update()
    {
    }


    public function delete()
    {
    }

    public function editForm()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}
