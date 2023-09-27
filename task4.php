<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional</title>
</head>
<body>
    <?php
    $studentGrades = array(
        array("Math", 80,90,70),
        array("English", 97,60,50),
        array("Science", 78,68,40),
    );
    for ($row = 0; $row < 3; $row++) {
        echo "<p><b>Subject Name $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$studentGrades[$row][$col]."</li>";
        }
        echo "</ul>";
      }
    
    
    
    
    
    ?>
    
</body>
</html>