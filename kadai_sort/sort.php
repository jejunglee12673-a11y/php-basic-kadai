<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 元の配列
    $numbers = [23, 4, 15, 10, 18];

    // 独自ソート関数
    function sort_2way($array, $order) {

      // 昇順 or 降順の分岐
      if ($order === "asc") {
        sort($array);
        echo "昇順にソートします。<br>";
      } else if ($order === "desc") {
        rsort($array);
        echo "降順にソートします。<br>";
      } else {
        echo "並び順の指定が正しくありません。<br>";
        return;
      }

      // 結果の出力
      foreach ($array as $num) {
        echo $num . "<br>";
      }

      echo "<br>";
      }

      // 関数を2回呼び出す
      sort_2way($numbers, "asc");
      sort_2way($numbers, "desc");
    ?>
  </p>
</body>

</html>