
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
    <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];
        echo('昇順にソートします。'.'<br>');
        sort_2way($nums,TRUE);
        echo('降順にソートします。'.'<br>');
        sort_2way($nums,FALSE);

        function sort_2way($array, $order) {
            if($order==TRUE) {
                sort($array);
                foreach ($array as $item) {
                    echo($item.'<br>');
                }
            }
            else {
                rsort($array);
                foreach ($array as $item) {
                    echo($item.'<br>');
                }
            }
        }
      ?>
    </p>
  </body>
</html>
