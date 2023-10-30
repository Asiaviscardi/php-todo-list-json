<?php
$data = json_decode(file_get_contents('php://input'));
if ($data !== null) {
  file_put_contents('todos.json', json_encode($data->todos));
  echo 'Data saved successfully';
} else {
  echo 'Invalid data';
}