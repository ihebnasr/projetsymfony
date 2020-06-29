<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\OffreEmploiRepository")
 */
class OffreEmploi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_poste;

    /**
     * @ORM\Column(type="integer")
     */
    private $salaire;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $exigence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaine;
      /**
     * @ORM\Column(type="string", length=6000)
     */
    private $detail_offre;
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $date_expiration;
      /**
     * @ORM\Column(type="string", length=100)
     */
    private $type_emploi;
      /**
     * @ORM\Column(type="string", length=100)
     */
    private $type_salaire;
      /**
     * @ORM\Column(type="string", length=100)
     */
    private $type_contrat;
      /**
     * @ORM\Column(type="string", length=5000)
     */
    private $profil_recherche;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

   /**
     * @ORM\Column(type="integer")
     */
    private $id_recruteur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OffreCandidat", mappedBy="id_offre")
     */
    private $offreCandidats;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entretien", inversedBy="offreEmploiss")
     */
    private $id_entretien;

    public function __construct()
    {
        $this->offreCandidats = new ArrayCollection();
    }

  

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPoste(): ?string
    {
        return $this->nom_poste;
    }

    public function setNomPoste(string $nom_poste): self
    {
        $this->nom_poste = $nom_poste;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getExigence(): ?string
    {
        return $this->exigence;
    }

    public function setExigence(string $exigence): self
    {
        $this->exigence = $exigence;

        return $this;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

   

    

    public function getDetailOffre(): ?string
    {
        return $this->detail_offre;
    }

    public function setDetailOffre(string $detail_offre): self
    {
        $this->detail_offre = $detail_offre;

        return $this;
    }


    public function getTypeEmploi(): ?string
    {
        return $this->type_emploi;
    }

    public function setTypeEmploi(string $type_emploi): self
    {
        $this->type_emploi = $type_emploi;

        return $this;
    }

    public function getTypeSalaire(): ?string
    {
        return $this->type_salaire;
    }

    public function setTypeSalaire(string $type_salaire): self
    {
        $this->type_salaire = $type_salaire;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->type_contrat;
    }

    public function setTypeContrat(string $type_contrat): self
    {
        $this->type_contrat = $type_contrat;

        return $this;
    }

    public function getProfilRecherche(): ?string
    {
        return $this->profil_recherche;
    }

    public function setProfilRecherche(string $profil_recherche): self
    {
        $this->profil_recherche = $profil_recherche;

        return $this;
    }

    public function getDateExpiration(): ?string
    {
        return $this->date_expiration;
    }

    public function setDateExpiration(string $date_expiration): self
    {
        $this->date_expiration = $date_expiration;

        return $this;
    }




    public function getIdRecruteur(): ?int
    {
        return $this->id_recruteur;
    }

    public function setIdRecruteur(int $id_recruteur): self
    {
        $this->id_recruteur = $id_recruteur;

        return $this;
    }

    /**
     * @return Collection|OffreCandidat[]
     */
    public function getOffreCandidats(): Collection
    {
        return $this->offreCandidats;
    }

    public function addOffreCandidat(OffreCandidat $offreCandidat): self
    {
        if (!$this->offreCandidats->contains($offreCandidat)) {
            $this->offreCandidats[] = $offreCandidat;
            $offreCandidat->setIdOffre($this);
        }

        return $this;
    }

    public function removeOffreCandidat(OffreCandidat $offreCandidat): self
    {
        if ($this->offreCandidats->contains($offreCandidat)) {
            $this->offreCandidats->removeElement($offreCandidat);
            // set the owning side to null (unless already changed)
            if ($offreCandidat->getIdOffre() === $this) {
                $offreCandidat->setIdOffre(null);
            }
        }

        return $this;
    }

    public function getIdEntretien(): ?entretien
    {
        return $this->id_entretien;
    }

    public function setIdEntretien(?entretien $id_entretien): self
    {
        $this->id_entretien = $id_entretien;

        return $this;
    }
}
