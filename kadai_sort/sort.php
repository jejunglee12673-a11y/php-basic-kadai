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

    // 昇順ソート（小さい → 大きい）
    $asc = $numbers;
    sort($asc);

    // 降順ソート（大きい → 小さい）
    $desc = $numbers;
    rsort($desc);

    // 表示
    echo "昇順にソートします。<br>";
    foreach ($asc as $num) {
    echo $num . "<br>";
}

    echo "\n降順にソートします。<br>";
    foreach ($desc as $num) {
    echo $num . "<br>";
}
    ?>
  </p>
</body>

</html>