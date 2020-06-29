<?php
namespace App\Controller;

use App\Entity\Recruteur;
use App\Entity\OffreEmploi;
use App\Entity\Candidat;
use App\Entity\Entretien;
use App\Repository\ExperienceProfissionnelleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecruteurController extends AbstractController
{
//route de "tableau de bord" de recruteur 
/**
     * @Route("/dashboardRecruteur", name="dashboard_recruteur", methods={"GET"})
     */
    public function recruteurDashboard()
    {    // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
        //pour obtenir l'id de  recruteur  connecté
        $id=$user->getId(); 
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager(); 
        // On récupère les données de recruteur a travers la méthode find()
        $rec = $em->getRepository('App:Recruteur')->find($id);  
        //requete sql pour recuperer les candidats 
        $rawSql2 = "SELECT * FROM `candidat`   ;";
        $can = $this->getDoctrine()->getManager();
        //cree l'instruction prepare, pour obtenir la connexion doctrine
        $s2 = $can->getConnection()->prepare($rawSql2);
        $s2->execute([]);
        //Récupèrer toutes les lignes de l'instruction
        $result2=$s2->fetchAll(); 
         // Ici, on récupérera la liste des candidats et les informations de recruteur, 
         //puis on la passera au template recruteur/dashboard.html.twig
        return $this->render('recruteur/dashboard.html.twig', [
            'recruteur' =>   $rec ,
            'candidats'=> $result2
        ]
        );
        
    }
      /**
     * @Route("/mesEntretiens/{id}", name="MesEntretiens", methods={"GET"})
     */
    public function entretiensRecruteur(Recruteur $recruteur)
    {
        $em = $this->getDoctrine()->getManager();

        $employee = $em->getRepository('App:Recruteur')->find($recruteur); 
        return $this->render('recruteur/mesEntretiens.html.twig', [
            'recruteur' =>   $employee ,
        ]
        );
        
    }
     /**
     * @Route("/planifierEntretien/{id}", name="planifierEntretien", methods={"GET"})
     */
    public function planifierEntretien(Recruteur $recruteur)
    {
        $em = $this->getDoctrine()->getManager();

        $employee = $em->getRepository('App:Recruteur')->find($recruteur); 
        return $this->render('recruteur/creerEntretien.html.twig', [
            'recruteur' =>   $employee ,
        ]
        );
        
    }

    //lorsqu'on clique sur "voir plus" dans la page "tabelau de bord" 
    /**
     * @Route("/profileCandidat/{id}", name="profileCandidat", methods={"GET","POST"})
     */
    public function profileCandidat(ExperienceProfissionnelleRepository $exp,$id){
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
        // Ici, on récupérera les information d'un candidat  et ses experience profissionnelles, 
         //puis on la passera au template recruteur/candidatProfile.html.twig
        return $this->render('recruteur/candidatProfile.html.twig', [
            'experience_profissionnelles' => $result2,
          'candidat'=>$result

        ]);


    }
   //route de "publier Offre emploi " de recruteur 
    /**
     * @Route("/offreEmploi", name="offre_emploi", methods={"GET"})
     */
    public function offre_emploi()
    {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
        // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
         // On récupère les données de recruteur a travers la méthode find()
        $employee = $em->getRepository('App:Recruteur')->find($id); 
        $rawSql2 = "SELECT * FROM `entretien` ;";

        $can = $this->getDoctrine()->getManager();
        //cree l'instruction prepare, pour obtenir la connexion doctrine
        $s2 = $can->getConnection()->prepare($rawSql2);
        $s2->execute([]);
         //Récupèrer toutes les lignes de l'instruction
        $result2=$s2->fetchAll();
        // Ici, on récupérera les information de recruteur connecté, 
         //puis on la passera au template recruteur/offre_emploi.html.twig
        return $this->render('recruteur/offre_emploi.html.twig', [
            'recruteur' =>   $employee ,
            'entretien'=> $result2
        ]
        );
        
    }
    //route de "Mon profil" de recruteur 
        /**
     * @Route("/profileRecruteur", name="profile_recruteur", methods={"GET"})
     */
    public function profileRecruteur()
    {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
        // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        // On récupère les données de recruteur a travers la méthode find()
        $employee = $em->getRepository('App:Recruteur')->find($id); 
         // Ici, on récupérera les information de recruteur connecté, 
         //puis on la passera au template recruteur/profile_recruteur.html.twig
        return $this->render('recruteur/profile_recruteur.html.twig', [
            'recruteur' =>   $employee ,
        ]
        );
        
    }
   //route de "Mes offres d'emploi" de recruteur 
/**
     * @Route("/gereroffreEmploi", name="gererOffre_emploi", methods={"GET"})
     */
    public function GererOffre_emploi()
    {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
         // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
         // On récupère les données de recruteur a travers la méthode find()
        $employee = $em->getRepository('App:Recruteur')->find($id); 
         //requete sql pour recuperer les offre d'emlpois  de recruteur connecté
        $rawSql2 = "SELECT * FROM `offre_emploi` as o where o.id_recruteur= $id ;";

        $can = $this->getDoctrine()->getManager();
        //cree l'instruction prepare, pour obtenir la connexion doctrine
        $s2 = $can->getConnection()->prepare($rawSql2);
        $s2->execute([]);
         //Récupèrer toutes les lignes de l'instruction
        $result2=$s2->fetchAll();
        // Ici, on récupérera les information de recruteur connecté et ses offres, 
         //puis on la passera au template recruteur/profile_recruteur.html.twig
        return $this->render('recruteur/gerer_offres.html.twig', [
            'recruteur' =>   $employee ,
            'offres'=>$result2
        ]
        );
        
    }
          /**
     * @Route("/candidatsPostule/{id}", name="candidatsPostule", methods={"GET"})
     */
    public function candidatPostule(Recruteur $recruteur)
    {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
         // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
        $em = $this->getDoctrine()->getManager();

        $employee = $em->getRepository('App:Recruteur')->find($recruteur); 
        
        //candidats
        $rawSql2 = "SELECT * FROM `offre_emploi` as o , offre_candidat as c , candidat as can  WHERE o.`id`=c.id_offre_id and c.id_candidat_id=can.id and o.`id_recruteur`= $id and o.`date_expiration`>=now() ;";
        $can = $this->getDoctrine()->getManager();
        $s2 = $can->getConnection()->prepare($rawSql2);
        $s2->execute([]);
        $result2=$s2->fetchAll();
        return $this->render('recruteur/candidats_postule.html.twig', [
            'recruteur' =>   $employee ,
            'candidats'=> $result2
        ]
        );
        
    }
//route pour creer une offre d'emploi
  
    /**
     * @Route("/off2", name="offrEmploi_creation", methods={"GET","POST"})
     */
    public function ajoutoffre(Request $request): Response
    {
        // obtenir le  recruteur actuellement connecté
        $user = $this->getUser();
         // obtenir l'id de  recruteur  connecté
        $id=$user->getId();
        //creation de nouveau objet OffreEmploi
        $Offre = new OffreEmploi();
   //grâce à l'objet Request ,on peut récupérer les données du formulaire
        $Offre->setExigence($request->request->get('exigence')); 
        $Offre->setDomaine($request->request->get('domaine')); 
        $Offre->setNomPoste($request->request->get('poste')); 
        $Offre->setSalaire($request->request->get('salaire')); 
        $Offre->setCategorie('categorie'); 
        $Offre->setDetailOffre($request->request->get('detail')); 
        $Offre->setDateExpiration($request->request->get('dateExp')); 
        $Offre->setTypeEmploi($request->request->get('typeEmploi')); 
        $Offre->setTypeSalaire($request->request->get('typeSalaire')); 
        $Offre->setTypeContrat($request->request->get('contrat')); 
        $Offre->setProfilRecherche($request->request->get('profil')); 
        $ent = $this->getDoctrine()->getRepository(Entretien::class)->find($request->request->get('entretien'));
        $Offre->setIdEntretien($ent); 
        $Offre->setIdRecruteur($user->getId()); 
        // On récupère l'EntityManager
        $entityManager = $this->getDoctrine()->getManager();
        // la fonction $entityManager->persist() signale au manager de préparer
         //une requête pour insérer l'objet $Offre dans la table OffreEmploi
        $entityManager->persist($Offre);
        //exécute la requête
         $entityManager->flush();
         // addFlash() est une methode pour définir un message dans la session
         $this->addFlash('ajouter','Offre à été ajouter avec succés');
       // Puis on redirige vers la page de visualisation 
        return $this->redirectToRoute('gererOffre_emploi');
        
    }
    //route de "Mes offres d'emploi" pour supprimer une offre
  /**
     * @Route("/delete/{id}", name="offree_delete", methods={"GET","POST"})
     */
    
    public function delete(Request $request, OffreEmploi $offre): Response
    {
       // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
         // On récupère l'offre a travers la méthode find()
        $tim = $em->getRepository('App:OffreEmploi')->find($offre); 
        //supprimer l'offre 
        $em->remove($tim);
       //exécute la requête
        $em->flush();
        // addFlash() est une methode pour définir un message dans la session
        $this->addFlash('supp','Offre à été supprimer avec succés');
        // Puis on redirige vers la page de visualisation 
        return $this->redirectToRoute('gererOffre_emploi');
    }
}