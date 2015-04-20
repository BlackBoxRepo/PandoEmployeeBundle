<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

interface NoteInterface extends \BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteInterface
{
    /**
     * @return EmployeeInterface
     */
    public function getEmployee();

    /**
     * @param EmployeeInterface $employees
     * @return $this
     */
    public function setEmployee(EmployeeInterface $employees);
}
