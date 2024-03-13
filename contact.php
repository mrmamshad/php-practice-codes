    <?php


    $Books = [
        [
            'name' => 'DSD',
            'author' => 'Mahin',
            'release year' => 1997,
            'purchaseUrl' => 'https://example.com',
        ],
        [
            'name' => 'C language',
            'author' => 'Nusrat mubin Ara',
            'release year' => 2023,
            'purchaseUrl' => 'https://example.com',
        ],
        [
            'name' => 'Java',
            'author' => 'Nusrat mubin Ara',
            'release year' => 2024,
            'purchaseUrl' => 'https://example.com',
        ],

    ];
    

     $filteredData = array_filter($Books, function($book){
        return $book['release year'] > 2000;
     } );
    
     $heading = 'Contact Us' ; 
include "views/contact.view.php";