<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivityInterface
 *
 * @ORM\Table(name="activity_interface")
 * @ORM\Entity
 */
class ActivityInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }


}
