<?php

class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
}