<?php

if (!isset($_POST['key']))
  die();
$fd = fopen("credentials.php", "w") or die("Unable to open file, check your permissions.");

$credentials = "<?php\n
\$consumer_key = '".$_POST['key']."';\n
\$consumer_secret = '".$_POST['key_secret']."';\n
\$access_token = '".$_POST['token']."';\n
\$access_token_secret = '".$_POST['token_secret']."';\n
\$screenName = '".$_POST['screen_name']."';\n
?>";

fwrite($fd, $credentials);
header('Location: index.php');
?>