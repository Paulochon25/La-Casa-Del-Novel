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
    public function creationdiscusion()
    {
        $conn = $this->getEntityManager()->getConnection();
        $date23= date(Y-m-d H:i:s);
        $entityManager=$this->getDoctrine()->getManager();

        $discusion1=new Discusion();
        $discusion1->setsujet(sujet)->getdata();
        $discusion1->setdetail($data['detail'])->getdata();
        $discusion1->setdate_création(['date23']);
        $discusion->setactif(1);
        $entityManager->persist($discusion1);
        $entityManager->flush();

        $requete=$this->bdd->prepare("INSERT INTO discuson(sujet,date-création,detail,actif) VALUES (new_sujet,new_date,new_detail,new_acitf)");
        $requete->execute(array 'new_sujet'=>$this->$discusion.sujet,'new-date'=>$this->$date)
            
            ';
        $discusiont = $conn->prepare($sql);
        $discusio ->execute(['price' => $price]);

        return $this->render('articles/DIscusion.html.twig', [
    'articles' => $discusion,
    }
    
    public function Alliscusion(int $price): array
    
    {
 $entityManager = $this->getEntityManager();

 $discusion = $this->getDoctrine()->getRepository(Discusion::class);

return $this->render('Discusion/alldiscusion.html.twig', [
    'controller_name' => 'DiscusionController',
]);
}