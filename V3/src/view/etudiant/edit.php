<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Modifier l'étudiant</h4>
                </div>
                <div class="card-body">
                    <form action="?action=updateEtudiant" method="POST">
                        <input type="text" name="id" value="<?= $etudiant->getId() ?>" hidden>
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?= $etudiant->getNom() ?> ">
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" class="form-control" value="<?= $etudiant->getPrenom() ?> ">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $etudiant->getEmail() ?> ">
                        <label for="">Filiere</label>
                        <input type="text" name="filiere" class="form-control" value="<?= $etudiant->getFiliere() ?> ">
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>