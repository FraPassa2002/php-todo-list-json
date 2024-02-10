<?php

$todosJSON = file_get_contents('db/todos.json');

header('content-type: application/json');

if (isset($_GET['used'])) {
    $todosArray = json_decode($todosJSON, true);


    for ($i = 0; $i < count($todosArray); $i++) { 
        $todosArray[$i]['used'] = rand(0, 50);
    }
    
    echo json_encode($todosArray);
}
else {
    echo $todosJSON;
}
 