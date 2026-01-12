<!-- CREATE TABLE public.etudiant (
    id integer NOT NULL,
    nom character varying(50),
    prenom character varying(50),
    email character varying(100),
    "filiere " character varying(100)
); -->
<?php

function addEtudiant($nom, $prenom, $email, $filiere)
{
    global $connexion;
    $sql = "INSERT INTO etudiant (nom, prenom, email, filiere)
        VALUES ('$nom','$prenom','$email','$filiere')";
    pg_query($connexion, $sql);
}

function deleteEtudiant($id)
{
    global $connexion;
    $sql = "DELETE FROM etudiant WHERE id = $id";
    pg_query($connexion, $sql);
}

function updateEtudiant($id, $nom, $prenom, $email, $filiere)
{
    global $connexion;
    $sql = "UPDATE etudiant SET nom='$nom', prenom='$prenom', email='$email', filiere='$filiere' WHERE id=$id";
    pg_query($connexion, $sql);
}
function getAllEtudiant()
{
    global $connexion;
    $sql = "SELECT * FROM etudiant";
    $result = pg_query($connexion, $sql);
    return pg_fetch_all($result);
}
function getEtudiantById($id)
{
    global $connexion;
    $sql = "SELECT * FROM etudiant WHERE id=$id";
    $result = pg_query($connexion, $sql);
    return pg_fetch_all($result)[0];
}


?>