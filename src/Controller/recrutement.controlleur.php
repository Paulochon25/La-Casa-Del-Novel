use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Discusion;

class recrutement extends AbstractController
{
   
    public function showdiscusion(int $id): Response
    {
        $discusion = $this->getDoctrine()
            ->getRepository(Discusion::class)
            ->find($id);

            return $discusion;
        }
       
        public function showuser(int $id): Response
    {
        $discusion = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->find($id);

            return $discusion;
        }
    public function creationdiscusion(int $price): array
    {

$user=showuser(1);
        $conn = $this->getEntityManager()->getConnection();
        $entityManager=$this->getDoctrine()->getManager();
$user3=showuser(1);
$discusionuser=new recrutement();
        $discusionuser->setDiscusion($data[$discusion3]);
        $discusion1->setuser(user3);
        $discusion1->setAuthor($data['author']);
        $discusion->setDate_creation(date23);
        $entityManager->persist($discusion1);
        $entityManager->flush();


        return $this->render('articles/index.html.twig', [
    'articles' => $discusion,
    }
    
    public function AlldiscusionUSER(): array
    
    {
 $entityManager = $this->getEntityManager();

 $discusion = $this->getDoctrine()->getRepository(recrutement_user::class);

return $this->render('Discusion/discusionuser.html.twig', [
    'controller_name' => 'recrutementController',
]);
}