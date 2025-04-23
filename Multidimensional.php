<!DOCTYPE html>
<html>
<body>
    <?php
    $cars = array (
    array("Volvo",22,15),
    array("BMW",15,14),
    array("Toyota",10,7),
    array("Land Rover",6,3)
    );
    
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>
</body>
</html>