<?php
include_once "Node.php";
include_once "Queue.php";

$queue = new Queue();
//$queue->enqueue(2);
//$queue->enqueue(4);
//$queue->enqueue(6);
//$queue->dequeue();
//$queue->dequeue();
//$queue->isEmpty();
//
//echo "<pre>";
//print_r($queue);
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("End");
while(!$queue->isEmpty()){
    echo $queue->dequeue()."\n";
}