<?php

class EtudiantModel
{

    private $database;

    function __construct($database)
    {
        $this->database = $database;
    }

    function addEtudiant($nom, $prenom, $email,$filiere)
    {
        global $entityManager;
        $etudiant = new Etudiant;
        $etudiant->setNom($nom);
        $etudiant->setPrenom($prenom);
        $etudiant->setEmail($email);
        $etudiant->setFiliere($filiere);

        $entityManager->persist($etudiant);
        $entityManager->flush();
    }


    function deleteEtudiant($id)
    {
        global $entityManager;
        $etudiant = $this->getEtudiantById($id);
        $entityManager->remove($etudiant);
        $entityManager->flush();
    }

    function updateEtudiant($id, $nom, $prenom, $email,$filiere)
    {
        global $entityManager;
        $etudiant = $this->getEtudiantById($id);
        $etudiant->setNom($nom);
        $etudiant->setPrenom($prenom);
        $etudiant->setEmail($email);
        $etudiant->setFiliere($filiere);
        $entityManager->flush();
    }

    function getAllEtudiant()
    {
        global $entityManager;
        return $entityManager->getRepository(Etudiant::class)->findAll();
    }

    function getEtudiantById($id)
    {
        global $entityManager;
        return $entityManager->find("Etudiant", $id);
    }
}
