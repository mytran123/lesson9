<?php

class Queue
{
    public $queue;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function isFull()
    {
        return count($this->queue) >= $this->limit;
    }

    public function isEmpty()
    {
        return count($this->queue) <= 0;
    }

    public function enqueue($data)
    {
        array_push($this->queue,$data);
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        } else {
            echo "Queue is Empty";
        }
    }
}