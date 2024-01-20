<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Your Book List</h1>
    <?php

     $Books = [
        "Book1",
        "Book2",
        "Book3",
     ]
    ?>
    <ul>
        <?php foreach($Books as $Book) :?>
            <li><?= $Book?></li>
        <?php endforeach; ?>    
    </ul>
</body>
</html>