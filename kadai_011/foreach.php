<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>PHP課題</title>
  </head>
  <body>
    <?php
      $onion = ['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];

      foreach($onion as $key => $value)
      {
        echo "{$key}:{$value}<br>";
      }
    ?>
  </body>
</html>