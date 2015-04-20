<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

trait PersonTrait
{
    /**
     * @var EmployeeInterface
     *
     * @ORM\OneToOne(targetEntity="Employee", mappedBy="person")
     */
    private $employee;

    
    /**
     * {@inheritdoc}
     */
    public function getEmployee()
    {
        return $this->employee;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setEmployee(EmployeeInterface $employee)
    {
        $this->employee = $employee;
        
        return $this;
    }
}
