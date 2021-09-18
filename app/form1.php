

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<body>
<?php

    echo '<br><br> ========= form1.php ======== <br><br>';
    echo '---------------- post form --------------- <br>';

    if (!empty($_POST)){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];

        if(empty($name) || empty($lastname)) 
            echo 'Fields are not filled!';
        else echo 'success';
    }

?>

<form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"> <br>

    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" id="lastname"> <br>

    <input type="submit" value="Send">
</form>
    
<?php

    echo '<br> ==========================';
?>

</body>
</html>

