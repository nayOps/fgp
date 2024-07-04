<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\EducationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducationRepository::class)]
#[ApiResource()]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null;

    #[ORM\OneToOne(mappedBy: 'education', cascade: ['persist', 'remove'])]
    private ?Identity $education = null;

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

    public function getEducation(): ?Identity
    {
        return $this->education;
    }

    public function setEducation(?Identity $education): static
    {
        // unset the owning side of the relation if necessary
        if ($education === null && $this->education !== null) {
            $this->education->setEducation(null);
        }

        // set the owning side of the relation if necessary
        if ($education !== null && $education->getEducation() !== $this) {
            $education->setEducation($this);
        }

        $this->education = $education;

        return $this;
    }
}
