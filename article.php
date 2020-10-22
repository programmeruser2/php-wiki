<?php
include 'access_logger.php';
if($_GET['article']) {
  header('Content-Type: text/plain');
  $path = "articles/".$_GET['article'].'.txt';
  echo file_get_contents($path);
  logActivity('read the wiki page "'.$_GET['article'].'"');
}
?>
