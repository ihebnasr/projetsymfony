<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
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
    private $contenu;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_entretien;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Proposition", mappedBy="id_question")
     */
    private $propositions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ReponseCandidat", mappedBy="id_question")
     */
    private $reponseCandidats;

    public function __construct()
    {
        $this->propositions = new ArrayCollection();
        $this->reponseCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getIdEntretien(): ?int
    {
        return $this->id_entretien;
    }

    public function setIdEntretien(int $id_entretien): self
    {
        $this->id_entretien = $id_entretien;

        return $this;
    }

    /**
     * @return Collection|Proposition[]
     */
    public function getPropositions(): Collection
    {
        return $this->propositions;
    }

    public function addProposition(Proposition $proposition): self
    {
        if (!$this->propositions->contains($proposition)) {
            $this->propositions[] = $proposition;
            $proposition->setIdQuestion($this);
        }

        return $this;
    }

    public function removeProposition(Proposition $proposition): self
    {
        if ($this->propositions->contains($proposition)) {
            $this->propositions->removeElement($proposition);
            // set the owning side to null (unless already changed)
            if ($proposition->getIdQuestion() === $this) {
                $proposition->setIdQuestion(null);
            }
        }

        return $this;
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
            $reponseCandidat->setIdQuestion($this);
        }

        return $this;
    }

    public function removeReponseCandidat(ReponseCandidat $reponseCandidat): self
    {
        if ($this->reponseCandidats->contains($reponseCandidat)) {
            $this->reponseCandidats->removeElement($reponseCandidat);
            // set the owning side to null (unless already changed)
            if ($reponseCandidat->getIdQuestion() === $this) {
                $reponseCandidat->setIdQuestion(null);
            }
        }

        return $this;
    }
}
