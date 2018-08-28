<?php
$lineNumber = 20;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 3EX6</title>
</head>
<body>
  <p>
  <?php
  while ($lineNumber >=0)
  {
    echo 'C\'est presque bon';
    ?>
  </p>
    <p>
    <?php
    $lineNumber--;
  }
  for($lineNumber = 20; $lineNumber >= 0; $lineNumber --){
    echo 'C\'est preque bon' . ' ';
  }
  ?>
  <p/>
</body>
</html>
