<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type:application/json');


    include_once'../../config/Database.php';
    include_once '../../models/all.php';


    $database = new Database();
    $db = $database->connect();

    $all = new all();
    $result = $post->all();
    $num = $result->rowCount();

    echo json_encode(
        array('message' => 'Nothing' )
    );


