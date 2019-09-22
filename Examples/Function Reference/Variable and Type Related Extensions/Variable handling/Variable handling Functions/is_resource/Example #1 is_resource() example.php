<?php
$db_link = @mysql_connect('localhost', 'mysql_user', 'mysql_pass');
if (!is_resource($db_link)) {
    die('Can\'t connect : ' . mysql_error());
}
