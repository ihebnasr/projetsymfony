<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExperienceProfissionnelleRepository")
 */
class ExperienceProfissionnelle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $nom_exp;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin;

   
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;


/** @ORM\ManyToOne(targetEntity="App\Entity\Candidat", inversedBy="experiences")
 * @ORM\JoinColumn(nullable=false)
 */
 private $candidat;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomExp(): ?string
    {
        return $this->nom_exp;
    }

    public function setNomExp(string $nom_exp): self
    {
        $this->nom_exp = $nom_exp;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }


    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(string $entreprise): self
    {
        $this->entreprise = $entreprise;

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


    public function getCandidat(): ?Candidat
        {
           return $this->candidat;
        }
    public function setCandidat(?Candidat $candidat): self
        {
           $this->candidat = $candidat;
           return $this;
        }

}
