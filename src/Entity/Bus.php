<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 *
 * @ORM\Entity()
 */
class Bus extends Vehicle
{
    /**
     * @var int
     */
    public $id;
}
