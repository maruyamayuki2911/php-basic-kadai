<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       class Food{
        private $name;
        private $price;

        public function __construct(string $name,int $price){
            $this->name = $name;
            $this->price = $price;
        }
        public function show_price(){
            echo $this->price . '<br>';
        }
       }

       $food = new Food('apple',150);
       $food->show_price();
       print_r($food);
       
        ?>
    </p>
    <p>
        <?php
        class Animal{
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name,int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(){
                echo $this->height . '<br>';
            }
        }

        $animal = new Animal('dog',100,120);
        $animal->show_height();
        print_r($animal);
        ?>
    </p>
    <p>


    </p>
    <P>
        <?php

        ?>
    </P>
    </form>
    </p>
</body>

</html>