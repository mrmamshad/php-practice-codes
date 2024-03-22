<?php


use Core\Database;

$config = require base_path('config.php');
require base_path('Core/Database.php');
$db = new Database($config['database']);

$heading = "Notes";

$notes = $db->query('select * from notes where user_id = 1')->get();

require views("notes/index.view.php", [
    'headings' => 'Notes',
    'notes' => $notes,
]);
