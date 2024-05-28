<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題11</title>
</head>
<body>
    <P>
        <?php 
        $products =[
            'name' => '玉ねぎ',
            'price' => 200,
            'origin' => '玉ねぎ',
        ];

        foreach($products as $key => $value){
            echo "{$key} : {$value}<br>";
        }

        ?>
    </P>
</body>
</html>