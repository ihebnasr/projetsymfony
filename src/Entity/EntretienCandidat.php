<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntretienCandidatRepository")
 */
class EntretienCandidat
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
    private $date_entretien;



    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\candidat", inversedBy="entretiencandidats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidat_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\entretien", inversedBy="entretiens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $entretien_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEntretien(): ?\DateTimeInterface
    {
        return $this->date_entretien;
    }

    public function setDateEntretien(\DateTimeInterface $date_entretien): self
    {
        $this->date_entretien = $date_entretien;

        return $this;
    }


    public function getCandidatId(): ?candidat
    {
        return $this->candidat_id;
    }

    public function setCandidatId(?candidat $candidat_id): self
    {
        $this->candidat_id = $candidat_id;

        return $this;
    }

    public function getEntretienId(): ?entretien
    {
        return $this->entretien_id;
    }

    public function setEntretienId(?entretien $entretien_id): self
    {
        $this->entretien_id = $entretien_id;

        return $this;
    }
}
