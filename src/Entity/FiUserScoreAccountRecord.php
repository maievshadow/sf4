<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiUserScoreAccountRecord
 *
 * @ORM\Table(name="fi_user_score_account_record")
 * @ORM\Entity
 */
class FiUserScoreAccountRecord
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
     * @ORM\Column(name="uid", type="integer", nullable=true, options={"comment"="用户"})
     */
    private $uid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="obj_id", type="integer", nullable=true, options={"comment"="积分获取id/兑换id"})
     */
    private $objId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="in_or_out", type="boolean", nullable=true, options={"comment"="1:积分获取;2:积分兑换"})
     */
    private $inOrOut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="change_score", type="integer", nullable=true, options={"comment"="积分变化数量"})
     */
    private $changeScore;

    /**
     * @var int|null
     *
     * @ORM\Column(name="from_score", type="integer", nullable=true, options={"comment"="变化前积分数量"})
     */
    private $fromScore;

    /**
     * @var int|null
     *
     * @ORM\Column(name="to_score", type="integer", nullable=true, options={"comment"="变化后积分数量"})
     */
    private $toScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adec", type="string", length=300, nullable=true, options={"comment"="描述"})
     */
    private $adec;

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

    public function getObjId(): ?int
    {
        return $this->objId;
    }

    public function setObjId(?int $objId): self
    {
        $this->objId = $objId;

        return $this;
    }

    public function getInOrOut(): ?bool
    {
        return $this->inOrOut;
    }

    public function setInOrOut(?bool $inOrOut): self
    {
        $this->inOrOut = $inOrOut;

        return $this;
    }

    public function getChangeScore(): ?int
    {
        return $this->changeScore;
    }

    public function setChangeScore(?int $changeScore): self
    {
        $this->changeScore = $changeScore;

        return $this;
    }

    public function getFromScore(): ?int
    {
        return $this->fromScore;
    }

    public function setFromScore(?int $fromScore): self
    {
        $this->fromScore = $fromScore;

        return $this;
    }

    public function getToScore(): ?int
    {
        return $this->toScore;
    }

    public function setToScore(?int $toScore): self
    {
        $this->toScore = $toScore;

        return $this;
    }

    public function getAdec(): ?string
    {
        return $this->adec;
    }

    public function setAdec(?string $adec): self
    {
        $this->adec = $adec;

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
