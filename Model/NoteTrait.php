<?php
namespace BlackBoxCode\Pando\EmployeeBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    /**
     * @var ArrayCollection<EmployeeInterface>
     *
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="notes")
     */
    private $employees;

    /**
     * {@inheritdoc}
     */
    public function getEmployee()
    {
        if (is_null($this->employees)) $this->employees = new ArrayCollection();
        
        return $this->employees->first() ?: null;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setEmployee(EmployeeInterface $employees)
    {
        if (is_null($this->employees)) $this->employees = new ArrayCollection();
        $this->employees->clear();
        $this->employees->add($employees);
        
        return $this;
    }
}
