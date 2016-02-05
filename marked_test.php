<?php
  require("common.php");
  $markdown = file_get_contents("CREDITS.md");
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Marked in the browser</title>
  <script src="js/jquery.js"></script>
  <script src="js/marked.js"></script>
</head>
<body>
  <div id="content"></div>
  <script>
    var markdown = <?php echo $markdown; ?>
    document.getElementById('content').innerHTML = marked(markdown);
  </script>
</body>
</html>
