<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    
    $text = "The quick brown fox jumps over the lazy dog";
    $modified = str_replace("brown","red","$text");
    echo $modified;
    
    ?>
</body>
</html>