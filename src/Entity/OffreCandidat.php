<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OffreCandidatRepository")
 */
class OffreCandidat
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\candidat", inversedBy="offreCandidats")
     */
    private $id_candidat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\offreEmploi", inversedBy="offreCandidats")
     */
    private $id_offre;



    public function getId(): ?int
    {
        return $this->id;
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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdCandidat(): ?candidat
    {
        return $this->id_candidat;
    }

    public function setIdCandidat(?candidat $id_candidat): self
    {
        $this->id_candidat = $id_candidat;

        return $this;
    }

    public function getIdOffre(): ?offreEmploi
    {
        return $this->id_offre;
    }

    public function setIdOffre(?offreEmploi $id_offre): self
    {
        $this->id_offre = $id_offre;

        return $this;
    }

  
}
