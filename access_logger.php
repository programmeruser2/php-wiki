<?php
function logActivity($action, $user = "A user on the internet", $filename = "access.log") {
  date_default_timezone_set("Etc/GMT");
  $file = fopen($filename, "a");
  $currentDate = date('Y-m-d h:i:s A');
  fwrite($file, "[GMT $currentDate] {$user} {$action}\n");
  fclose($file);
}
?>