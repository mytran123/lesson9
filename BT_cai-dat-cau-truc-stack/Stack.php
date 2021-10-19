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

    public function push($item) //thêm vào đầu
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack,$item);
        } else {
            echo "Stack is full";
        }
    }

    public function pop() //lấy ở đầu
    {
//        if ($this->isEmpty()) {
//            echo "Stack is empty";
//        } else {
//            return array_shift($this->stack);
//        }
        $this->isEmpty();
        array_shift($this->stack);
    }

    public function top() //hiển thị phần tử trên cùng
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
//        return empty($this->stack);

        if (empty($this->stack)) {
            echo "Stack is empty";
//        return count($this->stack) <= 0;
        }
    }
}