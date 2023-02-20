<?php

include("db.php");

if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM user_info WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
