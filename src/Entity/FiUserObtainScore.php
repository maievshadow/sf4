<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiUserObtainScore
 *
 * @ORM\Table(name="fi_user_obtain_score")
 * @ORM\Entity
 */
class FiUserObtainScore
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
     * @ORM\Column(name="prj_id", type="integer", nullable=true, options={"comment"="项目id"})
     */
    private $prjId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_id", type="integer", nullable=true, options={"comment"="订单id"})
     */
    private $orderId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uid", type="integer", nullable=true, options={"comment"="邀请人或投资用户"})
     */
    private $uid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rec_uid", type="integer", nullable=true, options={"comment"="被邀请用户"})
     */
    private $recUid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="money", type="decimal", precision=20, scale=0, nullable=true, options={"comment"="投资金额"})
     */
    private $money;

    /**
     * @var int|null
     *
     * @ORM\Column(name="time_limit_day", type="integer", nullable=true, options={"comment"="投资期限"})
     */
    private $timeLimitDay;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deal_time", type="integer", nullable=true, options={"comment"="签到/投资等行为发生时间"})
     */
    private $dealTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="score", type="integer", nullable=true, options={"comment"="获得积分数量"})
     */
    private $score;

    /**
     * @var int|null
     *
     * @ORM\Column(name="source", type="integer", nullable=true, options={"comment"="积分来源：1=邀请；2=投资；3=兑换;4、正常签到；5=补签；6=代签；7=连续签到；等等"})
     */
    private $source;

    /**
     * @var int|null
     *
     * @ORM\Column(name="source1", type="integer", nullable=true, options={"comment"="积分来源：1；等等"})
     */
    private $source1;

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

    public function getPrjId(): ?int
    {
        return $this->prjId;
    }

    public function setPrjId(?int $prjId): self
    {
        $this->prjId = $prjId;

        return $this;
    }

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
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

    public function getRecUid(): ?int
    {
        return $this->recUid;
    }

    public function setRecUid(?int $recUid): self
    {
        $this->recUid = $recUid;

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

    public function getTimeLimitDay(): ?int
    {
        return $this->timeLimitDay;
    }

    public function setTimeLimitDay(?int $timeLimitDay): self
    {
        $this->timeLimitDay = $timeLimitDay;

        return $this;
    }

    public function getDealTime(): ?int
    {
        return $this->dealTime;
    }

    public function setDealTime(?int $dealTime): self
    {
        $this->dealTime = $dealTime;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): self
    {
        $this->score = $score;

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

    public function getSource1(): ?int
    {
        return $this->source1;
    }

    public function setSource1(?int $source1): self
    {
        $this->source1 = $source1;

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
