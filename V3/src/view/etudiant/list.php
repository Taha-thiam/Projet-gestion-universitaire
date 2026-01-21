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
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Filière</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($etudiants as $key => $a) { ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?php echo $a->getNom() ?></td>
                                <td><?php echo $a->getPrenom() ?></td>
                                <td><?php echo $a->getEmail() ?></td>
                                <td><?php echo $a->getFiliere() ?></td>
                                <td>
                                    <a href="?action=deleteEtudiant&id=<?= $a->getId() ?>" class="btn btn-danger">Supprimer</a>
                                    <a href="?action=editEtudiant&id=<?= $a->getId() ?>" class="btn btn-primary">Modifier</a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>