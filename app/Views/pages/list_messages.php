<?= $this->extend('layout_hf') ?>

<?= $this->section('content') ?>


<div class="my-4 text-center">
    <h1>Liste des messages</h1>
</div>

<div class="container">
<div class="mb-4">
    <button type="submit" class="btn btn-primary">Supprimer des messages</button>
</div>
<table class=" table text-center">
    <thead>
        <tr>
            <th scope="col">Supprimer</th>
            <th scope="col">Titre</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
            <th scope="col">Statut</th>
            <th scope="col">Créateur</th>
            <th scope="col">Modifier</th>
            <th scope="col">Historique</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
            <td><a href="">Modifier</a></td>
            <td><a href="">Historique</a></td>
        </tr>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td>Test</td>
            <td>Message test</td>
            <td>13/12/1312</td>
            <td>En ligne</td>
            <td>Test</td>
            <td><a href="">Modifier</a></td>
            <td><a href="">Historique</a></td>
        </tr>
    </tbody>
</table>
</div>

 <?php var_dump($_SESSION['IDUTILISATEUR']);?> 

<?= $this->endSection() ?>