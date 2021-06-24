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
    private $utilisateur;
     /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    
    private $discusion;
     /**
     * @var /DATETIME
     *
     * @ORM\Column(name="pseudo", type="date")
     */
    private $Message;
     /**
     * @var boolean
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $date_message;
    

    public function getid()
    {
        return $this->email;
    }


    public function getdiscusion()
    {
        return $this->$nom;
    }

    public function settdiscusion($nom)
    {
        $this->nom = $nom;
    }

    public function getdetail()
    {
        return $this->prenom;
    }

    public function setdetail($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getdate_creation()
    {
        return $this-> pseudo;;
    }

    public function setdate_creation(($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getactif()
    {
        return $this-> pseudo;;
    }

    public function setactif($password)
    {
        $this->password = $password;
    }



}


    
