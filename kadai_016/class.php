<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編16章課題</title>
</head>

<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food
    {
      // プロバティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // priceを出力するメソッドを定義する
      public function show_price() {
        echo $this->price . '<br>';
      }
    } 
    // Animalクラスを定義する
    class Animal {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // heightを出力するメソッド
      public function show_height() {
        echo $this->height . '<br>';
      }
    }

    // Foodをインスタンス化する
    $apple = new Food('potato', 250);

    // Animalをインスタンス化する
    $dog = new Animal('dog', 60, 5000);

    // インスタンス$userの各プロパティの値を出力する
    print_r($apple);
    print_r($dog);

    // メソッドへアクセス
    $apple->show_price();
    $dog->show_height();
    ?>
  </p>
</body>

</html>