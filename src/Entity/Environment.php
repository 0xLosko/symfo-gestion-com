<?php

namespace App\Entity;

use App\Repository\EnvironmentRepository;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\ManyToOne(inversedBy: 'environments')]
    private ?Project $project = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    #[ORM\Column(length: 6)]
    private ?int $sshPort = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $ipRestriction = null;

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

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getSshPort(): ?int
    {
        return $this->sshPort;
    }

    public function setSshPort(int $sshPort): self
    {
        $this->sshPort = $sshPort;

        return $this;
    }

    public function getIpRestriction(): ?int
    {
        return $this->ipRestriction;
    }

    public function setIpRestriction(int $ipRestriction): self
    {
        $this->ipRestriction = $ipRestriction;

        return $this;
    }
}
