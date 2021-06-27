use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Discusion;

class Discusion_user extends AbstractController
{
  
    public function showdRecrutement(int $id): Response
    {
        $discusion = $this->getDoctrine()
            ->getRepository(Recrutement::class)
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
    public function creationRecrutementcontrolleur(): array
    {

        $conn = $this->getEntityManager()->getConnection();
        $entityManager=$this->getDoctrine()->getManager();
$recrutement=showdRecrutement($recrutement.id);
$user3=showuser(1);
$reponse=new reponse_annonce();
        $reponse->setutilisateur(recrutement);
        $reponse->setrecrutement(user3);
        $reponse->setdetail($data[$detail]);
        $reponse->date_reponse(date23);
        $entityManager->persist($reponse);
        $entityManager->flush();


        return $this->render('reponse/reponseannonce.html.twig', [
    'articles' => $discusion,
    }
    
    public function Allreponse(): array
    
    {
 $entityManager = $this->getEntityManager();

 $discusionu = $this->getDoctrine()->getRepository(reponse_annonce::class);

return $this->render('Discusion/allreponse.html.twig', [
    'controller_name' => 'reponse_annonceController',
]);
}