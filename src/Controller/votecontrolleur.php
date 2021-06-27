use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Discusion;

class Vote extends AbstractController
{
    public function findAllsujetdiscusion(int $id): array
    {
        $vote=$this->getDoctrine()->getRepository(Vote::class)->find($id);
        return $vote;
    }
    public function showuser(int $id): Response
    {
        $discusion = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->find($id);

            return $discusion;
        }
        public function shownovel(int $id): Response
    {
        $discusion = $this->getDoctrine()
            ->getRepository(novel::class)
            ->find($id);

            return $discusion;
        }
   
    public function creationdiscusion(int $price): array
    {

        $conn = $this->getEntityManager()->getConnection();
        $entityManager=$this->getDoctrine()->getManager();
$novel=shownovel($novel);
$date23=date();
$user=showuser(1),
        $vote=vote();
        $vote->setutilisateur($user);
        $discusion1->setnovel($novel);
        $discusion1->settdatevote($vote)->getdata();
        $discusion->setDate_creation(date23);
        $discusion->setcontenu($contenu)->getdata();
        $entityManager->persist(reponse);
        $entityManager->flush();


        return $this->render('articles/reponse.html.twig', [
    'articles' => $discusion,
    }
    
    public function Allreponse(int $price): array
    
    {
 $entityManager = $this->getEntityManager();

 $discusion = $this->getDoctrine()->getRepository(vote::class);

return $this->render('Discusion/allvote.html.twig', [
    'controller_name' => 'voteController',
]);
}