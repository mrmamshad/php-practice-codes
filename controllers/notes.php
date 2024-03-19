<?php

$config = require 'config.php';
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM `notes` WHERE user_id = 2');

// foreach ($notes as $post) {
//     echo "<li>" . $post['body'] . "</li>";
// };


// dd($notes);
// dd($notes);
// $notes->fetchAll(PDO::FETCH_ASSOC);

// dd($db);

$heading = "My Notes";

require "views/notes.view.php";
