<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $demande_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $offer_id;

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

    public function getDemandeId(): ?int
    {
        return $this->demande_id;
    }

    public function setDemandeId(int $demande_id): self
    {
        $this->demande_id = $demande_id;

        return $this;
    }

    public function getOfferId(): ?int
    {
        return $this->offer_id;
    }

    public function setOfferId(int $offer_id): self
    {
        $this->offer_id = $offer_id;

        return $this;
    }
}
