<?php
namespace App\Model;

use App\Entity\Produit;
use Core\Model\DefaultModel;

class ProduitModel extends DefaultModel
{
    protected string $table = 'produit';
    protected string $entity = 'Produit';

    public function save(Produit $produit)
    {
        $stmt = "INSERT INTO produit (libelleProduit, marqueProduit, quantiteProduit, descriptionProduit, prixProduit) 
                 VALUES (:libelleproduit, :marqueproduit, :quantiteproduit, :descriptionproduit, :prixproduit) ";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->execute($produit());
    }

}