<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiLotteryUserSource
 *
 * @ORM\Table(name="fi_lottery_user_source", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class FiLotteryUserSource
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
     * @ORM\Column(name="uid", type="integer", nullable=true, options={"comment"="用户id"})
     */
    private $uid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="obj_id", type="integer", nullable=true, options={"comment"="根据类型来源不同意义不同"})
     */
    private $objId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ctime", type="integer", nullable=true, options={"comment"="创建时间"})
     */
    private $ctime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true, options={"comment"="来源1-订单"})
     */
    private $type;

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

    public function getCtime(): ?int
    {
        return $this->ctime;
    }

    public function setCtime(?int $ctime): self
    {
        $this->ctime = $ctime;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }


}
