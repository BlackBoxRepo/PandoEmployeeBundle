<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    /**
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="notes")
     */
    private $employee;
}
