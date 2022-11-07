<?php
namespace App\Controller;

use App\Entity\Produit;
use App\Model\ProduitModel;
use Core\Controller\DefaultController;

class ProduitController extends DefaultController
{
    private ProduitModel $model;
    
    /**
     * Instancie les objets dont on a besoin dans toutes nos méthodes
     */
    public function __construct()
    {
        $this->model = new ProduitModel;
    }
/*
    /**
     * Page affichant toutes nos catégories
     *
     * @return void
     */
   /*public function find()
    {
        $this->render("produit/index", [
            'produits' => $this->model->findAll()
        ]);
    }
*/
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
        $produit = $this->model->find($id);

        $this->render("produit/detail", [
            'produits' => $produit
        ]);
    }




     /**
     * Page affichant une catégorie en fonction de son id
     *
     * @return void
     */
    public function delete()
    {
        if (isset($_GET['id']) && preg_match("(\d+)", $_GET['id'])) {
            $id = intval($_GET['id']);
        }
        $produit = $this->model->find($id);
        $produit = $this->model->delete($id);

        $this->render("produit/index", [
            'produits' => $produit
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
        $this->render("produit/index", [
            'produits' => $this->model->findAll()
        ]);
        if (!empty($_POST) && isset($_POST['libelleProduit']) && isset($_POST['marqueProduit']) && isset($_POST['quantiteProduit']) && isset($_POST['descriptionProduit']) && isset($_POST['prixProduit'])) {
            $produit= new Produit;
            $produit->setLibelleProduit(htmlspecialchars($_POST['libelleProduit']));
            $produit->setMarqueProduit(htmlspecialchars($_POST['marqueProduit']));
            $produit->setQuantiteProduit(htmlspecialchars($_POST['quantiteProduit']));
            $produit->setDescriptionProduit(htmlspecialchars($_POST['descriptionProduit']));
            $produit->setPrixProduit(htmlspecialchars($_POST['prixProduit']));

            var_dump($produit);
 
            $this->model->save($produit);
                
            header("Location: ?page=test");

         /*   $this->mail->sendMail($_POST['mail'], 
                'Merci pour le don',
                '<h1>Bonjour '.$_POST['prenom'].'</h1><br/> 
                Nous avons recu votre don de '.$_POST['montant'].' euro(s) <br/> 
                <h3>merci de votre contribution, votre geste nous aide ennormement ! *_*</h3>' 
            );
*/
            exit();
        } else {
            $this->render("produit/index", [
                'produit' => $this->model->findAll()
            ]);
        }

    }

    
    public function thxadd()
    {
        
        $this->render('produit/test');
    }



    public function deleteproduit()
    {
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
        }
        $this->model->delete($id);
        header("Location: ?page=produit");
        exit();
    }
}