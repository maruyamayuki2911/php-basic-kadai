<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>

<body>
    <P>
        <?php
        $nums = [
            15,
            4,
            18,
            23,
            10
        ];

        function sort_2way($array, $order)
        {
            if ($order == true) {
                sort($array);
                echo '昇順にソートします。<br>';
                foreach ($array as $value) {
                    echo $value . '<br>';
                }
            } else {
                rsort($array);
                echo '降降にソートします。<br>';
                foreach ($array as $value) {
                    echo $value . '<br>';
                }
            }
        }

        sort_2way($nums, true);

        sort_2way($nums, false);
        ?>
    </P>
    <P>
        <?php

        ?>
    </P>
    <p>
        <?php

        ?>
    </p>
</body>

</html>