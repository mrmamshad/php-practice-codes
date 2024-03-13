<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function-homework</title>
</head>
<body>
    <?php 
       
       $Movies = [
        [
            'name' => 'Flash',
            'release date' => 2024,
        ],
        [
            'name' => 'Avengers end game',
            'release date' => 2022,
        ],
        [
            'name' => 'Titanic',
            'release date' => 1997,
        ],
        [
            'name' => 'unknown',
            'release date' => 1990,
        ],
    ];
    
    function filterForMovies($Movies ){
        $filteredMovies = [];
        foreach($Movies as $Movie){
        if($Movie['release date'] >= 2000){
            $filteredMovies[] = $Movie;
        }
    }
     return $filteredMovies;
    }
    
    ?>
    <ul>
        <?php foreach(filterForMovies($Movies) as $Movie) :?>
            <li><?= $Movie['name']?> (<?= $Movie['release date']?>)  </li>
        <?php endforeach ;?>    
    </ul>
</body>
</html>