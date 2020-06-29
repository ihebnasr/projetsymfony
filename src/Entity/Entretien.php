<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntretienRepository")
 */
class Entretien
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
    private $nom_entretien;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $description;

 

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OffreEmploi", mappedBy="id_entretien")
     */
    private $offreEmplois;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EntretienCandidat", mappedBy="entretien_id")
     */
    private $entretiens;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\OffreEmploi", mappedBy="id_entretien")
     */
    private $offreEmploiss;

    public function __construct()
    {
        $this->offreEmplois = new ArrayCollection();
        $this->entretiens = new ArrayCollection();
        $this->offreEmploiss = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntretien(): ?string
    {
        return $this->nom_entretien;
    }

    public function setNomEntretien(string $nom_entretien): self
    {
        $this->nom_entretien = $nom_entretien;

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



    /**
     * @return Collection|OffreEmploi[]
     */
    public function getOffreEmplois(): Collection
    {
        return $this->offreEmplois;
    }

    public function addOffreEmplois(OffreEmploi $offreEmplois): self
    {
        if (!$this->offreEmplois->contains($offreEmplois)) {
            $this->offreEmplois[] = $offreEmplois;
            $offreEmplois->setIdEntretien($this);
        }

        return $this;
    }

    public function removeOffreEmplois(OffreEmploi $offreEmplois): self
    {
        if ($this->offreEmplois->contains($offreEmplois)) {
            $this->offreEmplois->removeElement($offreEmplois);
            // set the owning side to null (unless already changed)
            if ($offreEmplois->getIdEntretien() === $this) {
                $offreEmplois->setIdEntretien(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|EntretienCandidat[]
     */
    public function getEntretiens(): Collection
    {
        return $this->entretiens;
    }

    public function addEntretien(EntretienCandidat $entretien): self
    {
        if (!$this->entretiens->contains($entretien)) {
            $this->entretiens[] = $entretien;
            $entretien->setEntretienId($this);
        }

        return $this;
    }

    public function removeEntretien(EntretienCandidat $entretien): self
    {
        if ($this->entretiens->contains($entretien)) {
            $this->entretiens->removeElement($entretien);
            // set the owning side to null (unless already changed)
            if ($entretien->getEntretienId() === $this) {
                $entretien->setEntretienId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|OffreEmploi[]
     */
    public function getOffreEmploiss(): Collection
    {
        return $this->offreEmploiss;
    }

    public function addOffreEmploiss(OffreEmploi $offreEmploiss): self
    {
        if (!$this->offreEmploiss->contains($offreEmploiss)) {
            $this->offreEmploiss[] = $offreEmploiss;
            $offreEmploiss->setIdEntretien($this);
        }

        return $this;
    }

    public function removeOffreEmploiss(OffreEmploi $offreEmploiss): self
    {
        if ($this->offreEmploiss->contains($offreEmploiss)) {
            $this->offreEmploiss->removeElement($offreEmploiss);
            // set the owning side to null (unless already changed)
            if ($offreEmploiss->getIdEntretien() === $this) {
                $offreEmploiss->setIdEntretien(null);
            }
        }

        return $this;
    }
}
