<?php

$heading = 'create note.';

// dd($_SERVER);
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    dd($_POST);
}

require 'views/note-ceate.view.php';
