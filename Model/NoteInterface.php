<?php
namespace BlackBoxCode\Pando\EmployeeBundle\Model;

interface NoteInterface extends \BlackBoxCode\Pando\NoteBundle\Model\NoteInterface
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
