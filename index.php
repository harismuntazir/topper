<DOCTYPE html>

<?php
/**
 * Created by PhpStorm.
 * User: hm
 * Date: 7/13/2020
 * Time: 8:53 AM
 */

?>
<html lang="en">
<head>
    <title>The Topper - Bad Tools</title>
    <link rel="stylesheet" href="../styles/style.css"/>
    <link rel="stylesheet" href="../styles/list.css"/>

</head>
<body>
    <section id="main">
        <section id="header">
            <section id="logo">
                <a href="https://errorworld.in/"><img src="../content/images/logos/logo.jpg" class="logo"/></a>
            </section>
            <?php require_once "../header.php" ?>
        </section>

        <?php require_once "../menu.php" ?>

        <section id="main_body" style="text-align: center">
            <section id="list">
                <a href="find.php"><button class="listItem">Search</button></a>
            </section>
            <section id="list">
                <a href="insert.php"><button class="listItem">Submit New Record</button></a>
            </section>
        </section>

        <?php require_once "../footer.php" ?>
    </section>
</body>
</html>

