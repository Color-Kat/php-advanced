

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
</head>
<body>
<?php

    echo '<br><br> ========= select.php ========= <br><br>';
    echo '------------------ select ----------------- <br>';

    if (!empty($_POST)){
        print_r($_POST);
    }

?>

<form action="" method="POST">
    <legend>Welcome to our sect;)</legend>
    
    <label for="religion">Select your current religion:</label>
    <br>
    <select name="religion" id="religion">
        <option value="Christianity">Christianity</option>
        <option value="Gustinianity">Gustinianity</option>
        <option value="Islam">Islam</option>
    </select>
    <br>

    <label for="prayer">Сhoose your favorite prayers:</label>
    <br>
    <!-- for multiple selects we need in name write arr[] -->
    <select name="prayer[]" multiple id="prayer">
        <option value="gustov">Glory to Gustov</option>
        <option value="onlyGuston">Only Gustov</option>
        <option value="Gustinetz">Gustinetz</option>
    </select>

    <input type="submit" value="join a sect">
</form>
    
<?php

    echo '<br> ==========================';
?>

</body>
</html>

