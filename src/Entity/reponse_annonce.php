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
   * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\recrutement", cascade={"persist"})
   */
    private $recrutement;
     /**
     * @var string
     *
     * @ORM\Column(name="date_post", type="date")
     */
    
    private $date_reponse;
     /**
     * @var /Text
     *
     * @ORM\Column(name="detail", type="text")
     */
    private $detail;
    
    

   
    public function setutilisateur(\Sdz\BlogBundle\Entity\utilisateur $utilisateur = null)
    {
      $this->image = $utilisateur;
    }
    
    public function getutilisateur()
    {
      return $this->discusion;
    }
    public function setrecrutement(\Sdz\BlogBundle\Entity\recrutement $recrutement = null)
    {
      $this->image = $recrutement;
    }
    public function getrecrutement()
    {
      return $this->recrutement;
    }

    public function getdate_reponse()
    {
        return $this->date_reponse;
    }

    public function setdate_reponse($date_reponse)
    {
        $this->date_reponse = $date_reponse;
    }
    public function getDetail()
    {
        return $this-> Details;
    }
    public function setdetail($detail)
    {
        $this->detail = $detail;
    }

    
}
