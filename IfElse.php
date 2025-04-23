<!DOCTYPE html>
<html>
<body>
    <?php
    $t = date("H");

    if ($t < "8") {
    echo "Selamat pagi semuanya!";
    } else {
    echo "Have a good night!";
    }
    ?>
</body>
</html>