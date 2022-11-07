

        <h1 class="text-center">Produit Dans la Base de donnée</h1>
<table class="table table-striped table-hover">
    <thead><br>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user->getId() ?></td>
                <td><?= $user->getNom() ?></td>
                <td><?= $user->getPrenom() ?></td>
                <td><a href="?page=infouser&id=<?= $user->getId() ?>"><button class="btn btn-info">Voir plus</button></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</section>

