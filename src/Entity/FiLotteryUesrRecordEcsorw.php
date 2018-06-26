<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiLotteryUesrRecordEcsorw
 *
 * @ORM\Table(name="fi_lottery_uesr_record_ecsorw")
 * @ORM\Entity
 */
class FiLotteryUesrRecordEcsorw
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true,"comment"="id,主键"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false, options={"comment"="用户id"})
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="lottery_id", type="integer", nullable=false, options={"comment"="奖品id"})
     */
    private $lotteryId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true, options={"comment"="更新时间"})
     */
    private $ctime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mtime", type="integer", nullable=true, options={"comment"="更新时间"})
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

    public function setUid(int $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getLotteryId(): ?int
    {
        return $this->lotteryId;
    }

    public function setLotteryId(int $lotteryId): self
    {
        $this->lotteryId = $lotteryId;

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
