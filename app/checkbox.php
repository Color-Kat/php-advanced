

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>
<body>
<?php

    echo '<br><br> ======== checkbox.php ======== <br><br>';
    echo '---------------- checkbox ---------------- <br>';

    if (!empty($_POST)){
        echo "your skills: <br>";
        echo htmlspecialchars(implode(', ', $_POST));
    }

?>

<form action="" method="POST">
    <legend>Select your skills</legend>
    <input type="checkbox" name="html/css" value="html/css">html/css <br>
    <input type="checkbox" name="js" value="js"> js<br>
    <input type="checkbox" name="react" value="react">react <br>
    <input type="checkbox" name="vue" value="vue">vue <br>
    <input type="checkbox" name="php" value="php">php <br>
    <input type="checkbox" name="mysql" value="mysql">mysql <br>
    <input type="checkbox" name="laravel" value="laravel">laravel <br>
    <input type="checkbox" name="docker" value="docker">docker <br>
    <input type="checkbox" name="redux" value="redux">redux <br>
    <input type="checkbox" name="vuex" value="vuex">vuex <br>
    <input type="checkbox" name="have pc" value="you have pc ;)" >pc <br>

    <input type="submit" value="oK">
</form>
    
<?php

    echo '<br> ==========================';
?>

</body>
</html>

