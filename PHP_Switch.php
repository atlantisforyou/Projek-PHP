<!DOCTYPE html>
<html>
<body>
    <?php
    $favcolor = "black";

    switch ($favcolor) {
    case "red":
        echo "MYour favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "black":
        echo "Your favorite color is black!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor black!";
    }
    ?>
</body>
</html>