<html>
<body>

<style>
.header {
  padding: 60px;
  text-align: center;
  background: #2F4F4F;
  color: #DAA520;
  font-size: 30px;
}
</style>

<div class = "header">
<h4>Enter User Info</h4>

<form action="createAccount.php" method="get">
Username: <input type="text" name="name"><br>
Password: <input type="text" name="password"><br>
Email: <input type="text" name="email"><br><br>
<input type="submit">
</form>

<?php
  $name = "";
  $password = "";
  if (isset($_GET['name'])) {
  $name = $_GET['name'];
  $password = $_GET['password'];
  $email = $_GET['email'];
  $con = mysqli_connect("localhost:3306", "root", "","isp");
      if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
      }
   
      mysqli_select_db($con,"isp");
      $sql="INSERT INTO user VALUES('".$name."','".$password."','".$email."', 0, 0, 0)";
      
      if ($con->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
    }
?>

<form>
 <button type="submit" formaction="login.html">Done</button>
</form>

</body>
</html>