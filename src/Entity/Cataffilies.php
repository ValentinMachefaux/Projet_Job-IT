<?php

namespace App\Entity;

use App\Repository\CataffiliesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CataffiliesRepository::class)
 */
class Cataffilies
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $catId;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $affiliesId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatId(): ?int
    {
        return $this->catId;
    }

    public function setCatId(int $catId): self
    {
        $this->catId = $catId;

        return $this;
    }

    public function getAffiliesId(): ?int
    {
        return $this->affiliesId;
    }

    public function setAffiliesId(int $affiliesId): self
    {
        $this->affiliesId = $affiliesId;

        return $this;
    }
}
