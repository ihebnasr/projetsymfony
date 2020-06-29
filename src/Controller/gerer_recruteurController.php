<?php
namespace App\Controller;
use App\Entity\Recruteur;
use App\Form\RecruteurType;
use App\Repository\RecruteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;



/**
 * @Route("/recruteur")
 */

class gerer_recruteurController extends AbstractController
{
    /**
     * @Route("/gererrecruteur", name="app_gr")
     */
    public function affiche(RecruteurRepository $RecruteurRepository): Response
    {
        $Recruteur = new Recruteur();
        $form = $this->createForm(RecruteurType::class, $Recruteur);

        return $this->render('gerer_recruteur/liste_recruteur.html.twig', [
            'recruteurs' => $RecruteurRepository->findAll(),
            'form' => $form->createView()
        ]
        );
    }
     /**
     * @Route("/", name="recruteur_new", methods={"GET","POST"})
     */
    public function new(Request $request)
    {
        $Recruteur = new Recruteur();
        $form = $this->createForm(RecruteurType::class, $Recruteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Recruteur);
            $entityManager->flush();

            return $this->redirectToRoute('app_gr'
            );
        }
       
    }
    /**
     * @Route("/edit/{id}", name="recruteur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Recruteur $recruteur)
    {
        $em = $this->getDoctrine()->getManager();

        $employee = $em->getRepository('App:Recruteur')->find($recruteur); 
    
       
        $employee->setCinRecruteur($_POST['cin']); 
        $employee->setNomRecruteur($_POST['nom']); 
        $employee->setPrenomRecruteur($_POST['prenom']); 
        $employee->setEmailRecruteur($_POST['email']); 
        $em->persist($employee);
        $em->flush();
        return $this->redirectToRoute('app_gr');
        
    }
  /**
     * @Route("/delete/{id}", name="recruteur_delete", methods={"GET","POST"})
     */
    
    public function delete(Request $request, Recruteur $recruteur): Response
    {
       
        $em = $this->getDoctrine()->getManager();
$tim = $em->getRepository('App:Recruteur')->find($recruteur); 
$em->remove($tim);

// we still need to flush this change to the database
$em->flush();

        return $this->redirectToRoute('app_gr');
    }
}
