<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiLotteryUserSummaryEcsrow
 *
 * @ORM\Table(name="fi_lottery_user_summary_ecsrow")
 * @ORM\Entity
 */
class FiLotteryUserSummaryEcsrow
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false, options={"comment"="用户id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="total_count", type="integer", nullable=false, options={"comment"="总抽次数"})
     */
    private $totalCount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="consume_count", type="integer", nullable=true, options={"comment"="已抽次数"})
     */
    private $consumeCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="surplus_count", type="integer", nullable=true, options={"comment"="剩余次数"})
     */
    private $surplusCount = '0';

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

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getConsumeCount(): ?int
    {
        return $this->consumeCount;
    }

    public function setConsumeCount(?int $consumeCount): self
    {
        $this->consumeCount = $consumeCount;

        return $this;
    }

    public function getSurplusCount(): ?int
    {
        return $this->surplusCount;
    }

    public function setSurplusCount(?int $surplusCount): self
    {
        $this->surplusCount = $surplusCount;

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
