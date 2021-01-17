<?php
/**
 * Created by PhpStorm.
 * User: Lost User 0813
 * Date: 13-10-2019
 * Time: 09:55 PM
 */

//get vars from form
@$search = $_GET['search'];

//convert html special chars here
$search = htmlspecialchars(trim($search));

//ask connection
require "server.php";       //$mysql var is here

if (isset($search)) {

//display find.php first
    require "find.php";
//start search operation
    @$get = mysqli_query($mysql, "SELECT * FROM Y2019 WHERE NAME LIKE '%$search%' OR DESCRIPTION LIKE '%$search%' OR RELATED LIKE '%$search%';");

    @$records = $get->num_rows;

    require "search.php";
    if ($records > 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("msg").innerHTML = "Your Search Has Returned Some Results";
        </script>

        <?php
    }


    for ($i = 0; $i < $records; $i++) {
        $pr = $get->fetch_assoc();

        //get data
        //convert new line chars to breaks
        $name = nl2br($pr['NAME']);
        $related = nl2br($pr['RELATED']);
        $desc = nl2br($pr['DESCRIPTION']);
        //get uid
        $uid = $pr['UID'];

        require "search.php";
    }
}