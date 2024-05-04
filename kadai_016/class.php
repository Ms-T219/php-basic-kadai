<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
      <?php
      class Food{
        // プロパティを定義する
        private $name;
        private $price;

    //コンストラクトの定義
        public function __construct(string $name, int $price){
          $this->name = $name;
          $this->price = $price;
        }
         // メソッドを定義する
        public function show_price(){
        //  $this->price = $price;
        // echo  'Price:' .$this->price . '<br>';
          echo $this->price .'<br>';
        }
     }
    

    $food = new Food('potato', 250);
     print_r($food);
     echo'<br>';
     
     class Animal{
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height(){
        echo $this->height . '<br>';
        // echo 'Height: ' . $this->height . '<br>';
        // $this->height = $height;
      }
    }
    $animal = new Animal('dog',60,5000);
    print_r($animal);
    echo '<br>';
    $food->show_price();
    $animal->show_height();
      ?>
     </p>

 </body>
 </html>