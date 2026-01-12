<!-- 


<div class="container">


    <a href="?action=addEtudiant" class="mt-5 btn btn-success">Add</a>
    <br>
    <table class="table table-striped mt-5">
        <tr>
            <td>Id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>email</td>
            <td>filiere</td>
            <td>Action(s)</td>
        </tr>

        <?php foreach( $etudiant  as $e) { ?>
            <tr>
                <td><?= $e['id'] ?></td>
                <td><?php echo $e['nom'] ?></td>
                <td><?php echo $e['prenom'] ?></td>
                <td><?php echo $e['email'] ?></td>
                <td><?php echo $e['filiere'] ?></td>
                <td>
                    <a href="?action=deleteEtudiant&id=<?= $e['id'] ?>" class="btn btn-danger">Supprimer</a>
                    <a href="?action=editEtudiant&id=<?= $e['id'] ?>" class="btn btn-primary">Modifier</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</div> -->
<style>
    .table thead {
        background-color: #343a40;
        color: white;
    }
    .table tbody tr:hover {
        background-color: #f5f5f5;
    }
    .btn-group-sm {
        gap: 5px;
    }
</style>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Liste des Étudiants</h5>
        </div>
        <div class="card-body">
            <a href="?action=addEtudiant" class="btn btn-success mb-3">
                <i class="bi bi-plus-circle"></i> Ajouter un Étudiant
            </a>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Filière</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($etudiant as $e) { ?>
                            <tr>
                                <td><?= $e['id'] ?></td>
                                <td><?= $e['nom'] ?></td>
                                <td><?= $e['prenom'] ?></td>
                                <td><?= $e['email'] ?></td>
                                <td><?= $e['filiere'] ?></td>
                                <td class="text-center">
                                    <a href="?action=editEtudiant&id=<?= $e['id'] ?>" class="btn btn-sm btn-primary">Modifier</a>
                                    <a href="?action=deleteEtudiant&id=<?= $e['id'] ?>" class="btn btn-sm btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>