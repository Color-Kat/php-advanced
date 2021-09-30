<?php
// enable bufferization to we can send headers
ob_start();

echo '<br><br> ========= mail.php ========= <br><br>';
echo '----------------- mail ------------------ <br>';

// if(empty($_POST)) exit('Request is not valid');
// echo strcasecmp($_POST['captcha'],'w68hp');

if (isset($_POST['captcha']) && strcasecmp($_POST['captcha'], 'w68hp') != 0) {
    header('Location: index.php2?captcha=false');
    exit();
}

switch ($_POST['subject'] ?? '') {
    case 1:
        $subject = 'Dismissal';
        break;
    case 2:
        $subject = 'Retirement';
        break;
    case 3:
        $subject = 'Gustinianity';
        break;
    default:
        $subject = 'I love Gustov';
}

$to = trim($_POST['to'] ?? '');
$from = trim($_POST['email'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');
$message = urldecode($message);
$message = trim($message);

$headers = "From: " . $from . "\r\n" .
    "Reply-To: " . $from . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
echo $from;

if (mail($to, $subject, $message, $headers)) {
    echo 'Mail is sended!';
} else {
    echo 'some error happened';
}

ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color mail</title>

    <style>
        body,
        html {
            background: #8080c0;
            color: #fff;
        }

        input,
        textarea,
        select {
            box-sizing: border-box;
            width: 250px;
            height: 35px;
            font-size: 20px;
            font-family: Calibri;
        }

        img {
            width: 250px;
        }

        input[type="submit"] {
            height: 25px;
            font-size: 14px;
            color: white;
            background: #8080ff;
        }

        textarea {
            resize: none;
            height: 200px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["captcha"]) && $_GET["captcha"] == 'false') echo '<h1>Captcha is wrong</h1>';
    ?>
    <form action="" method="POST">
        <select name="subject" id="subject">
            <option selected disabled>Mail subject</option>
            <option value="1">Dismissal</option>
            <option value="2">Retirement</option>
            <option value="3">Gustinianity</option>
        </select>
        <br>

        <label for="email">Your email:</label> <br>
        <input type="email" name="email" id="email" required> <br>

        <label for="to">To:</label> <br>
        <input type="email" name="to" id="to" required> <br>

        <label for="message">Text:</label> <br>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea> <br>

        <label for="captcha">Enter the code from the image:</label> <br>
        <img src="https://miro.medium.com/max/1200/1*uq_w8ytWwx5GjmFzgTUwqw.gif" alt="captcha">
        <br>
        <input type="text" name="captcha" id="captcha">
        <br>

        <input type="submit" value="Send mail to Gustov!">
    </form>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum sunt, molestiae nobis quae hic enim? Voluptates numquam consequatur facilis commodi deleniti eos omnis perferendis incidunt mollitia modi officiis iure, quas quae asperiores possimus! Praesentium iusto doloribus quibusdam quam. Officiis voluptatibus adipisci dolor porro hic fugit, perspiciatis incidunt iusto harum a rerum, quas blanditiis minima ipsum nostrum laborum nisi cum accusamus magni. Error dolorem deleniti quaerat ipsa nulla ut officia adipisci reiciendis voluptatum amet explicabo, ipsum doloremque numquam doloribus tenetur vitae eum voluptas dolores pariatur voluptatem fugit? Natus sit eligendi, non eveniet eaque dolor praesentium! Labore, soluta repellat? Exercitationem veniam illum laudantium minus, quaerat placeat aut dolor quibusdam fugit eveniet voluptates corrupti, numquam ea harum sint ratione. Eum expedita illum modi, beatae fuga atque! Cum est, animi nostrum nisi aut laboriosam laborum deleniti et similique omnis voluptatum ut provident in assumenda. Esse eum placeat nostrum saepe ducimus repellat, nisi quo itaque autem deleniti enim quisquam adipisci facilis odit necessitatibus non officiis aliquid hic. Culpa placeat consectetur eligendi tenetur, sequi beatae facilis voluptates! Ea aperiam, cupiditate ex voluptate debitis error architecto! Enim, id libero! Est vitae neque iusto, eveniet repellat vel reiciendis facere aspernatur doloribus voluptates architecto sapiente consectetur officiis! Aspernatur est, sapiente totam sequi quos praesentium alias laudantium quis impedit explicabo laborum dolorem corrupti excepturi facere ipsam quaerat esse, soluta iste incidunt accusamus consequatur cum aliquid illo. Sed saepe, necessitatibus atque ea repellat recusandae sint doloribus natus explicabo enim est quis rerum. Maxime natus architecto autem voluptatem placeat sequi quos sed, laboriosam facere laudantium pariatur, doloremque esse distinctio adipisci quidem! Corporis, nam consequatur quae similique quod qui laudantium pariatur. Magni, tenetur velit natus quisquam animi, explicabo placeat et pariatur quidem iure cum aperiam laudantium eaque atque ex, eum mollitia? Exercitationem inventore nisi repudiandae expedita laboriosam corporis saepe sit est consequatur ipsam?
    <?php

    echo '<br> ==========================';
    ?>

</body>

</html>