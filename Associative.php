<!DOCTYPE html>
<html>
<body>
<pre>
    <?php
    $car = array("brand"=>"Toyota", "model"=>"Supra", "year"=>1950);
    var_dump($car);
    echo "<br>";
    $car = array("brand"=>"Toyota", "model"=>"Supra", "year"=>1950);
    foreach ($car as $x => $y)
    echo "$x: $y <br>";
    ?>
</pre>
</body>
</html>