<?php
namespace App\Model;

use App\Entity\Animal;
use Core\Model\DefaultModel;

/**
 * Model permettant de récupérer les catégories
 * 
 * @method array<object> findAll()
 * @method object find(int $id)
 */
class AnimalModel extends DefaultModel{
    
    protected string $table = 'animal';
    protected string $entity = 'Animal';




    
    public function save(Animal $animal)
    {
      //  var_dump($animal());
        $stmt = "INSERT INTO animal (surnomAnimal, especeAnimal, raceAnimal, ageAnimal, couleurAnimal, descriptionAnimal/*, imageAnimal*/) 
                 VALUES (:surnomanimal, :especeanimal, :raceanimal, :ageanimal, :couleuranimal, :descriptionanimal/*, :imageanimal*/)";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->execute($animal());
    }


   
}