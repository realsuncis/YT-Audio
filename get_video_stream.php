<?php

define("TIMEOUT_SECONDS", 3);
if(!empty($_GET["id"]))
{
    $link = "https://www.youtube.com/watch?v=" . escapeshellarg($_GET["id"]);
    $fetch_command = "\"C:\\Program Files\\VideoLAN\\youtube-dl\" -q -o - \"$link\"";
    passthru($fetch_command);
}
?>

