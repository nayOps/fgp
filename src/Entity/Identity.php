<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\IdentityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdentityRepository::class)]
#[ApiResource()]
class Identity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nin = null;

    #[ORM\OneToOne(inversedBy: 'children', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Children $children = null;

    #[ORM\OneToOne(inversedBy: 'address', cascade: ['persist', 'remove'])]
    private ?Address $address = null;

    #[ORM\OneToOne(inversedBy: 'personalInfo', cascade: ['persist', 'remove'])]
    private ?PersonalInfo $personalInfo = null;

    #[ORM\OneToOne(inversedBy: 'origin', cascade: ['persist', 'remove'])]
    private ?Origin $origin = null;

    #[ORM\OneToOne(inversedBy: 'education', cascade: ['persist', 'remove'])]
    private ?Education $education = null;

    #[ORM\OneToOne(inversedBy: 'professionalSituation', cascade: ['persist', 'remove'])]
    private ?ProfessionalSituation $professionalSituation = null;

    #[ORM\OneToOne(inversedBy: 'guardian', cascade: ['persist', 'remove'])]
    private ?Guardian $guardian = null;

    #[ORM\OneToOne(inversedBy: 'maternalGrandparent', cascade: ['persist', 'remove'])]
    private ?MaternalGrandparent $maternalGrandparent = null;

    #[ORM\OneToOne(inversedBy: 'paternalGrandparent', cascade: ['persist', 'remove'])]
    private ?PaternalGrandparent $paternalGrandparent = null;

    #[ORM\OneToOne(inversedBy: 'parentInformation', cascade: ['persist', 'remove'])]
    private ?ParentInformation $parentInformation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNin(): ?int
    {
        return $this->nin;
    }

    public function setNin(int $nin): static
    {
        $this->nin = $nin;

        return $this;
    }

    public function getChildren(): ?Children
    {
        return $this->children;
    }

    public function setChildren(Children $children): static
    {
        $this->children = $children;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getPersonalInfo(): ?PersonalInfo
    {
        return $this->personalInfo;
    }

    public function setPersonalInfo(?PersonalInfo $personalInfo): static
    {
        $this->personalInfo = $personalInfo;

        return $this;
    }

    public function getOrigin(): ?Origin
    {
        return $this->origin;
    }

    public function setOrigin(?Origin $origin): static
    {
        $this->origin = $origin;

        return $this;
    }

    public function getEducation(): ?Education
    {
        return $this->education;
    }

    public function setEducation(?Education $education): static
    {
        $this->education = $education;

        return $this;
    }

    public function getProfessionalSituation(): ?ProfessionalSituation
    {
        return $this->professionalSituation;
    }

    public function setProfessionalSituation(?ProfessionalSituation $professionalSituation): static
    {
        $this->professionalSituation = $professionalSituation;

        return $this;
    }

    public function getGuardian(): ?Guardian
    {
        return $this->guardian;
    }

    public function setGuardian(?Guardian $guardian): static
    {
        $this->guardian = $guardian;

        return $this;
    }

    public function getMaternalGrandparent(): ?MaternalGrandparent
    {
        return $this->maternalGrandparent;
    }

    public function setMaternalGrandparent(?MaternalGrandparent $maternalGrandparent): static
    {
        $this->maternalGrandparent = $maternalGrandparent;

        return $this;
    }

    public function getPaternalGrandparent(): ?PaternalGrandparent
    {
        return $this->paternalGrandparent;
    }

    public function setPaternalGrandparent(?PaternalGrandparent $paternalGrandparent): static
    {
        $this->paternalGrandparent = $paternalGrandparent;

        return $this;
    }

    public function getParentInformation(): ?ParentInformation
    {
        return $this->parentInformation;
    }

    public function setParentInformation(?ParentInformation $parentInformation): static
    {
        $this->parentInformation = $parentInformation;

        return $this;
    }


}
