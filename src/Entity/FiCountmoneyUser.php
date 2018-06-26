<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiCountmoneyUser
 *
 * @ORM\Table(name="fi_countmoney_user", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class FiCountmoneyUser
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
     * @var int|null
     *
     * @ORM\Column(name="count_num", type="integer", nullable=true, options={"comment"="数钱次数"})
     */
    private $countNum = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_money", type="decimal", precision=20, scale=0, nullable=true, options={"comment"="数钱金额总数 (分单位)"})
     */
    private $totalMoney = '0';

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

    public function getCountNum(): ?int
    {
        return $this->countNum;
    }

    public function setCountNum(?int $countNum): self
    {
        $this->countNum = $countNum;

        return $this;
    }

    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

    public function setTotalMoney($totalMoney): self
    {
        $this->totalMoney = $totalMoney;

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
