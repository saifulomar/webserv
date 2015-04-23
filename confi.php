<?php
$conn = mysql_connect("100.3.9.130", "adminiWrVJlR", "7WPcJIjiiwGd");
mysql_select_db('itb_notification', $conn);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
printf("MySQL server version: %s\n", mysql_get_server_info());
?>