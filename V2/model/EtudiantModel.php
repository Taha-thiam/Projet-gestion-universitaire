<!-- CREATE TABLE public.etudiant (
    id integer NOT NULL,
    nom character varying(50),
    prenom character varying(50),
    email character varying(100),
    "filiere " character varying(100)
); -->
<?php

class EtudiantModel
{
    private $database;

    function  __construct($database)
    {
        $this->database = $database;
    }

    function addEtudiant($nom, $prenom, $email, $filiere)
    {
        global $connexion;
        $sql = "INSERT INTO etudiant (nom, prenom, email, filiere)
        VALUES (?,?,?,?)";
        $result = $this->database->prepare($sql);
        $result->execute([$nom, $prenom, $email, $filiere]);
    }

    function deleteEtudiant($id)
    {
        global $connexion;
        $sql = "DELETE FROM etudiant where id = :id";
        $result = $this->database->prepare($sql);
        $result->execute(['id' => $id]);
    }

    function updateEtudiant($id, $nom, $prenom, $email, $filiere)
    {
        global $connexion;
        $sql = "UPDATE etudiant SET nom = ?, prenom = ?, email = ?, filiere = ? WHERE id = ?";
        $result = $this->database->prepare($sql);
        $result->execute([$nom, $prenom, $email, $filiere, $id]);
    }
    
    function getAllEtudiant()
    {
        global $connexion;
        $sql = "SELECT * FROM etudiant";
        $result = $this->database->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    function getEtudiantById($id)
    {
        global $connexion;
        $sql = "SELECT * FROM etudiant where id = ?";
        $result = $this->database->prepare($sql);
        $result->execute([$id]);
        return $result->fetch();
    }
}

?>