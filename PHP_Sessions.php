<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "black";
$_SESSION["favcar"] = "toyota";
echo "Session variables are set.<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite car is " . $_SESSION["favcar"] . ".";
?>

</body>
</html>