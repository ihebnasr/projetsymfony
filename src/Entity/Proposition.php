<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropositionRepository")
 */
class Proposition
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
    private $nom_prop;

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat_prop;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\question", inversedBy="propositions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_question;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProp(): ?string
    {
        return $this->nom_prop;
    }

    public function setNomProp(string $nom_prop): self
    {
        $this->nom_prop = $nom_prop;

        return $this;
    }

    public function getEtatProp(): ?bool
    {
        return $this->etat_prop;
    }

    public function setEtatProp(bool $etat_prop): self
    {
        $this->etat_prop = $etat_prop;

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
