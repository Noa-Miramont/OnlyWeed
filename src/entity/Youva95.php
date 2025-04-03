<?php

namespace App\Entity;

use App\Repository\Youva95Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Youva95Repository::class)]
class Youva95
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
