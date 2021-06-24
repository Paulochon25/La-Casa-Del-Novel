<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class discusion
{
   /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $sujet;
     /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    
    private $prenom;
     /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=50)
     */
    private $pseudo;
     /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;
     /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    
private $password;
 /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=50)
     */
    private $gender;
     /**
     * @var int
     *
     * @ORM\Column(name="role", type="int")
     */
    private $role;
    
    

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


    
