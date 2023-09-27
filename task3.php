<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting  </title>
</head>
<body>
    <?php
    $grades = array(85, 92, 78, 88, 95);

    sort($grades);

    $firstsort = count($grades);
    for($x = 0; $x<$firstsort; $x++){
        echo $grades[$x];
        echo "<br>";

    }


    
    ?>
</body>
</html>