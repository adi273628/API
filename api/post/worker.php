<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type:application/json');


    include_once'../../config/Database.php';
    include_once '../../models/worker.php';


    $database = new Database();
    $db = $database->connect();

    $worker = new worker();
    $result = $post->worker();
    $num = $result->rowCount();

    echo json_encode(
        array('message' => 'Nothing' )
    );


