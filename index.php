<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test text</h1>
    <?php
        echo "Print </br>";

        $name = "Peter";
        echo "$name </br>";
        echo $name."</br>";

        // value, value. ..., value(usual list, pole)
        $colors = array("red", "green", "blue");
        echo $colors[0]." ";
        echo $colors[1]." ";
        echo $colors[2]."</br>";

        foreach($colors as $color){
            echo "Current color: ".$color."</br>";
        } 

        // key => value(dict)
        $dictionary = array("Peter" => 25, "Jana" => 12, "Tom" => 90);
        foreach($dictionary as $name => $age){
            echo "$name is $age years old </br>";
        }

        // new code line
        echo "new"."</br>";

        // new cycle
        $test_list = array("one", "two", "three", "four", "five", "six");
        foreach($test_list as $element){
            echo "$element"." ";
        }
        echo "</br>";

        // new lines I aded at home
        echo "test</br>";
        echo "One more print"
    ?>
</body>
</html>