<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type:application/json');


    include_once'../../config/Database.php';
    include_once '../../models/allocate-task.php';


    $database = new Database();
    $db = $database->connect();

    $allocate_task = new allocate_task();
    $result = $post->allocate_task();
    $num = $result->rowCount();
    $payload= $result->columnCount();

    echo json_encode(
        array('message' => 'Nothing' )
    );


