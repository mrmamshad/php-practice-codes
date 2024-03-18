<?php

require 'functions.php';
// require 'router.php';


require 'Database.php';

$config = require 'config.php';

$db = new Database($config['database']);
$id = $_GET['id_'];
$query = "SELECT * FROM post WHERE id = ? ";
// dd($query);
$posts = $db->query($query, [$id]);

//  dd($posts);
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
};
