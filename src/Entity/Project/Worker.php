<?php
namespace App\Entity\Project;

class Worker
{
    private $id;
    
    private $name;

    private $position;

    public function __construct(int $id, string $name, string $position)
    {
        $this->id = $id;
        $this->name = $name;
        $this->position = $position;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getPosition()
    {
        return $this->position;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
}