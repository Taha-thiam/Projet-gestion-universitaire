
<!-- CREATE TABLE public.etudiant (
    id integer NOT NULL,
    nom character varying(50),
    prenom character varying(50),
    email character varying(100),
    "filiere" character varying(100)
); -->
<?php


function listEtudiant()
{
    $etudiant = getAllEtudiant(); //model
    require_once './view/etudiant/list.php'; // view
}

function addFormEtudiant()
{
    require_once './view/etudiant/add.php'; // view
}

function saveFormEtudiant($nom, $prenom, $email, $filiere)
{
    addEtudiant($nom, $prenom, $email, $filiere); // model
    header('location:index.php');
}

function deleteOneEtudiant($id)
{
    deleteEtudiant($id); //model
    header('location:index.php');
}

function editEtudiant($id)
{
    $etudiant =  getEtudiantById($id); //model
    require_once './view/etudiant/edit.php'; // view
}

function updateOneEtudiant($id, $nom, $prenom, $email, $filiere)
{
    updateEtudiant($id, $nom, $prenom, $email, $filiere); //model
    header('location:index.php');
}

?>