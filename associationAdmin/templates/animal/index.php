<section class="jumbotron text-center">
  <div class="container">

    <p class="lead text-muted">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">AJOUTER UN ANIMAL :</h1>
      <label for="inputSurnomAnimal" class="visually-hidden">surnom animal</label>
      <input type="text" id="inputSurnomAnimal" name="surnomAnimal" class="form-control" placeholder="surnom Animal" required />
      <bR>
      <label for="inputEspeceAnimal" class="visually-hidden">espece animal</label>
      <input type="text" id="inputEspeceAnimal" name="especeAnimal" class="form-control" placeholder="Espece Animal" required />
      <bR>
      <label for="inputRaceAnimal" class="visually-hidden">Race animal</label>
      <input type="text" id="inputRaceAnimal" name="raceAnimal" class="form-control" placeholder="Race Animal" required />
      <bR>
      <label for="inputCouleurAnimal" class="visually-hidden">Couleur Animal</label>
      <input type="text" id="inputCouleurAnimal" name="couleurAnimal" class="form-control" placeholder="Couleur Animal" required />
      <bR>
      <label for="inputAgeAnimal" class="visually-hidden">Age Animal</label>
      <input type="text" id="inputAGEAnimal" name="ageAnimal" class="form-control" placeholder="Age Animal" required />
      <bR>
      <label for="inputDescriptionAnimal" class="visually-hidden">Description Animal</label>
      <input type="text" id="inputDescriptionAnimal" name="descriptionAnimal" class="form-control" placeholder="Description Animal" required autofocus />
      <bR>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter un animal</button>
    </form>

    <bR> <bR>
    --------------------------------------------------------------------------
  </div>

  <br>
  <h1 class="text-center">Animal </h1>
  <table class="table table-striped table-hover">
    <thead><br>
      <tr>
        <th>Surnom </th>
        <th>Espece</th>
        <th>Race</th>
        <th>Age</th>
        <th>Couleur </th>
        <th>Description </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($animals as $animal) : ?>
        <tr>
          <td><?= $animal->getSurnomAnimal() ?></td>
          <td><?= $animal->getEspeceAnimal() ?></td>
          <td><?= $animal->getRaceAnimal() ?></td>
          <td><?= $animal->getAgeAnimal() ?></td>
          <td><?= $animal->getCouleurAnimal() ?></td>
          <td><?= $animal->getDescriptionAnimal() ?></td>
          <td><a href="?page=infoanimal&id=<?= $animal->getId() ?>"><button class="btn btn-info">Voir plus</button></a></td>
          <td><a href="?page=supprimerAnimal&id=<?= $animal->getId()?>"><button class="btn btn-warning">Supprimer</button></a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>
<br><br> <br><br> <br><br>