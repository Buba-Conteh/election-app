<?php

//  echo $status;
$db = new PDO("mysql:host=localhost;dbname=election_app", "root", 3010451);


if (isset($_GET['vote'])) {
    # code...
    $vote = $_GET['vote'];
    $inset = $db->prepare("INSERT INTO voting_result (`votes`) VALUES('$vote')");
    //  var_dump($inset);
    //  die;

    var_dump($inset);
    $inset = $inset->execute();


    //  echo"reachead";
    // var_dump($inset);
    echo json_encode($inset);
    return;
}





if ($_GET['submit'] == 'candidates') {

    // var_dump($_GET);
    // die();
    $name = htmlspecialchars($_GET['name']);
    $post = htmlspecialchars($_GET['post']);
    $class = htmlspecialchars($_GET['class']);
    $grade = htmlspecialchars($_GET['grade']);
    strtolower($name);
    $checkPost = $db->query("SELECT * FROM candidates WHERE (`fullname`='$name')");
    // var_dump($checkPost);
    $checkPost = $checkPost->fetch(PDO::FETCH_ASSOC);
    // var_dump($checkPost);

    if (!$checkPost) {
        $inset = $db->prepare("INSERT INTO candidates (`fullname`, `position`, `class`, `grade`, `picture`) VALUES('$name', '$post', '$class', '$grade', 'null')");
        $inset = $inset->execute();

        if ($inset) {
            echo json_encode(['massage' => 'You have seccessfully created a new Candidate', 'status' => true]);
            return;
        }

        echo json_encode(['massage' => 'This was not successfully created', 'status' => false]);;
        return;
    }

    echo json_encode(['massage' => 'This Candidate already exist', 'status' => false]);;
    return;
}



if ($_GET['submit'] == 'post') {

    $name = htmlspecialchars($_GET['name']);
    $description = htmlspecialchars($_GET['description']);
    $status = htmlspecialchars($_GET['status']);

    $checkPost = $db->query("SELECT * FROM post WHERE (`name`='$name')");
    $checkPost = $checkPost->fetch(PDO::FETCH_ASSOC);
    if (!$checkPost) {
        # code...

        $inset = $db->prepare("INSERT INTO post (`name`, `description`, `status`) VALUES('$name', '$description', '$status')");


        $inset = $inset->execute();
        
        if ($inset) {

            echo json_encode(['massage' => 'You have seccessfully created a new Executive Post', 'status' => true]);
            return;
        }
        echo json_encode(['massage' => 'failed to insert data', 'status' => false]);
        return;
    }

    echo json_encode(['massage' => 'This Executive postion already exist', 'status' => false]);
    return;
}
