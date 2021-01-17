<?php
//used to change data already inserted into database
//converts html specials chars in their equivalent ones
//then updates the data back to database

require "server.php";

$get = mysqli_query($mysql, "SELECT * FROM Y2019;");

if (!$get) {
    echo "failed to get data <br />";
    exit;
}

$records = $get->num_rows;
for ($i=0;$i<$records;$i++) {
    $show = $get->fetch_assoc();

    $id = $show['UID'];
    $name = $show['NAME'];
    $desc = $show['DESCRIPTION'];


    $name = htmlspecialchars($name);
    $desc = htmlspecialchars($desc);

    $update = mysqli_query($mysql, "UPDATE Y2019 SET NAME = '$name', DESCRIPTION = '$desc' WHERE UID = '$id';");

    if (!$update) {
        echo "failed to update.. <br />";
        exit;
    }
    else {
        echo "updated record with id " . $id . "<br />";
    }
}

?>