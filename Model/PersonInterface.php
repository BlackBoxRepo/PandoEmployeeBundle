<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

interface PersonInterface extends \BlackBoxCode\Pando\Bundle\PersonBundle\Model\PersonInterface
{
    /**
     * @return EmployeeInterface
     */
    public function getEmployee();

    /**
     * @param EmployeeInterface $employee
     * @return $this
     */
    public function setEmployee(EmployeeInterface $employee);
}
