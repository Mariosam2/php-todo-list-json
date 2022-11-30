<?php
$task_string = file_get_contents('tasks.json');
$tasks = json_decode($task_string, true);
//var_dump($tasks);
header('Content-Type: application/json');
echo $task_string;
