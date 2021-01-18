<html>
  <body>
  <style>
  .header {
  padding: 20px;
  text-align: justify;
  background: #2F4F4F;
  color: #DAA520;
  font-size: 20px;
  }
</style>

    <?php
      $owner = $_GET['owner'];
      $playlist = $_GET['playlist'];
      $song = $_GET['name'];
      $artist = $_GET['artist'];
      $release = $_GET['release'];
      $genre = $_GET['genre'];
      $link = $_GET['link'];


      $con = mysqli_connect("localhost:3306", "root", "","isp");
      if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
      }
   
      mysqli_select_db($con,"isp");
      $sql="DELETE FROM playlist WHERE song_name = '".$song."'";
      
      if ($con->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $con->error;
      }
      $sql="SELECT password FROM user WHERE user_name='".$owner."'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      $password = $row['password'];
    ?>
<div class = "header">
  <h>Deleted Song</h>
<form>
 <button value="<?php echo $owner?>" name ='name' type="submit" formaction="login.php" >Return to Playlists</button>
 <input type="hidden" name = "password" value= "<?php echo $password?>"></input>
</form>
</div>

</body>
</html>