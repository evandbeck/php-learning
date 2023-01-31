<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test 1</title>
</head>
<body>

    <?php
        echo "Hello World";
        echo "<h1>Test</h1>";

        // Variable in PHP
        // $ vs. let or const

        $name = "Evan";
        $age = "29";

        echo "$name is $age years-old.";

        // Data Types in PHP

        // String
        $phrase = "This is a string.";
        
        // Integer
        $num = 100;

        // Float
        $gpa = 100.001;

        // Boolean
        $isCat = true;

        // Null or "No Value"
        null;

        // Arrays
        $cats = array("big", "smol", "orange", "tortie");
        echo $cats[1];
        echo count($cats);

    ?>
    
</body>
</html>