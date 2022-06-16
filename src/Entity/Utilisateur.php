<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom_util;

    #[ORM\Column(type: 'string', length: 255)]
    private $login_util;

    #[ORM\Column(type: 'string', length: 255)]
    private $mdp_util;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomUtil(): ?string
    {
        return $this->nom_util;
    }

    public function setNomUtil(string $nom_util): self
    {
        $this->nom_util = $nom_util;

        return $this;
    }

    public function getLoginUtil(): ?string
    {
        return $this->login_util;
    }

    public function setLoginUtil(string $login_util): self
    {
        $this->login_util = $login_util;

        return $this;
    }

    public function getMdpUtil(): ?string
    {
        return $this->mdp_util;
    }

    public function setMdpUtil(string $mdp_util): self
    {
        $this->mdp_util = $mdp_util;

        return $this;
    }
}
