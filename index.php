<?php
include_once 'class/MyStack.php';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$stack = new Stack(count($arr));

while (!empty($arr)) {
    $stack->push(array_shift($arr));
}

for ($i = 0; $i < count($arr); $i++) {
    array_push($arr, $stack->pop());
}

print_r($arr);