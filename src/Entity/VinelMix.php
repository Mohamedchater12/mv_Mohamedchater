<?php

namespace App\Entity;

use App\Repository\VinelMixRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VinelMixRepository::class)]
class VinelMix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $string = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): ?string
    {
        return $this->string;
    }

    public function setString(string $string): static
    {
        $this->string = $string;

        return $this;
    }
}
