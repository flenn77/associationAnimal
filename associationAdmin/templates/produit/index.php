<section class="jumbotron text-center">
  <div class="container">

    <p class="lead text-muted">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Produit</h1>

      <label for="inputLibelleProduit" class="visually-hidden">libelle Produit</label>
      <input type="text" id="inputLibelleProduit" name="libelleProduit" class="form-control" placeholder="libelle Produit" required />
      <bR>
      <label for="inputMarqueProduit" class="visually-hidden">marque Produit</label>
      <input type="text" id="inputMarqueProduit" name="marqueProduit" class="form-control" placeholder="Marque Produit" required />
      <bR>
      <label for="inputQuantiteProduit" class="visually-hidden">quantite Produit</label>
      <input type="number" id="inputQuantiteProduit" name="quantiteProduit" class="form-control" placeholder="Quantite Produit" min="0" required />
      <bR>
      <label for="inputDescriptionProduit" class="visually-hidden">descriptionProduit</label>
      <input type="text" id="inputDescriptionProduit" name="descriptionProduit" class="form-control" placeholder="Description Produit" required />
      <bR>
      <label for="inputPrixProduit" class="visually-hidden">Prix Produit</label>
      <input type="number" id="inputPrixProduit" name="prixProduit" class="form-control" placeholder="Prix Produit" min="0" required />
      <bR>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter un Produit</button>

    </form>
    <br><br>
--------------------------------------------------------------------------
  </div>

<br>

<h1 class="text-center">Produit Dans la Base de donnée</h1>
<table class="table table-striped table-hover">
    <thead><br>
        <tr>
            <th>Nom du produit </th>
            <th>Marque</th>
            <th>Description</th>
            <th>Quantité</th>
            <th>Prix (en €) </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produits as $produit) : ?>
            <tr>
                <td><?= $produit->getLibelleProduit() ?></td>
                <td><?= $produit->getMarqueProduit() ?></td>
                <td><?= $produit->getQuantiteProduit() ?></td>
                <td><?= $produit->getQuantiteProduit() ?></td>
                <td><?= $produit->getPrixProduit() ?> €</td>
                <td><a href="?page=infoproduit&id=<?= $produit->getId() ?>"><button class="btn btn-info">Voir plus</button></a></td>
                <td><a href="?page=supprimerProduit&id=<?= $produit->getId() ?>"><button class="btn btn-warning">Supprimer</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</section>




<br><br>    <br><br>    <br><br>


