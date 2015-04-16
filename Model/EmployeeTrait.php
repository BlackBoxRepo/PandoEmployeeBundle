<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait EmployeeTrait
{
    use BaseTrait;

    /**
     * @ORM\ManyToMany(targetEntity="Employee", inversedBy="children")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="parent_id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="child_id", nullable=false)}
     * )
     */
    private $parents;

    /**
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="parents")
     */
    private $children;

    /**
     * @ORM\OneToOne(targetEntity="Person", inversedBy="employee")
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="PositionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $position;

    /**
     * @ORM\ManyToMany(targetEntity="Note", inversedBy="employee")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $notes;
}
