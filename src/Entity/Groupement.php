<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\GroupementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupementRepository::class)]
#[ApiResource(paginationEnabled: true)]
class Groupement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'groupements')]
    private ?Secteur $secteur = null;

    #[ORM\OneToMany(mappedBy: 'groupement', targetEntity: Village::class)]
    private Collection $villages;

    #[ORM\OneToMany(mappedBy: 'groupement', targetEntity: Identity::class)]
    private Collection $identities;

    public function __construct()
    {
        $this->villages = new ArrayCollection();
        $this->identities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSecteur(): ?Secteur
    {
        return $this->secteur;
    }

    public function setSecteur(?Secteur $secteur): static
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * @return Collection<int, Village>
     */
    public function getVillages(): Collection
    {
        return $this->villages;
    }

    public function addVillage(Village $village): static
    {
        if (!$this->villages->contains($village)) {
            $this->villages->add($village);
            $village->setGroupement($this);
        }

        return $this;
    }

    public function removeVillage(Village $village): static
    {
        if ($this->villages->removeElement($village)) {
            // set the owning side to null (unless already changed)
            if ($village->getGroupement() === $this) {
                $village->setGroupement(null);
            }
        }

        return $this;
    }

}
