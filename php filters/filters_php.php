 Filters = Php filters are used to validate and sanitize users input . 
          there are two main types of filtering. 

          1. validation = validation is used to check if data meet
           certain qualifications.but will not change data itself.
           
          2. senitization = remove inappropriate data, in users data.

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>  ;
<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>   