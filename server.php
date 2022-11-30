<?php
$tasks_string = file_get_contents('tasks.json');
$tasks = json_decode($tasks_string, true);
if (isset($_POST['newTask'])) {
    array_push($tasks, [
        'title' => $_POST['newTask'],
        'completed' => false
    ]);
}
if (isset($_POST['isCurrentCompleted'])) {
    $is_current_completed = $_POST['isCurrentCompleted'];
    $tasks[$is_current_completed['index']]['completed'] =  $is_current_completed['completed'] === 'true' ? true : false;
}
if (isset($_POST['taskIndex'])) {
    unset($tasks[$_POST['taskIndex']]);
}
$tasks_string = json_encode($tasks);
file_put_contents('tasks.json', $tasks_string);


//var_dump($tasks);
header('Content-Type: application/json');
echo json_encode($tasks);
