<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\OriginRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OriginRepository::class)]
#[ApiResource()]
class Origin
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pays = null;

    #[ORM\OneToMany(mappedBy: 'province', targetEntity: Province::class)]
    private Collection $province;

    #[ORM\OneToMany(mappedBy: 'territoire', targetEntity: Territoire::class)]
    private Collection $territoire;

    #[ORM\OneToMany(mappedBy: 'secteur', targetEntity: Secteur::class)]
    private Collection $secteur;

    #[ORM\OneToMany(mappedBy: 'groupement', targetEntity: Groupement::class)]
    private Collection $groupement;

    #[ORM\OneToMany(mappedBy: 'village', targetEntity: Village::class)]
    private Collection $village;

    #[ORM\OneToOne(mappedBy: 'origin', cascade: ['persist', 'remove'])]
    private ?Identity $origin = null;

    public function __construct()
    {
        $this->province = new ArrayCollection();
        $this->territoire = new ArrayCollection();
        $this->secteur = new ArrayCollection();
        $this->groupement = new ArrayCollection();
        $this->village = new ArrayCollection();
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
            $province->setProvince($this);
        }

        return $this;
    }

    public function removeProvince(Province $province): static
    {
        if ($this->province->removeElement($province)) {
            // set the owning side to null (unless already changed)
            if ($province->getProvince() === $this) {
                $province->setProvince(null);
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
            $territoire->setTerritoire($this);
        }

        return $this;
    }

    public function removeTerritoire(Territoire $territoire): static
    {
        if ($this->territoire->removeElement($territoire)) {
            // set the owning side to null (unless already changed)
            if ($territoire->getTerritoire() === $this) {
                $territoire->setTerritoire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Secteur>
     */
    public function getSecteur(): Collection
    {
        return $this->secteur;
    }

    public function addSecteur(Secteur $secteur): static
    {
        if (!$this->secteur->contains($secteur)) {
            $this->secteur->add($secteur);
            $secteur->setSecteur($this);
        }

        return $this;
    }

    public function removeSecteur(Secteur $secteur): static
    {
        if ($this->secteur->removeElement($secteur)) {
            // set the owning side to null (unless already changed)
            if ($secteur->getSecteur() === $this) {
                $secteur->setSecteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Groupement>
     */
    public function getGroupement(): Collection
    {
        return $this->groupement;
    }

    public function addGroupement(Groupement $groupement): static
    {
        if (!$this->groupement->contains($groupement)) {
            $this->groupement->add($groupement);
            $groupement->setGroupement($this);
        }

        return $this;
    }

    public function removeGroupement(Groupement $groupement): static
    {
        if ($this->groupement->removeElement($groupement)) {
            // set the owning side to null (unless already changed)
            if ($groupement->getGroupement() === $this) {
                $groupement->setGroupement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Village>
     */
    public function getVillage(): Collection
    {
        return $this->village;
    }

    public function addVillage(Village $village): static
    {
        if (!$this->village->contains($village)) {
            $this->village->add($village);
            $village->setVillage($this);
        }

        return $this;
    }

    public function removeVillage(Village $village): static
    {
        if ($this->village->removeElement($village)) {
            // set the owning side to null (unless already changed)
            if ($village->getVillage() === $this) {
                $village->setVillage(null);
            }
        }

        return $this;
    }

    public function getOrigin(): ?Identity
    {
        return $this->origin;
    }

    public function setOrigin(?Identity $origin): static
    {
        // unset the owning side of the relation if necessary
        if ($origin === null && $this->origin !== null) {
            $this->origin->setOrigin(null);
        }

        // set the owning side of the relation if necessary
        if ($origin !== null && $origin->getOrigin() !== $this) {
            $origin->setOrigin($this);
        }

        $this->origin = $origin;

        return $this;
    }
}
