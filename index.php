<?php

require 'functions.php';
// require 'router.php';


require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database']);
$id = $_GET['id_'];
$query = "SELECT * FROM post WHERE id = {$id} ";
dd($query);
$posts = $db->query($query);

// dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
};
