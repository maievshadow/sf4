<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T1
 *
 * @ORM\Table(name="t1")
 * @ORM\Entity
 */
class T1
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var int|null
     *
     * @ORM\Column(name="month", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $month;

    /**
     * @var int|null
     *
     * @ORM\Column(name="day", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $day;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYear(): ?\DateTimeInterface
    {
        return $this->year;
    }

    public function setYear(?\DateTimeInterface $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setMonth(?int $month): self
    {
        $this->month = $month;

        return $this;
    }

    public function getDay(): ?int
    {
        return $this->day;
    }

    public function setDay(?int $day): self
    {
        $this->day = $day;

        return $this;
    }


}
