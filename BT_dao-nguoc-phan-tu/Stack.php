<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 5)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isEmpty()
    {
        return count($this->stack) <= 0;
    }

    public function isFull()
    {
        return count($this->stack) >= $this->limit;
    }

    public function push($item)
    {
        if (!$this->isFull()) {
            array_unshift($this->stack,$item);
        } else {
            echo "Stack is full";
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_shift($this->stack);
        } else {
            echo "Stack is empty";
        }
    }

    public function disPLay()
    {
        for ($i = 0; $i < count($this->stack);$i++) {
            echo $this->stack[$i] . " ";
        }
    }
}