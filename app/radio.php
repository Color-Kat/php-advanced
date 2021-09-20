

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
    <label for="review">Your attitude to Gustov on a five-point scale:</label>
    <br>
    <input type="radio" name="review" value="1">1 <br>
    <input type="radio" name="review" value="2">2 <br>
    <input type="radio" name="review" value="3">3 <br>
    <input type="radio" name="review" value="4">4 <br>
    <input type="radio" name="review" value="5">5 <br>

    <input type="submit" value="praise Gustov">
</form>
    
<?php

    echo '<br> ==========================';
?>

</body>
</html>

