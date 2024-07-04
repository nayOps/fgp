<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MaternalGrandparentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaternalGrandparentRepository::class)]
#[ApiResource()]
class MaternalGrandparent
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
    private ?string $nin = null;

    #[ORM\Column(length: 255)]
    private ?string $nationality = null;

    #[ORM\Column(length: 255)]
    private ?string $physicalStatus = null;

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\OneToOne(mappedBy: 'maternalGrandparent', cascade: ['persist', 'remove'])]
    private ?Identity $maternalGrandparent = null;

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

    public function getNin(): ?string
    {
        return $this->nin;
    }

    public function setNin(string $nin): static
    {
        $this->nin = $nin;

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

    public function getPhysicalStatus(): ?string
    {
        return $this->physicalStatus;
    }

    public function setPhysicalStatus(string $physicalStatus): static
    {
        $this->physicalStatus = $physicalStatus;

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

    public function getMaternalGrandparent(): ?Identity
    {
        return $this->maternalGrandparent;
    }

    public function setMaternalGrandparent(?Identity $maternalGrandparent): static
    {
        // unset the owning side of the relation if necessary
        if ($maternalGrandparent === null && $this->maternalGrandparent !== null) {
            $this->maternalGrandparent->setMaternalGrandparent(null);
        }

        // set the owning side of the relation if necessary
        if ($maternalGrandparent !== null && $maternalGrandparent->getMaternalGrandparent() !== $this) {
            $maternalGrandparent->setMaternalGrandparent($this);
        }

        $this->maternalGrandparent = $maternalGrandparent;

        return $this;
    }
}
