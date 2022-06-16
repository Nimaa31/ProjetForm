<?php

namespace App\Entity;

use App\Repository\SujetForumsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SujetForumsRepository::class)]
class SujetForums
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre_sujet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSujet(): ?string
    {
        return $this->titre_sujet;
    }

    public function setTitreSujet(string $titre_sujet): self
    {
        $this->titre_sujet = $titre_sujet;

        return $this;
    }
}
