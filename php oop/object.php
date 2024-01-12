<!--   A class without object is nothing. -->
   <!-- class is a structure, and reuseable metarial. 
            object use repeatedly a class . and it helps to   increase codes reuseability.     -->

<?php 
include "class.php";
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>