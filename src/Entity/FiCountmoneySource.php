<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiCountmoneySource
 *
 * @ORM\Table(name="fi_countmoney_source", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class FiCountmoneySource
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
     * @var bool|null
     *
     * @ORM\Column(name="source", type="boolean", nullable=true, options={"comment"="来源,1-投资，2-邀请好友"})
     */
    private $source;

    /**
     * @var int|null
     *
     * @ORM\Column(name="obj_id", type="integer", nullable=true, options={"comment"="根据来源 不同意义 ／投资订单或者好友id"})
     */
    private $objId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nums", type="integer", nullable=true, options={"default"="1","comment"="次数"})
     */
    private $nums = '1';

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

    public function getSource(): ?bool
    {
        return $this->source;
    }

    public function setSource(?bool $source): self
    {
        $this->source = $source;

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

    public function getNums(): ?int
    {
        return $this->nums;
    }

    public function setNums(?int $nums): self
    {
        $this->nums = $nums;

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
