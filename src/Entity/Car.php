<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car extends Vehicule
{

    #[ORM\Column(nullable: true)]
    private ?bool $clim = null;

    #[ORM\Column(nullable: true)]
    private ?bool $da = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $Nbportes = null;


    public function isClim(): ?bool
    {
        return $this->clim;
    }

    public function setClim(?bool $clim): static
    {
        $this->clim = $clim;

        return $this;
    }

    public function isDa(): ?bool
    {
        return $this->da;
    }

    public function setDa(?bool $da): static
    {
        $this->da = $da;

        return $this;
    }

    public function getNbportes(): ?int
    {
        return $this->Nbportes;
    }

    public function setNbportes(?int $Nbportes): static
    {
        $this->Nbportes = $Nbportes;

        return $this;
    }
}
