<?php

namespace App\Controller;


use App\Entity\ExperienceProfissionnelle;
use App\Entity\Candidat;
use App\Form\ExperienceProfissionnelle1Type;
use App\Repository\ExperienceProfissionnelleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/experience/profissionnelle")
 */
class ExperienceProfissionnelleController extends AbstractController
{


    /* cette Methode permet de faire la redirection vers  la page qui affiche la liste
des experiences profsionelles du user connecté  */    

    /**
     * @Route("/{id}", name="experience_profissionnelle_index", methods={"GET","POST"})
     */
    public function index(Request $request,Candidat $candidat,ExperienceProfissionnelleRepository $experienceProfissionnelleRepository,$id): Response
    {
        {  // obtenir le  candidat actuellement connecté a partir de l'id envoyé en url
        $candidat = $this->getDoctrine()
        ->getRepository(Candidat::class)
        ->find($id);
// une instance de la classe experience 
        $experienceProfissionnelle = new ExperienceProfissionnelle();
// on prepare la form qui correspond a l'entity experience
        $form = $this->createForm(ExperienceProfissionnelle1Type::class, $experienceProfissionnelle);
        $form->handleRequest($request);
// quand le candidat clique sur le bouton ajouter une experience 
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($experienceProfissionnelle);
            $entityManager->flush();

            return $this->render('experience_profissionnelle/Experience.html.twig', [
                'experience_profissionnelle' => $experienceProfissionnelle,
                'form' => $form->createView(),
                'experience_profissionnelles' => $experienceProfissionnelleRepository->findAllByCandidat($id),
                'id'=>$id,
                'candidat'=>$candidat,
                
            ]);
        }



        return $this->render('experience_profissionnelle/Experience.html.twig', [
            'experience_profissionnelle' => $experienceProfissionnelle,
            'form' => $form->createView(),
            'experience_profissionnelles' => $experienceProfissionnelleRepository->findAllByCandidat($id),
            'id'=>$id,
            'candidat'=>$candidat,
        ]);


    }}





    // cette methode est dédie a la suppression d'une experience 

    /**
     * @Route("/delete/{id}/{idc}", name="experience_profissionnelle_delete", methods={"GET","POST"})
     */
    public function delete(Request $request, ExperienceProfissionnelleRepository $experienceProfissionnelleRepository,
    ExperienceProfissionnelle $experienceProfissionnelle,$idc): Response
    {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($experienceProfissionnelle);
            $entityManager->flush();
        

        return $this->redirectToRoute('experience_profissionnelle_index', 
        ['experience_profissionnelles' => $experienceProfissionnelleRepository->findAllByCandidat($idc),
        'id'=>$idc]);
    }




   

}

 