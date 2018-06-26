<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiIntegralRecord
 *
 * @ORM\Table(name="fi_integral_record", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class FiIntegralRecord
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
     * @ORM\Column(name="source", type="integer", nullable=true, options={"comment"="来源,1-签到，2-投资，3-邀请好友，4-注册"})
     */
    private $source;

    /**
     * @var int|null
     *
     * @ORM\Column(name="integral", type="integer", nullable=true, options={"comment"="积分数"})
     */
    private $integral;

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

    public function getSource(): ?int
    {
        return $this->source;
    }

    public function setSource(?int $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getIntegral(): ?int
    {
        return $this->integral;
    }

    public function setIntegral(?int $integral): self
    {
        $this->integral = $integral;

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
