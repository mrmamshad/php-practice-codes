<html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>


 //  In the welcome.php file we can grab data from this form
     //  by  this.  1. <?php echo $_POST["name"];
      //   2. <?php echo $_POST["email"];