<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiCountmoneyRecord
 *
 * @ORM\Table(name="fi_countmoney_record", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class FiCountmoneyRecord
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
     * @var int|null
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="money", type="decimal", precision=20, scale=0, nullable=true, options={"comment"="数钱金额（分单位）"})
     */
    private $money = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc", type="string", length=500, nullable=true, options={"comment"="描述"})
     */
    private $desc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true)
     */
    private $ctime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mtime", type="integer", nullable=true)
     */
    private $mtime;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMoney()
    {
        return $this->money;
    }

    public function setMoney($money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getCtime(): ?int
    {
        return $this->ctime;
    }

    public function setCtime(?int $ctime): self
    {
        $this->ctime = $ctime;

        return $this;
    }

    public function getMtime(): ?int
    {
        return $this->mtime;
    }

    public function setMtime(?int $mtime): self
    {
        $this->mtime = $mtime;

        return $this;
    }


}
