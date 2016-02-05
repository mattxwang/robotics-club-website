<?php
  $markdown = file_get_contents('CREDITS.md', FILE_USE_INCLUDE_PATH);
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
  <h1>Hello from the other side</h1>
  <div id="content"></div>
  <?php echo $markdown;
  echo "Hello"; ?>
  <script type="text/javascript">
    document.getElementById('content').innerHTML = marked(<?php echo json_encode($markdown); ?>);
  </script>
</body>
</html>
