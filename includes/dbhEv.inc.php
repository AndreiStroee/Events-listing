<?php

// $evName = $_POST['evName'];
// $evDay = $_POST['evDay'];
// $evMonth = $_POST['evMonth'];
// $evDetails = $_POST['evDetails'];
// $evLink = $_POST['evLink'];
// $evPrice = $_POST['evPrice'];
// $evImage = $_POST['evImage'];


$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbEvName = "events";

$connEv = mysqli_connect($servername, $dbUsername, $dbPassword, $dbEvName);

if (!$connEv) {
    die("Connection failed: " . mysqli_connect_errno());
} 
// else{
//     $sqlEv = "INSERT INTO event (evName, evDay, evMonth, evDetails, evLink, evPrice, evImage) 
//     VALUES(?, ?, ?, ?, ?, ?, ?);";
//     $stmtEv = mysqli_stmt_init($connEv);

   
//     mysqli_stmt_bind_param($stmtEv, "sisssdb", $evName, $evDay, $evMonth, $evDetails, $evLink, $evPrice, $evImage);
//     mysqli_stmt_execute($stmtEv);

//     echo 'successfully executed...';
//     mysqli_stmt_close($stmtEv);
//     mysqli_close($connEv);
// }
