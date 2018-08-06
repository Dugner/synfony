<?php

namespace App\Entity\Project;

class Project
{
    private $id;

    private $title;

    private $dateOfCreation;

    private $worker;

    private $responsible;

    private $listTasks;

    private $position;

    public function __construct(
        $id,
        string $title,
        $worker,
        string $responsible,
        string $listTasks,
        string $position
    )
    {
       $this->dateOfCreation = new \DateTime();


       $this->id = $id;
       $this->title = $title;
       $this->worker = $worker;
       $this->responsible = $responsible;
       $this->listTasks = $listTasks;
       $this->position = $position; 
    }

    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of dateOfCreation
     */ 
    public function getDateOfCreation()
    {
        return $this->dateOfCreation;
    }

    /**
     * Set the value of dateOfCreation
     *
     * @return  self
     */ 
    public function setDateOfCreation($dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;

        return $this;
    }

    /**
     * Get the value of worker
     */ 
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * Set the value of worker
     *
     * @return  self
     */ 
    public function setWorker($worker)
    {
        $this->worker = $worker;

        return $this;
    }

    /**
     * Get the value of responsible
     */ 
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Set the value of responsible
     *
     * @return  self
     */ 
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get the value of listTasks
     */ 
    public function getListTasks()
    {
        return $this->listTasks;
    }

    /**
     * Set the value of listTasks
     *
     * @return  self
     */ 
    public function setListTasks($listTasks)
    {
        $this->listTasks = $listTasks;

        return $this;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
}