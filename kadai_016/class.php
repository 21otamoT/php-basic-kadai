<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <?php
      class Food {
        private $name;
        private $price;
        
        public function __construct(string $name,int $price)
        {
          $this->name = $name;
          $this->price = $price;
        }
        public function set_price(int $price)
        {
          $this->price = $price;
        }
        public function show_price()
        {
          echo $this->price.'<br>';
        }
      }  
        //  Foodのインスタンス化
         $food = new Food('potate',250);
      
      class Animal {
        private $name;
        private $height;
        private $weight;
        
        public function __construct(string $name,int $height,int $weight)
        {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
        public function set_height(int $height)
        {
          $this->height = $height;
        }
        public function show_height()
        {
          echo $this->height.'<br>';
        }
      }
        // Animalのインスタンス化
        $animal = new Animal('dog',60,5000);

      print_r($food);
      echo '<br>';
      print_r($animal);
      echo '<br>';
      $food->set_price(250);
      $food->show_price();
      $animal->set_height(60);
      $animal->show_height();
    ?>
  </body>
</html>