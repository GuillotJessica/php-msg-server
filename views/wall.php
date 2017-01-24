<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
    <?php
    dump($_SERVER);
    $handle = fopen("data/messages.txt", "r");
    while (($line = fgets($handle)) !== false) {
        echo '<li>' . $line . '</li>';
    }
    fclose($handle);
    ?>
    </ul>
  </body>
</html>
