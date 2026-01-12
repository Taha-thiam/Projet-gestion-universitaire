<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Modifier l'étudiant</h4>
                </div>
                <div class="card-body">
                    <form action="?action=updateEtudiant" method="POST">
                        <input type="text" name="id" value="<?= $etudiant['id'] ?>" hidden>
                        
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="<?= $etudiant['nom'] ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" value="<?= $etudiant['prenom'] ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?= $etudiant['email'] ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="filiere" class="form-label">Filière</label>
                            <input type="text" name="filiere" id="filiere" class="form-control" value="<?= $etudiant['filiere'] ?>" required>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="?action=listEtudiant" class="btn btn-secondary">Annuler</a>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>