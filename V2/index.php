<?php
require_once './view/header.php';
require_once './model/database.php';
require_once './model/etudiantModel.php';
require_once './controller/EtudiantController.php';

$database = new Database();
$model = new EtudiantModel($database->get_Connexion());
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
      $controller->saveFormEtudiant($nom, $prenom, $email, $filiere);
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
