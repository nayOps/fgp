<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ParentInformationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParentInformationRepository::class)]
#[ApiResource()]
class ParentInformation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    #[ORM\Column(length: 255)]
    private ?string $nationality = null;

    #[ORM\Column]
    private ?int $nin = null;

    #[ORM\Column(length: 255)]
    private ?string $placeOfBirth = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateOfBirth = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\Column(length: 255)]
    private ?string $physicalStatus = null;

    #[ORM\OneToOne(mappedBy: 'parentInformation', cascade: ['persist', 'remove'])]
    private ?Identity $parentInformation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): static
    {
        $this->nationality = $nationality;

        return $this;
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

    public function getPlaceOfBirth(): ?string
    {
        return $this->placeOfBirth;
    }

    public function setPlaceOfBirth(string $placeOfBirth): static
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTimeInterface $dateOfBirth): static
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getPhysicalStatus(): ?string
    {
        return $this->physicalStatus;
    }

    public function setPhysicalStatus(string $physicalStatus): static
    {
        $this->physicalStatus = $physicalStatus;

        return $this;
    }

    public function getParentInformation(): ?Identity
    {
        return $this->parentInformation;
    }

    public function setParentInformation(?Identity $parentInformation): static
    {
        // unset the owning side of the relation if necessary
        if ($parentInformation === null && $this->parentInformation !== null) {
            $this->parentInformation->setParentInformation(null);
        }

        // set the owning side of the relation if necessary
        if ($parentInformation !== null && $parentInformation->getParentInformation() !== $this) {
            $parentInformation->setParentInformation($this);
        }

        $this->parentInformation = $parentInformation;

        return $this;
    }
}
