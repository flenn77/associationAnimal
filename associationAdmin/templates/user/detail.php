<br><br><br><br>




<div class="card text-center">
    <div class="card-header">
        <h3>Detail d'un user</h3>
    </div>
    <div class="card-body">
        <h5>
            <div class="card-title"><label>ID -----> </label><?= $users->getId() ?></div>
        </h5>
        <h5>
            <div class="card-title"><label>Nom -----> </label><?= $users->getNom() ?></div>
        </h5>
        <h5>
            <div class="card-title"><label>Prenom -----> </label><?= $users->getPrenom() ?></div>
        </h5>
        <h5>
            <div class="card-text"><label>sexe -----> </label><?= $users->getSexe() ?></div>
        </h5>
        <h5>
            <div class="card-text"><label>adresse -----> </label><?= $users->getAdresse() ?></div>
        </h5>
        <h5>
            <div class="card-text"><label>code Postal -----> </label><?= $users->getCodePostal() ?></div>
        </h5>
        <h5>
            <div class="card-text"><label>mail -----> </label><?= $users->getMail() ?></div>
        </h5>

    </div>

</div>