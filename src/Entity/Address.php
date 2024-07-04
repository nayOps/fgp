<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
#[ApiResource()]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pays = null;

    #[ORM\OneToMany(mappedBy: 'provinnce', targetEntity: Province::class)]
    private Collection $province;

    #[ORM\OneToMany(mappedBy: 'address', targetEntity: Territoire::class)]
    private Collection $territoire;

    #[ORM\Column(length: 255)]
    private ?string $commune = null;

    #[ORM\Column(length: 255)]
    private ?string $quartier = null;

    #[ORM\Column(length: 255)]
    private ?string $rue = null;

    #[ORM\OneToOne(mappedBy: 'address', cascade: ['persist', 'remove'])]
    private ?Identity $address = null;

    public function __construct()
    {
        $this->province = new ArrayCollection();
        $this->territoire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * @return Collection<int, Province>
     */
    public function getProvince(): Collection
    {
        return $this->province;
    }

    public function addProvince(Province $province): static
    {
        if (!$this->province->contains($province)) {
            $this->province->add($province);
            $province->setProvinnce($this);
        }

        return $this;
    }

    public function removeProvince(Province $province): static
    {
        if ($this->province->removeElement($province)) {
            // set the owning side to null (unless already changed)
            if ($province->getProvinnce() === $this) {
                $province->setProvinnce(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Territoire>
     */
    public function getTerritoire(): Collection
    {
        return $this->territoire;
    }

    public function addTerritoire(Territoire $territoire): static
    {
        if (!$this->territoire->contains($territoire)) {
            $this->territoire->add($territoire);
            $territoire->setAddress($this);
        }

        return $this;
    }

    public function removeTerritoire(Territoire $territoire): static
    {
        if ($this->territoire->removeElement($territoire)) {
            // set the owning side to null (unless already changed)
            if ($territoire->getAddress() === $this) {
                $territoire->setAddress(null);
            }
        }

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(string $commune): static
    {
        $this->commune = $commune;

        return $this;
    }

    public function getQuartier(): ?string
    {
        return $this->quartier;
    }

    public function setQuartier(string $quartier): static
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): static
    {
        $this->rue = $rue;

        return $this;
    }

    public function getAddress(): ?Identity
    {
        return $this->address;
    }

    public function setAddress(?Identity $address): static
    {
        // unset the owning side of the relation if necessary
        if ($address === null && $this->address !== null) {
            $this->address->setAddress(null);
        }

        // set the owning side of the relation if necessary
        if ($address !== null && $address->getAddress() !== $this) {
            $address->setAddress($this);
        }

        $this->address = $address;

        return $this;
    }
}
