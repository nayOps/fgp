<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProfessionalSituationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfessionalSituationRepository::class)]
#[ApiResource()]
class ProfessionalSituation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null;

    #[ORM\OneToOne(mappedBy: 'professionalSituation', cascade: ['persist', 'remove'])]
    private ?Identity $professionalSituation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getProfessionalSituation(): ?Identity
    {
        return $this->professionalSituation;
    }

    public function setProfessionalSituation(?Identity $professionalSituation): static
    {
        // unset the owning side of the relation if necessary
        if ($professionalSituation === null && $this->professionalSituation !== null) {
            $this->professionalSituation->setProfessionalSituation(null);
        }

        // set the owning side of the relation if necessary
        if ($professionalSituation !== null && $professionalSituation->getProfessionalSituation() !== $this) {
            $professionalSituation->setProfessionalSituation($this);
        }

        $this->professionalSituation = $professionalSituation;

        return $this;
    }
}
