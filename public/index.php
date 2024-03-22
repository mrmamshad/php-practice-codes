<?php

const BASE_PATH = __DIR__ . '/../';

// var_dump(BASE_PATH);


require BASE_PATH . 'Core/functions.php';


require base_path('router.php');
require base_path('controllers/notes.php');
require base_path('Core/Database.php');


spl_autoload_register(function ($class) {
    require base_path("core/{$class}.php");
});


// $id = $_GET['id_'];
// $query = 'SELECT * FROM `notes` WHERE user_id = 1';
// dd($query);
// $posts = $db->query($query, [$id]);

// dd($posts);
// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// };
