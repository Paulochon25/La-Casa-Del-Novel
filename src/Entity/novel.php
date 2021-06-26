<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class novel
{
    `id` int NOT NULL AUTO_INCREMENT,
    `nom` varchar(20) NOT NULL,
    `auteur` varchar(50) NOT NULL,
    `nbChapitres` int NOT NULL,
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
    private $nom;
     /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    
    private $contenu;
     /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=50)
     */
    private $auteeur;
     /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $nbchapitre;
     
    
    public function getid()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->$nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setauteur($auteeur)
    {
        $this->auteur = $auteeur;
    }
    public function getnbchapitre()
    {
        return $this-> nbchapitre;;
    }

    public function stNbchapitre($nbchapitre)
    {
        $this->nbchapitre = $nbchapitre;
    }


}


    
