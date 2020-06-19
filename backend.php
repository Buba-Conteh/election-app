<?php
//  $status=$_GET['status'];
//  echo $status;


$db = new PDO("mysql:host=localhost;dbname=election_app", "root", 3010451);




if ($_GET['item'] == 'vice-president') {


    $inset = $db->query("SELECT * FROM candidates WHERE `position`='vice-president'");
    //  var_dump($inset);
    //  die;
    $inset = $inset->fetchAll(PDO::FETCH_ASSOC);

    //   var_dump($inset);
    echo json_encode($inset);
    return;
}
if ($_GET['item'] == 'secretary') {

    $inset = $db->query("SELECT * FROM candidates WHERE `position`='secretary'");

    $inset = $inset->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($inset);
    return;
}
if ($_GET['item'] == 'posts') {

    $inset = $db->query("SELECT `name` FROM post ");

    $inset = $inset->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($inset);
    return;
}


if ($_GET['item'] == 'president') {

    $inset = $db->query("SELECT * FROM candidates WHERE `position`='president'");
    //  var_dump($inset);
    //  die;
    $inset = $inset->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($inset);
    return;
}
        //  return;
    // }
