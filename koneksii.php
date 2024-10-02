<?php
$conn=mysqli_connect('localhost','root','','latihan_web');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>