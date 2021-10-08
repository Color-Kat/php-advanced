<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>



    <?php

    require('classes/GuiKitFactory.php');

    echo '<br><br>=== patterns/abstractFactory/index.php ===<br><br>';
    echo '---------- patterns/deleabstract factorygation ---------- <br>';

    /**
     * АБСТРАКТНАЯ ФАБРИКА
     * 
     * Порождающий шаблон проектирования - 
     * Класс, который предоставляет общий интерфес для создания семейств взаимосвязанных объектов.
     * Объекты эти имеют общий интерфейс.
     * 
     * 
     */

    // $guiKit = (new GuiKitFactory())->getFactory('bootstrap');
    $guiKit = (new GuiKitFactory())->getFactory('tailwindCss');

    $guiKit->buildButton()->setText('It is button')->changeSize('sm')->draw();
    $guiKit->buildCheckbox()->draw();
    $guiKit->buildInput()->setPlaceholder('It is input')->draw();
    $guiKit->buildCheckbox()->draw();


    echo '<br> ==========================';

    ?>

</body>

</html>