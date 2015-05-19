<?php
namespace BlackBoxCode\Pando\EmployeeBundle\Model;

interface PersonInterface extends \BlackBoxCode\Pando\PersonBundle\Model\PersonInterface
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
