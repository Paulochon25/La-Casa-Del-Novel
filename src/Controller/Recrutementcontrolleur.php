use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Entity\Discusion;

class RecrutementControlleur extends AbstractController
{
    public function showuser(int $id): Response
    {
        $discusion = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->find($id);

            return $discusion;
        }
    public function creationrecrutement()
    {
        $conn = $this->getEntityManager()->getConnection();
        $date23= date(Y-m-d H:i:s);
        $entityManager=$this->getDoctrine()->getManager();

        $user=showuser();
        $recrutement=new recrutement();
        $recrutement->setTitle($data['title']);
        $recrutement->getcontenu()($data[$contenu])->getdata();
        $recrutement->setUtilisateur($user);
        $recrutement>setdateenligne(date23);
        $entityManager->persist($recrutement);
        $entityManager->flush();

    
        $discusiont = $conn->prepare($sql);
        $discusio ->execute(['price' => $price]);

        return $this->render('articles/index.html.twig', [
    'articles' => $discusion,
    }
    
    public function Allrecrutelent(int $id): array
    
    {
 $entityManager = $this->getEntityManager();

 $discusion = $this->getDoctrine()->getRepository(recrutement::class);

return $this->render('Discusion/allrecrutement.html.twig', [
    'controller_name' => 'recrutementController',
]);
}