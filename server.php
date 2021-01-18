<?php
/**
 * Created by PhpStorm.
 * User: Lost User 0813
 * Date: 13-10-2019
 * Time: 10:55 PM
 */

$mysql = mysqli_connect("remotemysql.com","0UlclGY7Yx","0UlclGY7Yx","topper");

if (!$mysql) {
    echo ucwords("<section id='msg'><p class='err_msg'> oops ! server connection error, check back later. </p></section>");
    exit;
}
