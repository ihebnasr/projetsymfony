<?php
namespace App\Controller;

use App\Entity\Recruteur;
use App\Entity\Entretien;
use App\Entity\Question;
use App\Entity\OffreEmploi;
use App\Entity\ReponseCandidat;
use App\Entity\EntretienCandidat;
use App\Entity\Candidat;
use App\Entity\Proposition;
use App\Controller\ExperienceProfissionnelleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EntretienController extends AbstractController
{
/**
     * @Route("/entretien", name="entretien", methods={"GET","POST"})
     */
     public function Entretiennew(Request $request): Response
     {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
         // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
        $Recruteur = new Entretien();
        $Recruteur->setNomEntretien( $_POST['poste']); 
        $Recruteur->setDescription($request->request->get('descc')); 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Recruteur);
            $entityManager->flush();
            $questionQCM = $_POST['questionQCM'];
            $description = $_POST['description'];
            $x=count($questionQCM);
            for($i=0; $i < $x; $i++)  { 
                $QE = new Question();
                $QE->setContenu($questionQCM[$i]); 
                $QE->setType('QCM');
                $QE->setDescription($description[$i]);
                $QE->setReponse('autre');
  
                $QE->setIdEntretien($Recruteur->getId()); 
                
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($QE);
                 $entityManager->flush();
                 $Prop1 = $_POST['customCheck'];
                 $Prop2 = $_POST['customCheck1'];
                 $Prop3 = $_POST['customCheck2'];
                 $Prop4 = $_POST['customCheck3'];
                 $data = $request->request->get('check');
                 $data1 = $request->request->get('check1');
                 $data2 = $request->request->get('check2');
                 $data3 = $request->request->get('check3');
                 $ajoutprop1 = new Proposition();
                 $ajoutprop1->setNomProp($Prop1[$i]); 

                 $ent = $this->getDoctrine()->getRepository(Question::class)->find($QE->getId());
                 $ajoutprop1->setIdQuestion($ent); 
                 
                if($data === NULL) {
                  $ajoutprop1->setEtatProp('0');
                  } else {
                     $ajoutprop1->setEtatProp('1');
                      }
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($ajoutprop1);
                  $entityManager->flush();
                 $ajoutprop2 = new Proposition();
                 $ajoutprop2->setNomProp($Prop2[$i]);
                    if($data1 === NULL) {
                     $ajoutprop2->setEtatProp('0');
                     } else {
                        $ajoutprop2->setEtatProp('1');
                         }
                    $ajoutprop2->setIdQuestion($ent); 
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($ajoutprop2);
                  $entityManager->flush();
                 $ajoutprop3 = new Proposition();
                 $ajoutprop3->setNomProp($Prop3[$i]); 
                    if($data2 === NULL) {
                     $ajoutprop3->setEtatProp('0');
                     } else {
                        $ajoutprop3->setEtatProp('1');
                         }
                
                    $ajoutprop3->setIdQuestion($ent); 
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($ajoutprop3);
                  $entityManager->flush();
                 $ajoutprop4 = new Proposition();
                 $ajoutprop4->setNomProp($Prop4[$i]);
                 if($data3 === NULL) {
                  $ajoutprop4->setEtatProp('0');
                  } else {
                     $ajoutprop4->setEtatProp('1');
                      }
                  
                    $ajoutprop4->setIdQuestion($ent); 
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($ajoutprop4);
                  $entityManager->flush();
             }
              
         
            $question = $_POST['questionAutre'];
         $n = count($question);
         
        
         for($i=0; $i < $n; $i++)  { 
            $QE = new Question();
            $QE->setContenu($question[$i]); 
            $QE->setType('autre');
            $QE->setDescription('autre');
            $QE->setReponse('autre');
            $QE->setIdEntretien($Recruteur->getId()); 
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($QE);
             $entityManager->flush();
         }
          
         $em = $this->getDoctrine()->getManager();

         $employee = $em->getRepository('App:Recruteur')->find($user->getId()); 
         return $this->render('recruteur/creerEntretien.html.twig', [
             'recruteur' =>   $employee ,
         ]
         );
     }
     /**
     * @Route("/reponseCandidat/{idee}", name="reponseCandidat", methods={"GET","POST"})
     */
    public function reponse(Request $request,$idee)
    {
     
      $rawSql5 = "SELECT q.id FROM `entretien` as e ,`question` as q where e.id=$idee and q.id_entretien=e.id and 
      q.type='QCM';";
      
      
      
      $can5 = $this->getDoctrine()->getManager();
      $s5 = $can5->getConnection()->prepare($rawSql5);
      $s5->execute([]);
      $questionQCM1=$s5->fetchAll();

       // obtenir le  recruteur actuellement connecté
       $user = $this->getUser();
        // obtenir l'id de  recruteur  connecté
       $id=$user->getId();
       $x=count($questionQCM1);
           for($i=0; $i < $x; $i++)  { 
              
                $data1 = $request->request->get('check0');
                $data2 = $request->request->get('check1');
                $data3 = $request->request->get('check2');
                $data4 = $request->request->get('check3');
                $ajoutprop1 = new ReponseCandidat();

                $ent = $this->getDoctrine()->getRepository(Question::class)->find($questionQCM1[$i]);
                $ajoutprop1->setIdQuestion($ent);
                $idcan = $this->getDoctrine()->getRepository(Candidat::class)->find($id); 
                $ajoutprop1->setIdCandidat($idcan); 
                $ajoutprop1->setDuree('2S');
                $ajoutprop1->setDate(new \DateTime('now'));
               if($data1 === NULL) {
                  $ajoutprop1->setReponse('0');
                 } else {
                  $ajoutprop1->setReponse('1');
                     }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($ajoutprop1);
                 $entityManager->flush();
                
                 //prop2 
                 $ajoutprop2 = new ReponseCandidat();

                $ent = $this->getDoctrine()->getRepository(Question::class)->find($questionQCM1[$i]);
                $ajoutprop2->setIdQuestion($ent); 
                $idcan = $this->getDoctrine()->getRepository(Candidat::class)->find($id); 
                $ajoutprop2->setIdCandidat($idcan); 
                $ajoutprop2->setDuree('2S');
                $ajoutprop2->setDate(new \DateTime('now'));
               if($data2 === NULL) {
                  $ajoutprop2->setReponse('0');
                 } else {
                  $ajoutprop2->setReponse('1');
                     }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($ajoutprop2);
                 $entityManager->flush();

                 //prop 3
                 $ajoutprop3 = new ReponseCandidat();

                 $ent = $this->getDoctrine()->getRepository(Question::class)->find($questionQCM1[$i]);
                 $ajoutprop3->setIdQuestion($ent); 
                 $idcan = $this->getDoctrine()->getRepository(Candidat::class)->find($id); 
                $ajoutprop3->setIdCandidat($idcan); 
                 $ajoutprop3->setDuree('2S');
                 $ajoutprop3->setDate(new \DateTime('now'));
                if($data3 === NULL) {
                   $ajoutprop3->setReponse('0');
                  } else {
                   $ajoutprop3->setReponse('1');
                      }
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($ajoutprop3);
                  $entityManager->flush();

                  //prop 4
                  $ajoutprop4 = new ReponseCandidat();

                  $ent = $this->getDoctrine()->getRepository(Question::class)->find($questionQCM1[$i]);
                  $ajoutprop4->setIdQuestion($ent); 
                  $idcan = $this->getDoctrine()->getRepository(Candidat::class)->find($id); 
                $ajoutprop4->setIdCandidat($idcan);  
                  $ajoutprop4->setDuree('2S');
                  $ajoutprop4->setDate(new \DateTime('now'));
                 if($data4 === NULL) {
                    $ajoutprop4->setReponse('0');
                   } else {
                    $ajoutprop4->setReponse('1');
                       }
                  $entityManager = $this->getDoctrine()->getManager();
                  $entityManager->persist($ajoutprop4);
                   $entityManager->flush();
            }
             
            $rawSql2 = "SELECT * FROM `entretien` as e ,`question` as q where e.id=$idee and q.id_entretien=e.id and 
            q.type='QCM';";
            
            
            
            $can = $this->getDoctrine()->getManager();
            $s2 = $can->getConnection()->prepare($rawSql2);
            $s2->execute([]);
            $result2=$s2->fetchAll();
            $rawSql3 = "SELECT * FROM `proposition`";
$can1 = $this->getDoctrine()->getManager();
$s3 = $can1->getConnection()->prepare($rawSql3);
$s3->execute([]);
$result3=$s3->fetchAll();
$rawSql4 = "SELECT q.id FROM `entretien` as e ,`question` as q where e.id=$idee and q.id_entretien=e.id and 
q.type='autre';";

$can4 = $this->getDoctrine()->getManager();
$s4 = $can4->getConnection()->prepare($rawSql4);
$s4->execute([]);
$result4=$s4->fetchAll();

$x=count($result4);
$rep = $request->request->get('reponse');
           for($i=0; $i < $x; $i++)  { 
              
                
                $ajoutautre = new ReponseCandidat();

                $ent = $this->getDoctrine()->getRepository(Question::class)->find($result4[$i]);
                $ajoutautre->setIdQuestion($ent);
                $idcan = $this->getDoctrine()->getRepository(Candidat::class)->find($id); 
                $ajoutautre->setIdCandidat($idcan); 
                $ajoutautre->setDuree('2S');
                $ajoutautre->setDate(new \DateTime('now'));
               
                  $ajoutautre->setReponse($rep[$i]);
                
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($ajoutautre);
                 $entityManager->flush();
                  }
                  $rawSql11 = "SELECT * FROM `entretien` as e ,`question` as q where e.id=$idee and q.id_entretien=e.id and 
                  q.type='autre';";
                  
                  $can11 = $this->getDoctrine()->getManager();
                  $s11 = $can11->getConnection()->prepare($rawSql11);
                  $s11->execute([]);
                  $result11=$s11->fetchAll();
        return $this->render('candidat/entretienpasser.html.twig',
        ['id' => $idee,
        'questions'=>$result2,
         'propos'=>$result3,
         'autrequestion'=>$result11,
        ]
        );
    }
   /**
     * @Route("/entretiencandidat/{id}/{idd}", name="ajouter_candidatEntretien", methods={"GET","POST"})
     */
    public function entretiencandidat(Request $request, Candidat $id, Entretien $idd)
    {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
         // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
      $employee = new EntretienCandidat();
      
      $em = $this->getDoctrine()->getManager();

        $employee->setCandidatId($id); 
        $employee->setDateEntretien($request->request->get('date')); 
        $employee->setEntretienId($idd); 
        $em->persist($employee);
        $em->flush();
        //candidats
        $rawSql2 = "SELECT * FROM `offre_emploi` as o , offre_candidat as c , candidat as can  WHERE o.`id`=c.id_offre_id and c.id_candidat_id=can.id and o.`id_recruteur`= $id and o.`date_expiration`>=now() ;";
        $can = $this->getDoctrine()->getManager();
        $s2 = $can->getConnection()->prepare($rawSql2);
        $s2->execute([]);
        $result2=$s2->fetchAll();
        $emple = $em->getRepository('App:Recruteur')->find($id); 
        return $this->redirectToRoute('candidatsPostule');
        return $this->render('recruteur/candidats_postule.html.twig', [
         'recruteur' =>   $emple ,
            'candidats'=> $result2
   
        ]);
        
    }
     /**
     * @Route("/candidatsDetail/{id}", name="candidatsDetail", methods={"GET","POST"})
     */
    public function candidatsDetail($id){
         // obtenir le  recruteur actuellement connecté
         $user = $this->getUser();
         //pour obtenir l'id de  recruteur  connecté
         $id=$user->getId(); 
      //requete sql pour recuperer le candidat qui le recruteur souhaite voir sont ptofil
     $rawSql = "SELECT * FROM `candidat` where id=$id  ;";
     //cree l'instruction prepare, pour obtenir la connexion doctrine
     $can1 = $this->getDoctrine()->getManager();
     $s = $can1->getConnection()->prepare($rawSql);
     $s->execute([]);
     //Récupèrer une seule ligne de l'instruction
     $result=$s->fetch(); 
     //requete sql pour recuperer les experiences profissionnelles d'un candidat 
     $rawSql2 = "SELECT * FROM `experience_profissionnelle` as o where o.candidat_id= $id ;";
     //cree l'instruction prepare, pour obtenir la connexion doctrine
     $can = $this->getDoctrine()->getManager();
     $s2 = $can->getConnection()->prepare($rawSql2);
     $s2->execute([]);
     //Récupèrer toutes les lignes de l'instruction
     $result2=$s2->fetchAll();
     $em = $this->getDoctrine()->getManager();

     $employee = $em->getRepository('App:Recruteur')->find($id); 
     // Ici, on récupérera les information d'un candidat  et ses experience profissionnelles, 
      //puis on la passera au template recruteur/candidatProfile.html.twig
     return $this->render('recruteur/candidat_detail.html.twig', [
      'recruteur' =>   $employee ,
         'experience_profissionnelles' => $result2,
       'candidat'=>$result

     ]);


 }
}