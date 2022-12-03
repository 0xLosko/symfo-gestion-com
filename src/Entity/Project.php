<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    private ?string $lastPassFolder = null;

    #[ORM\Column(length: 255)]
    private ?string $linkMockUps = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $notes = null;

    #[ORM\OneToMany(mappedBy: 'project', targetEntity: Environment::class)]
    private Collection $environments;

    public function __construct()
    {
        $this->environments = new ArrayCollection();
    }

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLastPassFolder(): ?string
    {
        return $this->lastPassFolder;
    }

    public function setLastPassFolder(string $lastPassFolder): self
    {
        $this->lastPassFolder = $lastPassFolder;

        return $this;
    }

    public function getLinkMockUps(): ?string
    {
        return $this->linkMockUps;
    }

    public function setLinkMockUps(string $linkMockUps): self
    {
        $this->linkMockUps = $linkMockUps;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return Collection<int, Environment>
     */
    public function getEnvironments(): Collection
    {
        return $this->environments;
    }

    public function addEnvironment(Environment $environment): self
    {
        if (!$this->environments->contains($environment)) {
            $this->environments->add($environment);
            $environment->setProject($this);
        }

        return $this;
    }

    public function removeEnvironment(Environment $environment): self
    {
        if ($this->environments->removeElement($environment)) {
            // set the owning side to null (unless already changed)
            if ($environment->getProject() === $this) {
                $environment->setProject(null);
            }
        }

        return $this;
    }
}
