<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use BlackBoxCode\Pando\Bundle\NoteBundle\Model\NoteTypeInterface as NoteBundleNoteTypeInterface;

interface NoteTypeInterface extends NoteBundleNoteTypeInterface
{
    const EMPLOYEE = 'Employee';
}
