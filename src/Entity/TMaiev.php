<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMaiev
 *
 * @ORM\Table(name="t_maiev", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class TMaiev
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xx", type="text", length=65535, nullable=true)
     */
    private $xx;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function setUid(?int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getXx(): ?string
    {
        return $this->xx;
    }

    public function setXx(?string $xx): self
    {
        $this->xx = $xx;

        return $this;
    }


}
