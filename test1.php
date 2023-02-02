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

        // Associative Arrays
        // Store Key-Value Pairs
        $grades = array("Evan"=>"A", "Beck"=>"B", "Teddy"=>"C");
        echo $grades["Evan"];

        // Functions
        function hello($user){
            echo "Hello $user!";
        }
        hello("Evan");

        // Return Statements
        function cube($num){
            return $num * $num * $num;
        }

       cube(2);

       // Classes & Objects
       class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($title, $author, $pages){
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }
       }

       $book1 = new Book;

       // Constructors


    ?>
    
</body>
</html>