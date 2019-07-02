<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 *
 * @ORM\Entity()
 */
class Tire
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @var Vehicle
     *
     * @ORM\ManyToOne(targetEntity="Vehicle", inversedBy="tires")
     */
    public $vehicle;
}
