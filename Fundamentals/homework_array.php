<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homework_array</title>
</head>

<body>
    <?php
        $usernames = [
            "John Doe",
            "Jane Doe",
            "Frank Doe"
        ];
    ?>

    <h1>Top Performing Users</h1>

    <ol>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ol>

</body>
</html>