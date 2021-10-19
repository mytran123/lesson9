<?php

class Queue
{
    private $font = null;
    private $back = null;

    public function dequeue()
    {

    }

    public function toString()
    {
        return $this->name . " " . $this->code;
    }
}