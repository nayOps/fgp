<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SupportingDocumentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupportingDocumentRepository::class)]
#[ApiResource()]
class SupportingDocument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $piece = null;

    #[ORM\Column(length: 255)]
    private ?string $pieceNumber = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPiece(): ?string
    {
        return $this->piece;
    }

    public function setPiece(string $piece): static
    {
        $this->piece = $piece;

        return $this;
    }

    public function getPieceNumber(): ?string
    {
        return $this->pieceNumber;
    }

    public function setPieceNumber(string $pieceNumber): static
    {
        $this->pieceNumber = $pieceNumber;

        return $this;
    }
}
