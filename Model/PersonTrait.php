<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait PersonTrait
{
    /**
     * @ORM\OneToOne(targetEntity="Employee", mappedBy="person")
     */
    private $employee;
}
