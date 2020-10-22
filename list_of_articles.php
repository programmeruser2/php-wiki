<h1>Index of articles</h1>
<ul>
<?php 
include 'access_logger.php';
$files = array_slice(scandir("articles"),2);

foreach($files as $file) {
  echo "<li>" . str_replace(".txt","",$file) . "</li>";
}
logActivity("viewed the article index");
?>
</ul>