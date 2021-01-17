<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:rgb(231,231,231);">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="color:rgb(58,5,211);margin-top:10px;"><strong id="msg"></strong></p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php
        //don't show if their is now data
        if (isset($uid)) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="margin-top:5px;"><a
                                href="show.php?tip=<?php echo @$uid; ?>"><?php echo ucwords(@$name) . " From ";
                        echo ucwords(@$related); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top:10px;">
                    <p class="text-left" style="font-size:20px;padding-right:5px;padding-left:5px;">
                        <?php
                        $lmtd = explode(" ", @ $desc);
                        $total = count($lmtd);
                        if ($total > 40) {    //display limited description on search page based on total words in desc..
                            $total = $total / 2;
                            for ($i = 0; $i < ($total / 2); $i++) {
                                echo " " . @$lmtd[$i];
                            }
                            echo "..[read more]";
                        } else if ($total < 20) {
                            for ($i = 0; $i < $total; $i++) {
                                echo " " . @$lmtd[$i];
                            }
                            echo "..[read more]";
                        } else {
                            for ($i = 0; $i < ($total / 2); $i++) {
                                echo " " . @$lmtd[$i];
                            }
                            echo "..[read more]";
                        }
                        }
                ?>
					</p>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div></div>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>