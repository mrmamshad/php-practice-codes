<?php

$heading = 'create note.';

$config = require('config.php');
$db = new Database($config['database']);

// dd($_SERVER);
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $db->query('INSERT INTO `notes` (`body`, `user_id`) VALUES
(:body, :user_id)', [
        'body' => $_POST['about'],
        'user_id' => 2,
    ]);
}

require 'views/note-ceate.view.php';
