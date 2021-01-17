<!DOCTYPE html>
<html>
<?php
//session start
@session_start();

//from form search.php
@$tip = $_GET['tip'];

//get $uid from get-data.php
if (!isset($_SESSION['uid']) || $_SESSION['uid'] == "") {
    @$uid = $tip;
    $from_update = 0;
} else if (!isset($tip)) {
    $uid = $_SESSION['uid'];
    $from_update = 1;
    unset($_SESSION['uid']);    //remove session var
}


//ask connection
require "server.php";       //$mysql var is here

//start search operation
@$get = mysqli_query($mysql, "SELECT * FROM Y2019 WHERE UID = '$uid';");


$records = $get->num_rows;
if ($records == 0) {
    $records = 1;   //free page, no data
}

//display find.php first
require "find.php";
//display update message if updated from save.php and then moved here
if ($from_update == 1) {
    ?>
    <script type="text/javascript">
        document.getElementById("msg").innerHTML = "All Topic Data Has Been Updated !";
    </script>

    <?php
}

for ($i=0; $i < $records; $i++) {
    $show = $get->fetch_assoc();

    //convert new line chars to breaks
    $name = nl2br($show['NAME']);
    $related = nl2br($show['RELATED']);
    $desc = nl2br($show['DESCRIPTION']);

    //strip slashes
    $name = stripslashes($name);
    $related = stripslashes($related);
    $desc = stripslashes($desc);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Detailed Report - The Topper</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:rgb(231,231,231);">

<div style="margin-top:21px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <p style="color:rgb(0,6,190);"><strong id="msg"></strong></p>
            </div>
        </div>
    </div>
</div>
    <div style="margin-top:21px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p style="color:rgb(247,25,22);"><strong id="error-msg"></strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="align-items-center align-content-center align-self-center" style="margin-top:25px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-6 align-self-center"><label class="col-form-label" style="font-size:22px;"><strong>Title/Name</strong></label></div>
                <div class="col-md-4 col-xl-6 align-self-center"><label class="col-form-label" style="font-size:22px;"><strong>From</strong></label></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><input class="d-block" type="text" value="<?php echo ucwords(" $name"); ?>" disabled="" style="width:95%;margin-top:20px;"></div>
                <div class="col-md-6"><input class="d-block" type="text" value="<?php echo @$related; ?>" disabled="" style="margin-top:20px;width:95%;"></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top:20px;">
                    <h3 style="margin-bottom:0px;margin-top:20px;">Describe</h3>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"><textarea rows="8" disabled="" placeholder="hey guys this is haris" style="margin-top:24px;"><?php echo @$desc; ?></textarea></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top:20px;"><a href="update.php?edit=<?php echo $uid; ?>"<button class="btn btn-primary" type="button" style="margin-top:5px;width:144px;height:50px;background-color:rgb(238,37,121);">Edit</button></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin:20px;"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
?>