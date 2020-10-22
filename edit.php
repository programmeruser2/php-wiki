<?php
include 'access_logger.php';
if($_POST['article'] ?? null and $_POST['content'] ?? null) {
  $path = "articles/".$_POST['article'].".txt";
  file_put_contents($path, $_POST['content']);
  logActivity('edited the wiki page "'.$_POST['article'].'"');
}
?>
<form id="edit-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
  <input type="text" placeholder="Article Name" name="article" autocomplete="off"/> <br>
  <textarea for="edit-form" placeholder="Content" name="content" style="margin: 0px; width: 1445px; height: 808px;"></textarea> <br>
  <input type="submit"/>
</form>