<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Manipulation</title>
</head>
<body>
     <?Php
    $numbers = [1,2,3,4,5,6,7,8,9,10];
    function odd($n){
        return $n % 2 !=0;
    };
    $oddnumber = array_filter($numbers,'odd');
    print_r ($oddnumber);
?> 

</body>
</html>