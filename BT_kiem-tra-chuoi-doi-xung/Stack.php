<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

    public function isEmpty()
    {
        return count($this->stack) <= 0;
    }

    public function push($data)
    {
        array_push($this->stack,$data);
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_shift($this->stack);
        } else {
            echo "Stack is Empty";
        }
    }
}