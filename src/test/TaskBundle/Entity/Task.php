<?php
// src/Test/TaskBundle/Entity/Task.php

namespace Test\TaskBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\Email;

class Task
{
    protected  $task;
    protected  $dueDate;
    protected  $assignTo;
    protected  $availablity;
    protected  $email;

    public function getTask(){
        return $this->task;
    }

    public function setTask($task){
        $this->task = $task;
    }

    public function getDuedate(){
        return $this->dueDate;
    }

    public function setDuedate(\DateTime $date = null){
        $this->dueDate = $date;
    }

    public function setAssignTo($assignTo){
        $this->assignTo = $assignTo;
    }

    public function getAssignTo(){
        return $this->assignTo;
    }

    public function setAvailablity($availablity){
        $this->availablity = $availablity;
    }

    public function getAvailablity(){
        return $this->availablity;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }



    public static function loadValidatorMetadata(ClassMetaData $metadata){
        $metadata->addPropertyConstraint('task',        new NotBlank());
        $metadata->addPropertyConstraint('task',        new MinLength(5));
        $metadata->addPropertyConstraint('dueDate',     new NotBlank());
        $metadata->addPropertyConstraint('dueDate',     new Type('\DateTime'));
        $metadata->addPropertyConstraint('assignTo',    new NotBlank());
        $metadata->addPropertyConstraint('availablity', new NotBlank());
        $metadata->addPropertyConstraint('email',       new NotBlank());
        $metadata->addPropertyConstraint('email',       new Email());
    }
}