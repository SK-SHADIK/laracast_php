<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>array</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliers",
        "Hail Mary"
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li>" .  $book . "</li>";
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li> $book </li>";
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($books as $book) {
            echo "<li> $book TM </li>";
        }
        ?>
    </ul>
    
    <ul>
        <?php foreach ($books as $book) {
            echo "<li> $bookTM </li>";
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>