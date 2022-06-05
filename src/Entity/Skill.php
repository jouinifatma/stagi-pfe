<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillRepository::class)
 */
class Skill
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $langage = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $experience = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $interest_center = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $tech_knew = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $pro_tr = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangage(): ?array
    {
        return $this->langage;
    }

    public function setLangage(?array $langage): self
    {
        $this->langage = $langage;

        return $this;
    }

    public function getExperience(): ?array
    {
        return $this->experience;
    }

    public function setExperience(?array $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getInterestCenter(): ?array
    {
        return $this->interest_center;
    }

    public function setInterestCenter(?array $interest_center): self
    {
        $this->interest_center = $interest_center;

        return $this;
    }

    public function getTechKnew(): ?array
    {
        return $this->tech_knew;
    }

    public function setTechKnew(?array $tech_knew): self
    {
        $this->tech_knew = $tech_knew;

        return $this;
    }

    public function getProTr(): ?array
    {
        return $this->pro_tr;
    }

    public function setProTr(?array $pro_tr): self
    {
        $this->pro_tr = $pro_tr;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
