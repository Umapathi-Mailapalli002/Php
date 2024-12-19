<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string function</title>
</head>
<body>
    <?php 
    $name = "Elon Musk";
    echo $name;
    echo "<br/>";

    //to concatinate the strings use . and strlen is used find the length of the string
    echo "length of my string is " . strlen($name) . "<br/>";

    //to count the words use str_word_count
    echo "number of words in $name is ". str_word_count($name)
    echo "<br/>";
    
    ?>
</body>
</html>