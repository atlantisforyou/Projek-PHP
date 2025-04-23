<!DOCTYPE html>
<html>
<body>
<pre>
    <?php  
    $fruits = array("Apple", "Banana", "Cherry");
    array_push($fruits, "Orange", "Mango", "Avocado");

    unset($fruits[1]);
    var_dump($fruits);
    ?>
</pre>
</body>
</html>