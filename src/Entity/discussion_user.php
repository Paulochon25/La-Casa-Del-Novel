<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class discusion
{
   /**
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Utilisateur", cascade={"persist"})
   */
   
    private $utilisateur;
     /**
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\discusion", cascade={"persist"})
   */
    private $discusion;
     /**
     * @var string
     *
     * @ORM\Column(name="date_post", type="date")
     */
    
    private $date_post;
     /**
     * @var /Text
     *
     * @ORM\Column(name="Contenu", type="text")
     */
    private $Contenu;
    
    

   
    public function setutilisateur(\Sdz\BlogBundle\Entity\utilisateur $utilisateur = null)
    {
      $this->image = $utilisateur;
    }
    
    public function getutilisateur()
    {
      return $this->discusion;
    }
    public function setdiscusion(\Sdz\BlogBundle\Entity\discusion $discusion = null)
    {
      $this->image = $discusion;
    }
    public function getdiscusion()
    {
      return $this->discusion;
    }
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

    public function getdate_post()
    {
        return $this->date_post;
    }

    public function setContenu($Contenu)
    {
        $this->prenom = $Contenu;
    }
    public function getContenu()
    {
        return $this-> Contenu;;
    }

    
}
