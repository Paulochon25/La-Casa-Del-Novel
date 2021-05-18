<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class utilisateur 
{
  
   
    private $id;
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $nom;
    private $prenom;
    private $pseudo;
    private $email;
    
private $password;
    private $gender;
    private $role;
    private $categories;

    

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getNom()
    {
        return $this->$nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPseudo()
    {
        return $this-> pseudo;;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPassword()
    {
        return $this-> pseudo;;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSalt()
    {
        // The bcrypt and argon2i algorithms don't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    public function getRoles()
    {
        return $this->roles;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }



}


    
