<?php

namespace App\Entity;

use App\Repository\StoredThingRepository;
use Doctrine\ORM\Mapping as ORM;

// We use this strange name instead of "object" or "item" because these two names can be key variable
#[ORM\Entity(repositoryClass: StoredThingRepository::class)]
class StoredThing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $baseAmount = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The total normal amount of this item that need to be in the secretariat if there is no reservation of it
     */
    public function getBaseAmount(): ?int
    {
        return $this->baseAmount;
    }

    public function setBaseAmount(int $baseAmount): static
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }
}
