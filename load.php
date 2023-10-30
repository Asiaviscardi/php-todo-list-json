<?php
$data = file_get_contents('todos.json');
header('Content-Type: application/json');
echo $data;
?>