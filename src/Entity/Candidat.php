<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\ExperienceProfissionnelle;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidatRepository")
 */
class Candidat extends User
{

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_candidat;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_candidat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre_candidat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $domaine_candidat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_candidat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkedin;

    
/**
 * @ORM\OneToMany(targetEntity="App\Entity\ExperienceProfissionnelle", mappedBy="candidat")
 */
private $experiences;

/**
 * @ORM\OneToMany(targetEntity="App\Entity\ReponseCandidat", mappedBy="id_candidat")
 */
private $reponseCandidats;
    



    public function getPrenomCandidat(): ?string
    {
        return $this->prenom_candidat;
    }

    public function setPrenomCandidat(string $prenom_candidat): self
    {
        $this->prenom_candidat = $prenom_candidat;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getTelCandidat(): ?string
    {
        return $this->tel_candidat;
    }

    public function setTelCandidat(string $tel_candidat): self
    {
        $this->tel_candidat = $tel_candidat;

        return $this;
    }

    public function getGenreCandidat(): ?string
    {
        return $this->genre_candidat;
    }

    public function setGenreCandidat(string $genre_candidat): self
    {
        $this->genre_candidat = $genre_candidat;

        return $this;
    }

    public function getDomaineCandidat(): ?string
    {
        return $this->domaine_candidat;
    }

    public function setDomaineCandidat(string $domaine_candidat): self
    {
        $this->domaine_candidat = $domaine_candidat;

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

    public function getPhotoCandidat()
    {
        return $this->photo_candidat;
    }

    public function setPhotoCandidat($photo_candidat)
    {
        $this->photo_candidat = $photo_candidat;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): self
    {
        $this->linkedin = $linkedin;

        return $this;
    }



    public function __construct()
    {
        $this->experiences = [];
        $this->reponseCandidats = new ArrayCollection();
    }



/** 
 * @return Collection|ExperienceProfissionnelle[]
*/
 public function getExperiences(): Collection
                {
                return $this->experiences;
                }


 public function addExperience(ExperienceProfissionnelle $experience): self
                {
                if (!$this->experiences->contains($experience)) {
                $this->experiences[] = $experience;
                $experience->setCandidat($this);
                }
                return $this;
                }


 public function removeExperience(ExperienceProfissionnelle $experience): self
                {
                if ($this->experiences->contains($experience)) {
                $this->experiences->removeElement($experience);
                // set the owning side to null (unless already changed)
                if ($experience->getCandidat() === $this) {
                $experience->setCandidat(null);
                }
                }
                return $this;
                }



 /**
     * Generates the magic method
     * 
*/
    public function __toString(){
        return  (string)$this->id;
    }

    /**
     * @return Collection|ReponseCandidat[]
     */
    public function getReponseCandidats(): Collection
    {
        return $this->reponseCandidats;
    }

    public function addReponseCandidat(ReponseCandidat $reponseCandidat): self
    {
        if (!$this->reponseCandidats->contains($reponseCandidat)) {
            $this->reponseCandidats[] = $reponseCandidat;
            $reponseCandidat->setIdCandidat($this);
        }

        return $this;
    }

    public function removeReponseCandidat(ReponseCandidat $reponseCandidat): self
    {
        if ($this->reponseCandidats->contains($reponseCandidat)) {
            $this->reponseCandidats->removeElement($reponseCandidat);
            // set the owning side to null (unless already changed)
            if ($reponseCandidat->getIdCandidat() === $this) {
                $reponseCandidat->setIdCandidat(null);
            }
        }

        return $this;
    }


   
}
