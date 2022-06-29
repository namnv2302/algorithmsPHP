<?php
class Queue
{
    private $queue = [];
clear
    public function add($value): void
    {
        array_unshift($this->queue, $value);
        echo $value . " da duoc them \n";
    }

    public function remove()
    {
        return array_pop($this->queue);
    }
}

$Queue = new Queue();

$Queue->add(10);
$Queue->add(20);
$Queue->remove();

