<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    
    <ul>
        <?php foreach ($filteredData as $Book) : ?>
           
                <li><a href="$Book['purchaseUrl']">
                        <?= $Book['name']; ?> (<?= $Book['release year'] ?>) -By <?= $Book['author']; ?>
                    </a></li>
            
        <?php endforeach ?>
    </ul>

</body>

</html>