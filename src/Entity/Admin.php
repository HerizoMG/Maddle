<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
class Admin extends Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $ADMIN_ID = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getADMINID(): ?string
    {
        return $this->ADMIN_ID;
    }

    public function setADMINID(string $ADMIN_ID): static
    {
        $this->ADMIN_ID = $ADMIN_ID;

        return $this;
    }
}
