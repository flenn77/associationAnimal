<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Model\AnimalModel;
use Core\Controller\DefaultController;

class AnimalController extends DefaultController
{

    private AnimalModel $model;

    /**
     * Instancie les objets dont on a besoin dans toutes nos méthodes
     */
    public function __construct()
    {
        $this->model = new AnimalModel;
    }

    /*  /**
     * Page affichant toutes nos catégories
     *
     * @return void
     */
    /* public function index()
    {
        $this->render("animal/index", [
            'animals' => $this->model->findAll()
        ]);
    }*/

    /**
     * Page affichant une catégorie en fonction de son id
     *
     * @return void
     */
    public function info()
    {
        if (isset($_GET['id']) && preg_match("(\d+)", $_GET['id'])) {
            $id = intval($_GET['id']);
        }
        $animal = $this->model->find($id);

        $this->render("animal/detail", [
            'animals' => $animal
        ]);
    }



    /**
     * Affiche la page pour réaliser une donnation.
     * 
     * L'utilisateur devra y rentrer ses informations personnelles, 
     * les informations de sa carte bancaire et pour finir le montant à verser.
     *
     * @return void
     */

    public function index()
    {


        $this->render("animal/index", [
            'animals' => $this->model->findAll()
        ]);
        if (!empty($_POST) && isset($_POST['surnomAnimal']) && isset($_POST['especeAnimal']) && isset($_POST['raceAnimal']) && isset($_POST['ageAnimal']) && isset($_POST['couleurAnimal']) && isset($_POST['descriptionAnimal'])) {
            $animal = new Animal;

            $animal->setSurnomAnimal(htmlspecialchars($_POST['surnomAnimal']));
            $animal->setEspeceAnimal(htmlspecialchars($_POST['especeAnimal']));
            $animal->setRaceAnimal(htmlspecialchars($_POST['raceAnimal']));
            $animal->setAgeAnimal(htmlspecialchars($_POST['ageAnimal']));
            $animal->setCouleurAnimal(htmlspecialchars($_POST['couleurAnimal']));
            $animal->setDescriptionAnimal(htmlspecialchars($_POST['descriptionAnimal']));
            // $animal->setImageAnimal(htmlspecialchars($_POST['imageAnimal']));

            $this->model->save($animal);

            header("Location: ?page=ajoutAnimal");

            exit();
        } else {
            $this->render("animal/index");
        }
    }




    /**

     * Page supprimer en fonction id

     

     * @return void

     */

    public function deleteanimal()
    {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
        }
        $this->model->delete($id);
        header("Location: ?page=animal");
        exit();
    }
}
