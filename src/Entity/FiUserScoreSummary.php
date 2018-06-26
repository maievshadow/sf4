<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiUserScoreSummary
 *
 * @ORM\Table(name="fi_user_score_summary")
 * @ORM\Entity
 */
class FiUserScoreSummary
{
    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="integer", nullable=false, options={"comment"="用户uid"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_obtain_score", type="integer", nullable=true, options={"comment"="用户累计获得积分总数"})
     */
    private $totalObtainScore = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_consume_score", type="integer", nullable=true, options={"comment"="用户累计消耗积分总数"})
     */
    private $totalConsumeScore = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_surplus_count", type="integer", nullable=true, options={"comment"="剩余积分总数(当前积分)"})
     */
    private $totalSurplusCount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_sign_time", type="integer", nullable=true, options={"comment"="最后签到时间"})
     */
    private $lastSignTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sign_or_not", type="smallint", nullable=true, options={"comment"="今日是否签到"})
     */
    private $signOrNot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_order_time", type="integer", nullable=true, options={"comment"="最后投资时间"})
     */
    private $lastOrderTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="update_time", type="integer", nullable=true, options={"comment"="更新时间"})
     */
    private $updateTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="version", type="integer", nullable=true, options={"comment"="乐观锁"})
     */
    private $version;

    public function getUid(): ?int
    {
        return $this->uid;
    }

    public function getTotalObtainScore(): ?int
    {
        return $this->totalObtainScore;
    }

    public function setTotalObtainScore(?int $totalObtainScore): self
    {
        $this->totalObtainScore = $totalObtainScore;

        return $this;
    }

    public function getTotalConsumeScore(): ?int
    {
        return $this->totalConsumeScore;
    }

    public function setTotalConsumeScore(?int $totalConsumeScore): self
    {
        $this->totalConsumeScore = $totalConsumeScore;

        return $this;
    }

    public function getTotalSurplusCount(): ?int
    {
        return $this->totalSurplusCount;
    }

    public function setTotalSurplusCount(?int $totalSurplusCount): self
    {
        $this->totalSurplusCount = $totalSurplusCount;

        return $this;
    }

    public function getLastSignTime(): ?int
    {
        return $this->lastSignTime;
    }

    public function setLastSignTime(?int $lastSignTime): self
    {
        $this->lastSignTime = $lastSignTime;

        return $this;
    }

    public function getSignOrNot(): ?int
    {
        return $this->signOrNot;
    }

    public function setSignOrNot(?int $signOrNot): self
    {
        $this->signOrNot = $signOrNot;

        return $this;
    }

    public function getLastOrderTime(): ?int
    {
        return $this->lastOrderTime;
    }

    public function setLastOrderTime(?int $lastOrderTime): self
    {
        $this->lastOrderTime = $lastOrderTime;

        return $this;
    }

    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    public function setUpdateTime(?int $updateTime): self
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function setVersion(?int $version): self
    {
        $this->version = $version;

        return $this;
    }


}
