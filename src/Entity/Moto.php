<?php

namespace App\Entity;

use App\Repository\MotoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotoRepository::class)]
class Moto extends Vehicule
{

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Nbroues = null;

    #[ORM\Column(nullable: true)]
    private ?bool $bagagerie = null;

    public function getNbroues(): ?int
    {
        return $this->Nbroues;
    }

    public function setNbroues(?int $Nbroues): static
    {
        $this->Nbroues = $Nbroues;

        return $this;
    }

    public function isBagagerie(): ?bool
    {
        return $this->bagagerie;
    }

    public function setBagagerie(?bool $bagagerie): static
    {
        $this->bagagerie = $bagagerie;

        return $this;
    }
}
