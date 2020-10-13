<?php

namespace App\Model;

use PDO;
use PDOException;
use Src\Classes\Model;

class CadastroModel extends Model
{
    private $db;

    public function cadastraCliente($nome, $sexo, $cidade)
    {
        $sql = "INSERT INTO teste (nome, sexo, cidade) VALUES (?,?,?)";
        $this->getConn()->beginTransaction();
        try {
            $this->db = $this->getConn()->prepare($sql);
            $this->db->bindValue(1, $nome);
            $this->db->bindValue(2, $sexo);
            $this->db->bindValue(3, $cidade);
            $this->db->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $this->getConn()->commit();
    }

    public function selectCliente($nome, $sexo, $cidade)
    {
        $nome = '%' . $nome . '%';
        $sexo = '%' . $sexo . '%';
        $cidade = '%' . $cidade . '%';

        $sql = "SELECT * FROM teste  WHERE nome Like ? and sexo like ? and cidade like ? ";
        $this->db = $this->getConn()->prepare($sql);
        $this->db->bindValue(1, $nome);
        $this->db->bindValue(2, $sexo);
        $this->db->bindValue(3, $cidade);
        $this->db->execute();

        $i = 0;
        $aReturn = [];
        while ($data = $this->db->fetch(PDO::FETCH_ASSOC)) {
            $aReturn[$i] = ['id' => $data['id'], 'nome' => $data['nome'], 'sexo' => $data['sexo'], 'cidade' => $data['cidade']];
            $i++;
        }
        return $aReturn;
    }

    public function deletarCliente($id)
    {
        $this->getConn()->beginTransaction();
        try {
            $sql = "DELETE FROM teste  WHERE id = ? ";
            $this->db = $this->getConn()->prepare($sql);
            $this->db->bindValue(1, $id);
            $this->db->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $this->getConn()->commit();
    }
}
