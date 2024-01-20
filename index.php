<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
   
   <?php
        $greeding = "Hi ";
        // echo "$greeding  Everyone";
        $name = "Dark Matter";
        $read = true;
        
        if ($read) {
           $message = "you have read the book";
        }
        else {
            $message = "you have  not read the book";
        }
    ?>
    
    <h1>You have read <?php echo $name  ?></h1>
    <h1><?= $message ?></h1>
</body>
</html>