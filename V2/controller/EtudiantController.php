<!-- CREATE TABLE public.etudiant (
    id integer NOT NULL,
    nom character varying(50),
    prenom character varying(50),
    email character varying(100),
    "filiere" character varying(100)
); -->
<?php

class EtudiantController
{
    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }


    function listEtudiant()
    {
        $etudiant = $this->model->getAllEtudiant(); 
        require_once './view/etudiant/list.php';
    }

    function addFormEtudiant()
    {
        require_once './view/etudiant/add.php';
    }

    function saveFormEtudiant($nom, $prenom, $email, $filiere)
    {
        $this->model->addEtudiant($nom, $prenom, $email, $filiere);
        header('location:index.php');
    }

    function deleteOneEtudiant($id)
    {
        $this->model->deleteEtudiant($id); 
        header('location:index.php');
    }

    function editEtudiant($id)
    {
        $etudiant =  $this->model->getEtudiantById($id); 
        require_once './view/etudiant/edit.php';
    }

    function updateOneEtudiant($id, $nom, $prenom, $email, $filiere)
    {
        $this->model->updateEtudiant($id, $nom, $prenom, $email, $filiere); 
        header('location:index.php');
    }
}

?>