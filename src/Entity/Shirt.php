<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shirt
 *
 * @ORM\Table(name="shirt", indexes={@ORM\Index(name="style_color", columns={"color", "style"}), @ORM\Index(name="xx", columns={"owner"})})
 * @ORM\Entity
 */
class Shirt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=0, nullable=false)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=0, nullable=false)
     */
    private $color;

    /**
     * @var int
     *
     * @ORM\Column(name="owner", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getOwner(): ?int
    {
        return $this->owner;
    }

    public function setOwner(int $owner): self
    {
        $this->owner = $owner;

        return $this;
    }


}
