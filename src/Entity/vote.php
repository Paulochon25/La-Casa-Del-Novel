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
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\novel", cascade={"persist"})
   */
    private $novel;
     /**
     * @var Date
     *
     * @ORM\Column(name="date_vote", type="date")
     */
    
    private $date_vote;
     /**
     * @var int
     *
     * @ORM\Column(name="note", type="int")
     */
    private $note;
    =
    
    

   
    public function setutilisateur(\Sdz\BlogBundle\Entity\utilisateur $utilisateur = null)
    {
      $this->image = $utilisateur;
    }
    /**
     * @return Sdz\BlogBundle\Entity\Image 
     */
    public function getutilisateur()
    {
      return $this->utilisateur;
    }
    public function setnovel(\Sdz\BlogBundle\Entity\novel $novel = null)
    {
      $this->image = $novel;
    }
    /**
     * @return Sdz\BlogBundle\Entity\novel
     */
    public function getnovel()
    {
      return $this->novel;
    }
    public function getdate_vote()
    {
        return $this->date_vote;
    }


    

    public function settdatevote($date_vote)
    {
        $this->nom = $date_vote;
    }

    public function getnote()
    {
        return $this->note;
    }

    public function setContenu($Contenu)
    {
        $this->Contenu = $Contenu;
    }
    public function getContenu()
    {
        return $this-> Contenu;;
    }

    
}
