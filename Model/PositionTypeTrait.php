<?php
namespace BlackBoxCode\Pando\EmployeeBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait PositionTypeTrait
{
    use TypeTrait;
}
