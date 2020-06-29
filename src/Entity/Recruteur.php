<?php

namespace App\Entity;
use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\RecruteurRepository")
 */
class Recruteur extends User
{

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $cin_recruteur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_recruteur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom_recruteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_recruteur;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_societe;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaine;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $description;
      /**
     * @ORM\Column(type="string", length=1000)
     */
    private $adresse;
       /**
     * @ORM\Column(type="string", length=1000)
     */
    private $lien_site;
       /**
     * @ORM\Column(type="string", length=1000)
     */
    private $lien_facebook;
       /**
     * @ORM\Column(type="string", length=1000)
     */
    private $lien_linkedin;
       /**
     * @ORM\Column(type="string", length=45)
     */
    private $telephone;
     /**
     * @ORM\Column(type="string", length=6000)
     */
    private $logo;


/**
 * @ORM\OneToMany(targetEntity="App\Entity\OffreEmploi", mappedBy="recruteur")
 */
private $mesOffres;

public function __construct()
{
    
    $this->mesOffres = new ArrayCollection();
}
  

    public function getCinRecruteur(): ?string
    {
        return $this->cin_recruteur;
    }

    public function setCinRecruteur(string $cin_recruteur): self
    {
        $this->cin_recruteur = $cin_recruteur;

        return $this;
    }

    public function getNomRecruteur(): ?string
    {
        return $this->nom_recruteur;
    }

    public function setNomRecruteur(string $nom_recruteur): self
    {
        $this->nom_recruteur = $nom_recruteur;

        return $this;
    }

    public function getPrenomRecruteur(): ?string
    {
        return $this->prenom_recruteur;
    }

    public function setPrenomRecruteur(string $prenom_recruteur): self
    {
        $this->prenom_recruteur = $prenom_recruteur;

        return $this;
    }

    public function getEmailRecruteur(): ?string
    {
        return $this->email_recruteur;
    }

    public function setEmailRecruteur(string $email_recruteur): self
    {
        $this->email_recruteur = $email_recruteur;

        return $this;
    }


    public function getNomSociete(): ?string
    {
        return $this->nom_societe;
    }

    public function setNomSociete(string $nom_societe): self
    {
        $this->nom_societe = $nom_societe;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLienSite(): ?string
    {
        return $this->lien_site;
    }

    public function setLienSite(string $lien_site): self
    {
        $this->lien_site = $lien_site;

        return $this;
    }

    public function getLienFacebook(): ?string
    {
        return $this->lien_facebook;
    }

    public function setLienFacebook(string $lien_facebook): self
    {
        $this->lien_facebook = $lien_facebook;

        return $this;
    }

    public function getLienLinkedin(): ?string
    {
        return $this->lien_linkedin;
    }

    public function setLienLinkedin(string $lien_linkedin): self
    {
        $this->lien_linkedin = $lien_linkedin;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }


 


    /**
     * @return Collection|OffreEmploi[]
     */
    public function getMesOffres(): Collection
    {
        return $this->mesOffres;
    }

    public function addMesOffre(OffreEmploi $mesOffre): self
    {
        if (!$this->mesOffres->contains($mesOffre)) {
            $this->mesOffres[] = $mesOffre;
            $mesOffre->setRecruteurId($this);
        }

        return $this;
    }

    public function removeMesOffre(OffreEmploi $mesOffre): self
    {
        if ($this->mesOffres->contains($mesOffre)) {
            $this->mesOffres->removeElement($mesOffre);
            // set the owning side to null (unless already changed)
            if ($mesOffre->getRecruteurId() === $this) {
                $mesOffre->setRecruteurId(null);
            }
        }

        return $this;
    }
}
