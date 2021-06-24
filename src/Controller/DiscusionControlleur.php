use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Discusion;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function findAllsujetdiscusion(int $price): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM discusion 
            
            ';
        $discusiont = $conn->prepare($sql);
        $discusio ->execute(['price' => $price]);

        return $this->render('articles/index.html.twig', [
    'articles' => $discusion,
    }
    public function creationdiscusion(int $price): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $date= date(Y-m-d H:i:s);
        $discusion=new Discusion();
        $discusion.sujet=setsujet($sujet);

        $sql = '
        $sql = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail)
                        VALUES('Giraud','Pierre','Quai d\'Europe','Toulon',83000,'France','pierre.giraud@edhec.com')";
            
            ';
        $discusiont = $conn->prepare($sql);
        $discusio ->execute(['price' => $price]);

        return $this->render('articles/index.html.twig', [
    'articles' => $discusion,
    }
}