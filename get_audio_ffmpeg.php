<?php
require("config.php");
if(!empty($_GET["id"]))
{
    $yt_dl = YOUTUBE_DL_LOCATION;
    $ffmpeg = FFMPEG_LOCATION;
    $output_name = bin2hex(random_bytes(10));
    $id = escapeshellarg($_GET["id"]);
    $link = "https://www.youtube.com/watch?v=" . $id;
    $fetch_command = "start /B \"\" \"$yt_dl\" -q -o - \"$link\" | \"$ffmpeg\" -i pipe:0 -q:a 0 -map a -f mp3 pipe:1";
    passthru($fetch_command);
}
?>

