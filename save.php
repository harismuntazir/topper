<?php
/**
 * Created by PhpStorm.
 * User: Lost User 0813
 * Date: 13-10-2019
 * Time: 09:55 PM
 */

//keep for session
@session_start();
//get form data either from insert.php or update.php

@$name = $_POST['name'];
@$related = $_POST['related'];
@$desc = $_POST['desc'];

//data from update.php
@$uid = $_POST['uid'];

//insert and update operation taken from insert.php or update.php
@$operation = $_POST['operation'];

//convert html special chars
$name = htmlspecialchars($name);
$related = htmlspecialchars($related);
$desc = htmlspecialchars($desc);

//add slashes
$desc = addslashes(trim($desc));
$related = addslashes(trim($related));
$name = addslashes(trim($name));

if (!isset($name) || !isset($related) || !isset($desc)) {
    require "insert.php";
    ?>
    <script type="text/javascript">
        document.getElementById("error-msg").innerHTML = "Oh No, You Have Not Entered The Required Data And Trying To Get Away !";
    </script>

    <?php
    exit;
}

//get server.php for $mysql var as connection

require "server.php";


//insert data to database
if ($operation == "insert") {
    @$inserted = mysqli_query($mysql, "INSERT INTO Y2019 (NAME, RELATED, DESCRIPTION) VALUES ('$name','$related','$desc');");
    //for insert operation
    if (!$inserted) {
        require "insert.php";
        ?>
        <script type="text/javascript">
            document.getElementById("error-msg").innerHTML = "Oh No, I Am Not Able To Save Your Data, I Think Something With This Name Is Already There.";
        </script>

        <?php
        exit;
    }
    else {
        require "insert.php";
		?>
		<script type="text/javascript">
		document.getElementById("msg").innerHTML = "Data Submitted, What About Adding Some More ?";
		</script>

<?php
        exit;
    }
}

//to update data in database
if ($operation == "update") {
    @$updated = mysqli_query($mysql, "Update Y2019 Set NAME = '$name', RELATED = '$related', DESCRIPTION = '$desc' where UID='$uid';");
    //for updated operation
    if (!$updated) {
        require "show.php";
        ?>
        <script type="text/javascript">
            document.getElementById("error-msg").innerHTML = "Update Operation Failed, Try Again Later !";
        </script>

        <?php
        exit;
    }
    else {
        $_SESSION['uid'] = $uid;
        require "show.php";
        ?>
        <script type="text/javascript">
            document.getElementById("msg").innerHTML = "All Data Has Been Updated Successfully, Enjoy";
        </script>

        <?php
        exit;
    }
}

