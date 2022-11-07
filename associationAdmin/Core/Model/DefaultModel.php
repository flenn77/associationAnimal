<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database {

    protected string $table;

    /**
     * Retourne un tableau d'éléments
     *
     * @return array<object>
     */
    public function findAll(): array
    {
        $stmt = "SELECT * FROM ". $this->table; 
        return $this->getData($stmt);
    }

    /**
     * Retourne un objet en fonction de son id
     *
     * @param integer $id
     * @return object
     */
    public function find(int $id): object
    {
        $stmt = "SELECT * FROM " . $this->table . " WHERE id = $id"; 
        return $this->getData($stmt, true);
    }

    public function findBy(string $key, $value): object
    {
        $stmt = "SELECT * FROM " . $this->table . " WHERE $key = $value"; 
        return $this->getData($stmt, true);
    }

    public function Somme(): object
    {
        $stmt = "SELECT SUM(montant) FROM " . $this->table;
        return $this->getData($stmt, true);
    }


    /**

     * Retourne un objet en fonction de son id
     *
     * @param integer $id
     * @return void
     */

    public function delete(int $id): void

    {
        $stmt = "DELETE FROM " . $this->table . " WHERE id = $id";
        $prepare=$this->pdo->prepare($stmt);
        $prepare->execute();
    }
}