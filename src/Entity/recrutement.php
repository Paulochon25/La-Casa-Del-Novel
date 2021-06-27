
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class recrutement
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
     * @ORM\Column(name="titre_annonce", type="string", length=50)
     */
    private $titre_annonce;
     /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=50)
     */
    
    private $contenu;
     /**
     * @var Date
     *
     * @ORM\Column(name="date_en_ligne", type="date")
     */
    private $date_en_ligne;
     /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $Utilisateur;
     
    


    public function gettitre_annonce()
    {
        return $this->titre_annonce;
    }

    public function settitre_annonce($titre_annonce)
    {
        $this->titre_annonce= $titre_annonce;
    }

    public function getcontenu()
    {
        return $this->$contenu;
    }

    public function setcontenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function getdate_en_ligne()
    {
        return $this->date_en_ligne;
    }

    public function setdateenligne($date_en_ligne)
    {
        $this->prenom = $date_en_ligne;
    }
    public function getUtilisateur()
    {
        return $this->Utilisateur;
    }

    public function setUtilisateur($Utilisateur)
    {
        $this->Utilisateur = $Utilisateur;
    }

   

}


    
