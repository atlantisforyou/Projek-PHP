<!DOCTYPE html>
<html>
<body>
    <?php
    $str = "Visit Bootstrap";
    $pattern = "/bootstrap/i";
    echo preg_match($pattern, $str); 
    ?>
</body>
</html>