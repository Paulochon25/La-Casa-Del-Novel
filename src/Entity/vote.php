<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class Vote
{
   /**
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Utilisateur", cascade={"persist"})
   */
   
    private $utilisateur;
     /**
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\discusion", cascade={"persist"})
   */
    private $novel;
     /**
     * @var string
     *
     * @ORM\Column(name="date_post", type="date")
     */
    
    private $date_vote;
     /**
     * @var /Text
     *
     * @ORM\Column(name="Contenu", type="text")
     */
    private $note;
    /**
     * @var /Text
     *
     * @ORM\Column(name="Contenu", type="text")
     */
    
    

   
    public function setutilisateur(\Sdz\BlogBundle\Entity\utilisateur $utilisateur = null)
    {
      $this->image = $utilisateur;
    }
    /**
     * @return Sdz\BlogBundle\Entity\Image 
     */
    public function getutilisateur()
    {
      return $this->discusion;
    }
    public function setdiscusion(\Sdz\BlogBundle\Entity\discusion $discusion = null)
    {
      $this->image = $discusion;
    }
    /**
     * @return Sdz\BlogBundle\Entity\discusion
     */
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


id_user Index	int(11)			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
Plus Plus
	2	id_novel Index	int(11)			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
Plus Plus
	3	commentaire	int(11)			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
Plus Plus
	4	date_vote	int(11)			Non	Aucun(e)			Modifier Modifier	Supprimer Supprimer	
Plus Plus
	5	note
