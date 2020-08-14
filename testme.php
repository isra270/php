<!DOCTYPE html>
<html>
    <head>
        <title>hello again</title>
    </head>
    <body>
        <h1>hello again </h1>
        <?php 
        $name = "my name is Israa";
        $age = 27;
         echo $name;
         echo "<br>";
        echo $age;
        echo "<br>";
        echo 5+8;
        echo "<br>";
        define("pi",3.14); /*constant*/
        echo pi;

        echo "<br>";
         echo $name." ***   ". $age;

         echo "<hr>";
        $food = array('pizza' ,15 ,10 , array("isra","ahmed","ahmeds"),"pasta");
        echo $food[0]."<br>";
        echo $food[3][1]."<br>";
        $food[10] = "heelloo";
        echo print_r($food);
        echo "<hr>";
        $color = array("a"=>40 , "B"=> "pizza");
        echo $color["a"]."<br>";
        echo print_r($color);
        echo "<hr>";
        
        



        ?>
    </body>
</html>