<?php

namespace App\Entity;

use App\Repository\AffiliesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AffiliesRepository::class)
 */
class Affilies
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @ORM\ManyToMany(targetEntity=Categories::class, inversedBy="Affilies")
     */
    private $catId;

    public function __construct()
    {
        $this->catId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $create): self
    {
        $this->created = $create;

        return $this;
    }

    /**
     * @return Collection|categories[]
     */
    public function getCatId(): Collection
    {
        return $this->catId;
    }

    public function addCatId(categories $catId): self
    {
        if (!$this->catId->contains($catId)) {
            $this->catId[] = $catId;
        }

        return $this;
    }

    public function removeCatId(categories $catId): self
    {
        $this->catId->removeElement($catId);

        return $this;
    }
}
