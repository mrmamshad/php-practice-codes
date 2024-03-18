<?php

$config = require 'config.php';
$db = new Database($config['database']);


// that is the id of notes we want to grab from database 

$id = $_GET['id'];

$notes = $db->query('SELECT * FROM `notes` WHERE id = :id', ['id' => $id]);
// Explanation :
//         select sobkichu from notes table where id = akta value , jai value ta 'id' namok array key r value 



$heading = "My Notes";

require "views/note.view.php";
