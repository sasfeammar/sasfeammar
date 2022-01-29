<?php
include "unrt.php";

clearRTs($connection, $screenName);
header("Location: ". $_SERVER['HTTP_REFERER']);

?>