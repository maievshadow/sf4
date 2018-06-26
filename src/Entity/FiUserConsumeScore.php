<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiUserConsumeScore
 *
 * @ORM\Table(name="fi_user_consume_score")
 * @ORM\Entity
 */
class FiUserConsumeScore
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"comment"="id,自增长"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uid", type="integer", nullable=true, options={"comment"="兑换用户"})
     */
    private $uid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="consume_score", type="integer", nullable=true, options={"comment"="消耗积分数量"})
     */
    private $consumeScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="award_name", type="string", length=100, nullable=true, options={"comment"="兑换奖品名称"})
     */
    private $awardName;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type", type="boolean", nullable=true, options={"comment"="奖品类型，1：红包;2:满减卷；3：实物；等等"})
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remark", type="string", length=128, nullable=true, options={"fixed"=true,"comment"="备注"})
     */
    private $remark;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true, options={"comment"="创建时间"})
     */
    private $ctime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mtime", type="integer", nullable=true, options={"comment"="修改时间"})
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

    public function getConsumeScore(): ?int
    {
        return $this->consumeScore;
    }

    public function setConsumeScore(?int $consumeScore): self
    {
        $this->consumeScore = $consumeScore;

        return $this;
    }

    public function getAwardName(): ?string
    {
        return $this->awardName;
    }

    public function setAwardName(?string $awardName): self
    {
        $this->awardName = $awardName;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(?bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;

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
