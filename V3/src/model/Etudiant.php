<?php
// src/Product.php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'etudiant')]
class Etudiant
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 50)]
    private string $nom;

    #[ORM\Column(type: 'string', length: 50)]
    private string $prenom;

    #[ORM\Column(type: 'string', length: 50)]
    private string $email;

    #[ORM\Column(type: 'string', length: 50)]
    private string $filiere;



    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function setFiliere($filiere)
    {
        $this->filiere = $filiere;
    }

    function getId()
    {
        return $this->id;
    }
    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getFiliere()
    {
        return $this->filiere;
    }
}
