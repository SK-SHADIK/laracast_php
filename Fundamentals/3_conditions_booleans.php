<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>conditions_booleans</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter";
        $read = true;

        if ($read) {
           $message = "You have read $name";
        } else {
            $message = "You have NOT read $name";
        }
    ?>

    <?php
        $name_false = "Dark Matter";
        $read_false = false;

        if ($read_false) {
           $message_false = "You have read $name";
        } else {
            $message_false = "You have NOT read $name";
        }
    ?>

    <h1>
        <?php //echo $message; ?>
        <?= $message ?>
        <br>
        <?= $message_false ?>
    </h1>

</body>
</html>