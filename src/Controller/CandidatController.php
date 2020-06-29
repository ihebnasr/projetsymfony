<?php

namespace App\Controller;
use App\Entity\Candidat;
use App\Entity\User;
use App\Form\CandidatType;
use App\Repository\CandidatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Repository\ExperienceProfissionnelleRepository;
use App\Form\Candidat1;


/**
 * @Route("/candidat")
 */
class CandidatController extends AbstractController
{
/* cette Methode permet de faire la redirection vers  la page qui permet de modifier les données 
du candidat connecté */

     /**
     * @Route("/edit/{id}", name="candidat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request,Candidat $candidat,$id,UserPasswordEncoderInterface $encoder): Response
    {
        //on recupere les donnes de candidat connecte qu'on'a passer son id dans l'url 
        $candidat = $this->getDoctrine()
        ->getRepository(Candidat::class)
        ->find($id);
//on prepare la form a envoyer qui correspond a l'entité candidat 
        $form = $this->createForm(Candidat1::class, $candidat);
        $form->handleRequest($request);
       
        /*Si le user clic sur la boutton sauvegarder de type submit 
        ses donnés seront sauvegardés dand la BD */

        if ($form->isSubmitted() && $form->isValid()) {
           
            $hash = $encoder->encodePassword($candidat,$candidat->getPassword());
            $candidat->setPassword($hash);
           
            $this->getDoctrine()->getManager()->flush();
            $form = $this->createForm(CandidatType::class, $candidat);
            $form->handleRequest($request);
          
/*Aprés la sauvegarde on le redirige vers la méme page de modification avec 
ses donnés mis a jour*/

            return $this->render('candidat/edit.html.twig', [
                'candidat' => $candidat,
                'form1' => $form->createView(),
                'id'=>$id
                ]);        
            }

        
        return $this->render('candidat/edit.html.twig',[
            'candidat' => $candidat,
            'form1' => $form->createView(),
            'id'=>$id
        ]);
    }




    
/* cette Methode permet de faire la redirection vers  la page qui affiche la liste
des candidats */    

    /**
     * @Route("/", name="candidat_index", methods={"GET"})
     */
    public function index(CandidatRepository $candidatRepository): Response
    {
        return $this->render('candidat/index.html.twig', [
            'candidats' => $candidatRepository->findAll(),
        ]);
    }



   

     

    /**
     * @Route("/entretien", name="candidat_entretien", methods={"GET"})
     */
    public function indexEntretien()
    {
        $user = $this->getUser();
        $id=$user->getId(); 
      

        $rawSql4 = "SELECT * FROM `entretien_candidat` as ec,
        `entretien` as e ,`recruteur` as r,
        `offre_emploi` as om WHERE 
         ec.entretien_id_id=e.id and 
         r.id=om.id_recruteur and 
         e.id=om.id_entretien_id and e.id=om.id_entretien_id and ec.candidat_id_id =$id;";

        $can4 = $this->getDoctrine()->getManager();
        $s4 = $can4->getConnection()->prepare($rawSql4);
        $s4->execute([]);
        $result4=$s4->fetchAll();
         
        $date=new \DateTime('now');

        return $this->render('candidat/entretiens.html.twig', ['id' =>$id,
        'entret'=>$result4,
        'date'=>$date,
      
     ]);
    }



    /* cette Methode permet de générer le cv du candidat en extrairant les donnes du 
    condidat conncté  */


     /**
     * @Route("/cv/{id}", name="cv_index", methods={"GET","POST"})
     */
    public function indexcv(Request $request,Candidat $candidat,ExperienceProfissionnelleRepository $experienceProfissionnelleRepository,$id): Response
    {

                //on recupere les donnes de candidat connecte qu'on'a passer son id dans l'url par find(id)


        $candidat = $this->getDoctrine()
        ->getRepository(Candidat::class)
        ->find($id);


        return $this->render('candidat/moncv.html.twig', [
            'experience_profissionnelles' => $experienceProfissionnelleRepository->findAllByCandidat($id),
            'id'=>$id,
            'candidat' => $candidat,

        ]);  }

 
   

}
