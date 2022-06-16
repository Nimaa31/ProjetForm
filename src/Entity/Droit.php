<?php

namespace App\Entity;

use App\Repository\DroitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DroitRepository::class)]
class Droit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_droit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDroit(): ?string
    {
        return $this->nom_droit;
    }

    public function setNomDroit(string $nom_droit): self
    {
        $this->nom_droit = $nom_droit;

        return $this;
    }
}
