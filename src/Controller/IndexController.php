<?php
namespace App\Controller;
use App\Entity\User;
use App\Entity\Recruteur;
use App\Entity\OffreCandidat;
use App\Form\RecruteurType;
use  App\Entity\OffreEmploi ;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Candidat;
use App\Form\CandidatType;
use App\Repository\CandidatRepository;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends AbstractController
{


/**
 * @Route("/deconnexion",name="app_logout")
 */
public function logout()
{

}

/*c'est la page d(acceuil de notre site web ) */

    /**
     * @Route("/", name="app_home")
     */
    public function homee(AuthenticationUtils  $authenticationUtils)
    {

        // get the login error if there is one
$error = $authenticationUtils->getLastAuthenticationError();

// last username entered by the user
$lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('home.html.twig',
        ['lastUsername'=>$lastUsername,
        'error' => $error]);
    }
    
   
      /* cette Methode permet de faire l'inscription d'un nouveau recruteur  */
    /**
     * @Route("/registerRecruteur", name="app_registerRec")
     */
    public function registerRec(Request $request,
    EntityManagerInterface $em, UserPasswordEncoderInterface $encoder)
     
    {
        //on definit qu'il porte le role candidat dans le champ roles qui de type json
        $roles[] = 'ROLE_REC'; 

        $rec = new Recruteur();
       $rec->setRoles($roles);
       $form = $this->createForm(RecruteurType::class, $rec);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // en fait le cryptage de password pour des raison de security et c'est configuré dans le fichier security.yml
            $hash = $encoder->encodePassword($rec,$rec->getPassword());
            $rec->setPassword($hash);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rec);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

      
        return $this->render('registerRec.html.twig', [
            'recruteur' => $rec,
            'form' => $form->createView(),
        ]);
    }

     /* cette Methode permet de faire l'inscription d'un nouveau candidat  */
    /**
     * @Route("/register", name="app_register")
     */
    public function registration(Request $request,
    EntityManagerInterface $em, UserPasswordEncoderInterface $encoder)
     
    {
        //on definit qu'il porte le role candidat dans le champ roles qui de type json
        $roles[] = 'ROLE_CAN'; 

        $candidat = new Candidat();
       $candidat->setRoles($roles);
        $form = $this->createForm(CandidatType::class, $candidat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // en fait le cryptage de password pour des raison de security et c'est configuré dans le fichier security.yml
            $hash = $encoder->encodePassword($candidat,$candidat->getPassword());
            $candidat->setPassword($hash);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidat);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

      
        return $this->render('register.html.twig', [
            'candidat' => $candidat,
            'form' => $form->createView(),
        ]);
    }

/* cette Methode permet de generer la page d'acceuil du candidat connecté
en affichant la liste des offres d'emploi en acceuil   */


    /**
     * @Route("/app", name="acceuil", methods={"GET"})
     */
    public function index22()
    {

        $user = $this->getUser();
        $id=$user->getId();

        $em = $this->getDoctrine()->getManager();
//on recupere la liste des offres d'emploi de la bd 
        $rawSql2 = "SELECT * FROM `offre_emploi` ;";

        $can = $this->getDoctrine()->getManager();
        $s2 = $can->getConnection()->prepare($rawSql2);
        $s2->execute([]);
        $result2=$s2->fetchAll();
    
        
        return $this->render('acceuil.html.twig',
         ['id' =>$id,
        'offres'=>$result2,
      
     ]);
    
    }


     /**
     * @Route("/postuler/{ido}", name="entretiencan", methods={"GET"})
     */
    public function entretiencan($ido)
    {


        $user = $this->getUser();
        $id=$user->getId();
        $Offre = new OffreCandidat();
        //grâce à l'objet Request ,on peut récupérer les données du formulaire
        $ent = $this->getDoctrine()->getRepository(OffreEmploi::class)->find($ido);
        $can = $this->getDoctrine()->getRepository(Candidat::class)->find($id);
             $Offre->setIdOffre($ent); 
             $Offre->setIdCandidat($can); 
             $Offre->setEtat('0'); 
             $Offre->setDate(new \DateTime('now')); 
             $entityManager = $this->getDoctrine()->getManager();
             // la fonction $entityManager->persist() signale au manager de préparer
              //une requête pour insérer l'objet $Offre dans la table OffreEmploi
             $entityManager->persist($Offre);
             //exécute la requête
              $entityManager->flush();
        $em = $this->getDoctrine()->getManager();
//on recupere la liste des offres d'emploi de la bd 
$rawSql2 = "SELECT * FROM `offre_emploi` as o where o.id not in (select oc.id_offre_id from `offre_candidat` as oc where oc.id_candidat_id=$id);";

$can = $this->getDoctrine()->getManager();
$s2 = $can->getConnection()->prepare($rawSql2);
$s2->execute([]);
$result2=$s2->fetchAll();

      
       
         
        return $this->RedirectToRoute('acceuil',
         ['id' => $id,
         'offres'=>$result2,
     ]);
    }



     /**
     * @Route("/doffre/{ido}", name="doffre", methods={"GET"})
     */
    public function detail_offre($ido)
    {
        $user = $this->getUser();
        $id=$user->getId();
        
        $em = $this->getDoctrine()->getManager();
        //on recupere la liste des offres d'emploi de la bd 
                $rawSql2 = "SELECT * FROM `offre_emploi` as o ,`recruteur` as r WHERE  o.id=$ido and o.id_recruteur= r.id  ;";

                $can = $this->getDoctrine()->getManager();
                $s2 = $can->getConnection()->prepare($rawSql2);
                $s2->execute([]);
                $result2=$s2->fetch();

        
        return $this->render('candidat/offredetail.html.twig', [
        'offre'=>$result2,
        'id' =>$id
      
     ]);
    }













     /**
     * @Route("/entretien/{ide}", name="interview", methods={"GET"})
     */
    public function interview($ide)
    {

        $user = $this->getUser();
        $id=$user->getId();
        
$rawSql2 = "SELECT * FROM `entretien` as e ,`question` as q where e.id=$ide and q.id_entretien=e.id and 
q.type='QCM';";



$can = $this->getDoctrine()->getManager();
$s2 = $can->getConnection()->prepare($rawSql2);
$s2->execute([]);
$result2=$s2->fetchAll();

$rawSql4 = "SELECT * FROM `entretien` as e ,`question` as q where e.id=$ide and q.id_entretien=e.id and 
q.type='autre';";



$can4 = $this->getDoctrine()->getManager();
$s4 = $can4->getConnection()->prepare($rawSql4);
$s4->execute([]);
$result4=$s4->fetchAll();
$rawSql3 = "SELECT * FROM `proposition`";
$can1 = $this->getDoctrine()->getManager();
$s3 = $can1->getConnection()->prepare($rawSql3);
$s3->execute([]);
$result3=$s3->fetchAll();


        return $this->render('candidat/interview.html.twig',
         ['id' => $id,
         'questions'=>$result2,
         'propos'=>$result3,
         'autrequestion'=>$result4,
     ]);
    }






}