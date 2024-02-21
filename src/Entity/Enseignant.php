<?php

namespace App\Entity;

use App\Repository\EnseignantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnseignantRepository::class)]
class Enseignant extends Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $IM = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIM(): ?string
    {
        return $this->IM;
    }

    public function setIM(string $IM): static
    {
        $this->IM = $IM;

        return $this;
    }
}
