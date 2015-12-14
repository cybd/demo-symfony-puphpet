<?php
/**
 * Created by PhpStorm.
 * User: sergeimatros
 * Date: 12/14/15
 * Time: 2:25 PM
 */

namespace AppBundle\Entity;


class Task
{
    protected $task;
    protected $dueDate;

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     */
    public function setTask($task)
    {
        $this->task = $task;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }
}