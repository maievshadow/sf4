<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity
 */
class Shop
{
    /**
     * @var int
     *
     * @ORM\Column(name="article", type="integer", nullable=false, options={"default"="0000","unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $article = '0000';

    /**
     * @var string
     *
     * @ORM\Column(name="dealer", type="string", length=20, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dealer = '';

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=16, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $price = '0.00';

    public function getArticle(): ?int
    {
        return $this->article;
    }

    public function getDealer(): ?string
    {
        return $this->dealer;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }


}
