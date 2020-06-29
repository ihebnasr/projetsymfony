<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponseCandidatRepository")
 */
class ReponseCandidat
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
    private $reponse;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $duree;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\candidat", inversedBy="reponseCandidats")
     */
    private $id_candidat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\question", inversedBy="reponseCandidats")
     */
    private $id_question;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

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

    public function getIdCandidat(): ?candidat
    {
        return $this->id_candidat;
    }

    public function setIdCandidat(?candidat $id_candidat): self
    {
        $this->id_candidat = $id_candidat;

        return $this;
    }

    public function getIdQuestion(): ?question
    {
        return $this->id_question;
    }

    public function setIdQuestion(?question $id_question): self
    {
        $this->id_question = $id_question;

        return $this;
    }

   
}
