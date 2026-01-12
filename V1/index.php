<?php
      require_once './view/header.php';
      require_once './model/database.php';
      require_once './model/etudiantModel.php';
      require_once './controller/EtudiantController.php';

       if(isset($_GET['action']) && !empty($_GET['action'])){

        if($_GET['action']=="addEtudiant"){
             addFormEtudiant(); //controller
        }
        if($_GET['action']=="saveEtudiant"){ 
           $nom= $_POST['nom'];
           $prenom = $_POST['prenom'];
           $email = $_POST['email'];
           $filiere = $_POST['filiere'];
           saveFormEtudiant($nom,$prenom,$email,$filiere);
        }

       if($_GET['action']=="updateEtudiant"){ 
         extract($_POST);
         updateOneEtudiant($id,$nom,$prenom,$email,$filiere);
       }

         if(isset($_GET['id']) && !empty($_GET['id'])){
            if($_GET['action']=="deleteEtudiant"){
                $id= $_GET['id'];
                deleteOneEtudiant($id); // controller
            }

             if($_GET['action']=="editEtudiant"){
                $id= $_GET['id'];
                editEtudiant($id); //controller
             }
         }
        
      }else{
         listEtudiant(); //controller
      }

     
?>

