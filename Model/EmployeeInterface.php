<?php
namespace BlackBoxCode\Pando\Bundle\EmployeeBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use Doctrine\Common\Collections\ArrayCollection;

interface EmployeeInterface extends IdInterface
{
    /**
     * @return ArrayCollection<EmployeeInterface>
     */
    public function getParents();

    /**
     * @param EmployeeInterface $parent
     * @return $this
     */
    public function addParent(EmployeeInterface $parent);

    /**
     * @param EmployeeInterface $parent
     */
    public function removeParent(EmployeeInterface $parent);

    /**
     * @return ArrayCollection<EmployeeInterface>
     */
    public function getChildren();

    /**
     * @param EmployeeInterface $child
     * @return $this
     */
    public function addChild(EmployeeInterface $child);

    /**
     * @param EmployeeInterface $child
     */
    public function removeChild(EmployeeInterface $child);

    /**
     * @return PersonInterface
     */
    public function getPerson();

    /**
     * @param PersonInterface $person
     * @return $this
     */
    public function setPerson(PersonInterface $person);

    /**
     * @return PositionTypeInterface
     */
    public function getPosition();

    /**
     * @param PositionTypeInterface $position
     * @return $this
     */
    public function setPosition(PositionTypeInterface $position);

    /**
     * @return ArrayCollection<NoteInterface>
     */
    public function getNotes();

    /**
     * @param NoteInterface $note
     * @return $this
     */
    public function addNote(NoteInterface $note);

    /**
     * @param NoteInterface $note
     */
    public function removeNote(NoteInterface $note);
}
