<?php

class EtudiantController{

     private $model;
     
     function __construct($model){
          $this->model = $model;
     }

    function listEtudiant(){
       $etudiants = $this->model->getAllEtudiant();//model
       require_once './src/view/etudiant/list.php'; // view
    }

    function addFormEtudiant(){
         require_once './src/view/etudiant/add.php'; // view
    }

    function saveFormEtudiant($nom,$prenom,$email,$filiere){
        $this->model->addEtudiant($nom, $prenom, $email,$filiere); // model
         header('location:index.php');
    }

    function deleteOneEtudiant($id){
        $this->model->deleteEtudiant($id); //model
        header('location:index.php');
    }

    function editEtudiant($id){
        $etudiant =   $this->model->getEtudiantById($id); //model
       require_once './src/view/etudiant/edit.php'; // view

    }

    function updateOneEtudiant($id,$nom,$prenom,$email,$filiere){
          $this->model->updateEtudiant($id,$nom, $prenom, $email,$filiere); //model
         header('location:index.php');
    }

}