

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploading files</title>
</head>
<body>
<?php

    echo '<br><br> ====== fileUploading.php ====== <br><br>';
    echo '------------- file uploading ------------ <br>';
    if (!empty($_FILES) && !empty($_FILES['file'])){
        if ($_FILES['file']['size'] > 3 * 1024 * 1024) exit('file is too large (file must be no more than 3MB)');

        $upload_dir =  'uploaded_files/';

        if(!is_dir( $upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir . $_FILES['file']['name'])) {
            
            echo 'File uploaded successfylly' . '<br>';
            
            echo 'FILE NAME: '. $_FILES['file']['name'] . '<br>';
            echo 'FILE SIZE: '. $_FILES['file']['size'] . '<br>';
            echo 'FILE MIME TYPE: '. $_FILES['file']['type'] . '<br>';
            echo 'TEMP DIR WITH THS FILE: '. $_FILES['file']['tmp_name'] . '<br>';

            echo '<img src="' .$upload_dir. $_FILES['file']['name'] . '">';
        } else echo 'file upload error';
    }

?>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="file">Upload your face shit:</label>
    <br>
    <input name="file" id="file" type="file" size="256"/>
  
    <input type="submit" value="Send my face shit!">
</form>
    
<?php

    echo '<br> ==========================';
?>

</body>
</html>

