<?php

namespace App\Entity;

use App\Repository\EnvironmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnvironmentRepository::class)]
class Environment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $ipAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $sshUsername = null;

    #[ORM\Column(length: 255)]
    private ?string $phpMyAdminLink = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    public function getSshUsername(): ?string
    {
        return $this->sshUsername;
    }

    public function setSshUsername(string $sshUsername): self
    {
        $this->sshUsername = $sshUsername;

        return $this;
    }

    public function getPhpMyAdminLink(): ?string
    {
        return $this->phpMyAdminLink;
    }

    public function setPhpMyAdminLink(string $phpMyAdminLink): self
    {
        $this->phpMyAdminLink = $phpMyAdminLink;

        return $this;
    }
}
