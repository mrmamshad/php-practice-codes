<?php

$config = require 'config.php';
$db = new Database($config['database']);

$currentUserId = 2;
// that is the id of notes we want to grab from database 

// $id = $_GET['id'];

$notes = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
]);

if (!$notes) {
    abort();
};
// dd($notes);


if ($notes[0]["user_id"] !== $currentUserId) {
    abort(403);
}


// Explanation :
//         select sobkichu from notes table where id = akta value , jai value ta 'id' namok array key r value 



$heading = "My Notes";

require "views/note.view.php";
