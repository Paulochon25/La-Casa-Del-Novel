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
     * @ORM\Column(name="sujet", type="string", length=50)
     */
    private $sujet;
     /**
     * @var Date
     *
     * @ORM\Column(name="date-création", type="date")
     */
    
    private $date_création;
     /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=50)
     */
    private $detail;
     /**
     * @var string
     *
     * @ORM\Column(name="actif", type="tinyint", length=1)
     */
    private $actif;
    
    public function getsujet()
    {
        return $this->sujet;
    }

    public function setsujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function getdate_création()
    {
        return $this->$date_création;
    }

    public function setdate_création($date_création)
    {
        $this->date_création = $date_création;
    }

    public function getactif()
    {
        return $this->actif;
    }

    public function setactif($actif)
    {
        $this->actif = $actif;
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


    
