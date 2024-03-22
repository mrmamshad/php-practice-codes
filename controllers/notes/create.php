<?php

require base_path("Core/Validator.php");

$config = require  base_path('config.php');
require  base_path('Core/Database.php');
$db = new Database($config['database']);

$heading = "Create  Note";


$errors = [];

// dd(validator::email('mamshad@example.com'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    // dd(strlen(trim($_POST['body'])));

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
require views("notes/create.view.php", [
    'headings' => 'Create Note',
    'errors' => $errors,
]);
