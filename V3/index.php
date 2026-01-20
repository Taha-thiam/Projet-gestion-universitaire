<?php

require_once './src/view/header.php';
require_once './src/model/etudiantModel.php';
require_once './src/model/Etudiant.php';
require_once './src/controller/etudiantController.php';
require_once 'bootstrap.php';

$model = new EtudiantModel($entityManager);
$controller = new EtudiantController($model);

if (isset($_GET['action']) && !empty($_GET['action'])) {

   if ($_GET['action'] == "addEtudiant") {
      $controller->addFormEtudiant(); //controller
   }
   if ($_GET['action'] == "saveEtudiant") {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $filiere = $_POST['filiere'];
      $controller->saveFormEtudiant($nom, $prenom, $email, $filiere); //controller
   }

   if ($_GET['action'] == "updateEtudiant") {
      extract($_POST);
      $controller->updateOneEtudiant($id, $nom, $prenom, $email, $filiere);
   }

   if (isset($_GET['id']) && !empty($_GET['id'])) {
      if ($_GET['action'] == "deleteEtudiant") {
         $id = $_GET['id'];
         $controller->deleteOneEtudiant($id); // controller
      }

      if ($_GET['action'] == "editEtudiant") {
         $id = $_GET['id'];
         $controller->editEtudiant($id); //controller
      }
   }
} else {
   $controller->listEtudiant(); //controller
}

?>