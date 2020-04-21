<?php


class MyStack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($element)
    {
        if (count($this->stack) <= $this->limit) {
            array_push($this->stack, $element);
        } else {
            throw new RuntimeException("Full Stack");
        }
    }

    public function pop()
    {
        if ($this->is_Empty()) {
            throw new RuntimeException('Empty Stack');
        } else {
            return array_pop($this->stack);
        }

    }

    public function is_Empty()
    {
        return empty($this->stack);
    }
}