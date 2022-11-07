<?php

namespace App\Entity;

use Core\Entity\DefaultEntity;

class Animal extends DefaultEntity
{
    /**
     * Id de la catégory
     * Il doit être PRIMARY KEY NOT NULL
     *
     * @var integer
     */
    private int $id;

    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     */
    private string $surnomAnimal;

    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     */
    private string $especeAnimal;

    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     */
    private string $raceAnimal;

    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var integer
     */
    private string $ageAnimal;


    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     */
    private string $couleurAnimal;
    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     */

    private string $descriptionAnimal;

/*
    /**
     * Nom de la catégorie
     * UNIQUE string 65
     *
     * @var string
     *//*
    private string $imageAnimal;
    

*/

    public function getId(): int
    {
        return $this->id;
    }

    public function getSurnomAnimal(): string
    {
        return $this->surnomAnimal;
    }

    public function getEspeceAnimal(): string
    {
        return $this->especeAnimal;
    }

    public function getRaceAnimal(): string
    {
        return $this->raceAnimal;
    }

    public function getAgeAnimal(): int
    {
        return $this->ageAnimal;
    }

    public function getCouleurAnimal(): string
    {
        return $this->couleurAnimal;
    }

    public function getDescriptionAnimal(): string
    {
        return $this->descriptionAnimal;
    }



    /**
     * Set uNIQUE string 65
     *
     * @param  string  $surnomAnimal  UNIQUE string 65
     *
     * @return  self
     */
    public function setSurnomAnimal(string $surnomAnimal)
    {
        $this->surnomAnimal = $surnomAnimal;

        return $this;
    }

    /**
     * Set uNIQUE string 65
     *
     * @param  string  $raceAnimal  UNIQUE string 65
     *
     * @return  self
     */ 
    public function setRaceAnimal(string $raceAnimal)
    {
        $this->raceAnimal = $raceAnimal;

        return $this;
    }

    /**
     * Set uNIQUE string 65
     *
     * @param  string  $especeAnimal  UNIQUE string 65
     *
     * @return  self
     */ 
    public function setEspeceAnimal(string $especeAnimal)
    {
        $this->especeAnimal = $especeAnimal;

        return $this;
    }

    /**
     * Set uNIQUE string 65
     *
     * @param  integer  $ageAnimal  UNIQUE string 65
     *
     * @return  self
     */ 
    public function setAgeAnimal($ageAnimal)
    {
        $this->ageAnimal = $ageAnimal;

        return $this;
    }

    /**
     * Set uNIQUE string 65
     *
     * @param  string  $couleurAnimal  UNIQUE string 65
     *
     * @return  self
     */ 
    public function setCouleurAnimal(string $couleurAnimal)
    {
        $this->couleurAnimal = $couleurAnimal;

        return $this;
    }

    /**
     * Set the value of descriptionAnimal
     *
     * @return  self
     */ 
    public function setDescriptionAnimal($descriptionAnimal)
    {
        $this->descriptionAnimal = $descriptionAnimal;

        return $this;
    }
/*
    /**
     * Get uNIQUE string 65
     *
     * @return  string
     */ /*
    public function getImageAnimal()
    {
        return $this->imageAnimal;
    }

    /**
     * Set uNIQUE string 65
     *
     * @param  string  $imageAnimal  UNIQUE string 65
     *
     * @return  self
     */ /*
    public function setImageAnimal(string $imageAnimal)
    {
        $this->imageAnimal = $imageAnimal;

        return $this;
    }*/
}
