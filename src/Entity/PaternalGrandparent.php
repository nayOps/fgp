<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PaternalGrandparentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaternalGrandparentRepository::class)]
#[ApiResource()]
class PaternalGrandparent
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

    #[ORM\Column(length: 255)]
    private ?string $sexe = null;

    #[ORM\OneToOne(mappedBy: 'paternalGrandparent', cascade: ['persist', 'remove'])]
    private ?Identity $paternalGrandparent = null;

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

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getPaternalGrandparent(): ?Identity
    {
        return $this->paternalGrandparent;
    }

    public function setPaternalGrandparent(?Identity $paternalGrandparent): static
    {
        // unset the owning side of the relation if necessary
        if ($paternalGrandparent === null && $this->paternalGrandparent !== null) {
            $this->paternalGrandparent->setPaternalGrandparent(null);
        }

        // set the owning side of the relation if necessary
        if ($paternalGrandparent !== null && $paternalGrandparent->getPaternalGrandparent() !== $this) {
            $paternalGrandparent->setPaternalGrandparent($this);
        }

        $this->paternalGrandparent = $paternalGrandparent;

        return $this;
    }
}
