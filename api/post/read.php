<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type:application/json');


    include_once'../../config/Database.php';
    include_once '../../models/Post.php';


    $database = new Database();
    $db = $database->connect();

    $post = new Post();
    $result = $post->read();
    $num = $result->rowCount();

    echo json_encode(
        array('message' => 'Nothing' )
    );



