<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre_adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $complement_adresse;

    #[ORM\Column(type: 'string', length: 255)]
    private $cp_adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreAdresse(): ?string
    {
        return $this->titre_adresse;
    }

    public function setTitreAdresse(string $titre_adresse): self
    {
        $this->titre_adresse = $titre_adresse;

        return $this;
    }

    public function getComplementAdresse(): ?string
    {
        return $this->complement_adresse;
    }

    public function setComplementAdresse(string $complement_adresse): self
    {
        $this->complement_adresse = $complement_adresse;

        return $this;
    }

    public function getCpAdresse(): ?string
    {
        return $this->cp_adresse;
    }

    public function setCpAdresse(string $cp_adresse): self
    {
        $this->cp_adresse = $cp_adresse;

        return $this;
    }
}
