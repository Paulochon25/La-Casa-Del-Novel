use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Discusion;

class DiscusionuserControlleur extends AbstractController
{
    public function findAllsujetdiscusion(int $id): array
    {
        $discusion=$this->getDoctrine()->getRepository(Discusion::class)->find($id);
        return $discusion;
    }
    public function creationdiscusion(int $price): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $date23= date(Y-m-d H:i:s);
        $entityManager=$this->getDoctrine()->getManager();

        $discusion1=new Discusion();
        $discusion1->setTitle($data['title']);
        $discusion1->setContent($data['content']);
        $discusion1->setAuthor($data['author']);
        $discusion->setDate_creation(date23);
        $entityManager->persist($discusion1);
        $entityManager->flush();

        $requete=$this->bdd->prepare("INSERT INTO discuson(sujet,date-création,detail,actif) VALUES (new_sujet,new_date,new_detail,new_acitf)");
        $requete->execute(array 'new_sujet'=>$this->$discusion.sujet,'new-date'=>$this->$date)
            
            ';
        $discusiont = $conn->prepare($sql);
        $discusio ->execute(['price' => $price]);

        return $this->render('articles/index.html.twig', [
    'articles' => $discusion,
    }
    
    public function Alliscusion(int $price): array
    
    {
 $entityManager = $this->getEntityManager();

 $discusion = $this->getDoctrine()->getRepository(Discusion::class);

return $this->render('Discusion/alldiscusion.html.twig', [
    'controller_name' => 'ArticlesController',
]);
}