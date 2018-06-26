<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiLotteryAwardEscrow
 *
 * @ORM\Table(name="fi_lottery_award_escrow")
 * @ORM\Entity
 */
class FiLotteryAwardEscrow
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
     * @var string
     *
     * @ORM\Column(name="award_name", type="string", length=11, nullable=false, options={"comment"="获得奖品名称"})
     */
    private $awardName = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="percent", type="boolean", nullable=false, options={"comment"="概率"})
     */
    private $percent;

    /**
     * @var int
     *
     * @ORM\Column(name="ctime", type="integer", nullable=false, options={"comment"="创建时间"})
     */
    private $ctime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAwardName(): ?string
    {
        return $this->awardName;
    }

    public function setAwardName(string $awardName): self
    {
        $this->awardName = $awardName;

        return $this;
    }

    public function getPercent(): ?bool
    {
        return $this->percent;
    }

    public function setPercent(bool $percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    public function getCtime(): ?int
    {
        return $this->ctime;
    }

    public function setCtime(int $ctime): self
    {
        $this->ctime = $ctime;

        return $this;
    }


}
