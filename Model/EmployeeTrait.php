<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

trait EmployeeTrait
{
    use IdTrait;

    /**
     * @var ArrayCollection<EmployeeInterface>
     *
     * @ORM\ManyToMany(targetEntity="Employee", inversedBy="children")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(name="parent_id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="child_id", nullable=false)}
     * )
     */
    private $parents;

    /**
     * @var ArrayCollection<EmployeeInterface>
     *
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="parents")
     */
    private $children;

    /**
     * @var PersonInterface
     *
     * @ORM\OneToOne(targetEntity="Person", inversedBy="employee")
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private $person;

    /**
     * @var PositionTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="PositionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $position;

    /**
     * @var ArrayCollection<NoteInterface>
     *
     * @ORM\ManyToMany(targetEntity="Note", inversedBy="employees")
     * @ORM\JoinTable(
     *     joinColumns={@ORM\JoinColumn(nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(nullable=false, unique=true)}
     * )
     */
    private $notes;


    /**
     * {@inheritdoc}
     */
    public function getParents()
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();

        return $this->parents;
    }

    /**
     * {@inheritdoc}
     */
    public function addParent(EmployeeInterface $parent)
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();
        $this->parents->add($parent);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeParent(EmployeeInterface $parent)
    {
        if (is_null($this->parents)) $this->parents = new ArrayCollection();
        $this->parents->removeElement($parent);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();

        return $this->children;
    }

    /**
     * {@inheritdoc}
     */
    public function addChild(EmployeeInterface $child)
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();
        $this->children->add($child);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild(EmployeeInterface $child)
    {
        if (is_null($this->children)) $this->children = new ArrayCollection();
        $this->children->removeElement($child);
    }

    /**
     * {@inheritdoc}
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * {@inheritdoc}
     */
    public function setPerson(PersonInterface $person)
    {
        $this->person = $person;

        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return $this->position;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPosition(PositionTypeInterface $position)
    {
        $this->position = $position;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotes()
    {
        if (is_null($this->notes)) $this->notes = new ArrayCollection();

        return $this->notes;
    }

    /**
     * {@inheritdoc}
     */
    public function addNote(NoteInterface $note)
    {
        if (is_null($this->notes)) $this->notes = new ArrayCollection();
        $this->notes->add($note);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeNote(NoteInterface $note)
    {
        if (is_null($this->notes)) $this->notes = new ArrayCollection();
        $this->notes->removeElement($note);
    }
}
