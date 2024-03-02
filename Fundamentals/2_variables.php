<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>variables</title>
</head>
<body>

    <h1>
        <?php
            $greeting = "Hello";
            $last = " Last";

            echo "$greeting Everybody!";

            echo '<br>';
            // In PHP, single quotes ('') will print the text exactly as it is, 
            // while double quotes ("") will print the variable values along with the text.
            echo '$greeting Everybody!';

            echo '<br>';
            // Concatenation
            echo "Hello" . " Everyone";

            echo '<br>';
            // Concatenation
            echo "Hello" . " " . "Everyone";

            echo '<br>';
            // Concatenation
            echo  $greeting . " Everyone";

            echo '<br>';
            // Concatenation
            echo  $greeting . $last;
        ?>
    </h1>

</body>
</html>