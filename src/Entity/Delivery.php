<?php

namespace ItargetTest\Entity;

use ItargetTest\Config\Connection;
use Exception;


class Delivery
{

    protected string $table = "entrega";

    public function createDelivery($title,  $description, $deadline)
    {
        $pdo = Connection::getConnection();
        $stmt = $pdo->prepare("INSERT INTO {$this->table}(titulo, descricao, prazo_entrega) 
                    VALUES(:title, :description, :deadline)");
        
        $stmt->execute([
            'title' => $title,
            'description' => $description,
            'deadline' => $deadline
        ]);
        
    }
    

    public function updateDelivery($title, $description, $deadline, $id)
    {
        $pdo = Connection::getConnection();
        $stmt = $pdo->prepare("UPDATE $this->table
                    SET 
                        titulo = :title,
                        descricao = :description,
                        prazo_entrega = :deadline 
                    WHERE id_entrega = :id");
        
        $stmt->execute([
            'title' => $title,
            'description' => $description,
            'deadline' => $deadline,
            'id' => $id
        ]);

    }

    public function indexDelivery()
    {
        $pdo = Connection::getConnection();
        $stmt = $pdo->query("SELECT * FROM {$this->table}");

        if ($stmt) {
            return $stmt->fetchAll();
        }

        throw new Exception('Não foi possível consultar as entregas');
    }

    public function indexOneDelivery($id)
    {
        $pdo = Connection::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM {$this->table} WHERE id_entrega = :id");

        $stmt->execute([
            'id' => $id
        ]);


        if ($stmt) {
            return $stmt->fetchAll();
        }

        throw new Exception('Não foi possível consultar a entrega');
    }


    public function deleteDelivery($id)
    {
       $pdo = Connection::getConnection();
       
       $stmt = $pdo->prepare("DELETE FROM $this->table WHERE id_entrega = :id");
       $stmt->execute([
        'id' => $id
       ]);
    }

    public function wasDelivered($id)
    {
        $pdo = Connection::getConnection();
        $stmt = $pdo->prepare("UPDATE $this->table
                    SET 
                        entrega_concluida = 1 
                    WHERE id_entrega = :id");
        
        $stmt->execute([
            'id' => $id
        ]);
    }

}
