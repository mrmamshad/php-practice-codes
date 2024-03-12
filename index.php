<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-practice</title>
</head>

<body>
    <!-- variable and condition  -->
    <!-- <?php
            $book = "DopamineDetox";
            $read = false;

            if ($read) {
                $messege = "You read the $book";
            } else {
                $messege = "You don't read the $book";
            }
            ?>
    <h1>
        <?= $messege; ?><br>
        <?= "hello world" ?>
    </h1> -->

    <h1>Recommended Books</h1>
    <?php
    $Books = [
        " Descrete Mathmatics",
        "Linear Algebra",
        "Digital system design",
    ];

    ?>

    <ul>
        <?php foreach ($Books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>

    </ul>

    <!-- Homework  -->

    <h1>Top Performing Users</h1>
    <?php
    $usernames = [
        "Mamshad",
        "Sabbir",
        "Mahim"
    ]; ?>

    <ul>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>