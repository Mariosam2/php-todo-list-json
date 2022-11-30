<?php
$task_string = file_get_contents('tasks.json');
$tasks = json_decode($task_string, true);
if (isset($_POST['newTask'])) {
    array_push($tasks, [
        'title' => $_POST['newTask'],
        'completed' => false
    ]);
    $task_string = json_encode($tasks);
    file_put_contents('tasks.json', $task_string);
    header('Location: index.php');
}
//var_dump($tasks);
header('Content-Type: application/json');
echo $task_string;
