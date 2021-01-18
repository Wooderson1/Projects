<html>
<body>

<style>
.header {
  padding: 0px;
  text-align: center;
  background: #2F4F4F;
  color: #DAA520;
  font-size: 30px;
}
.header1 {
  padding: 10px;
  text-align: center;
  background: #2F4F4F;
  color: #DAA520;
  font-size: 15px;
}
.header2 {
  padding: 20px;
  text-align: center;
  background: #2F4F4F;
  color: #DAA520;
  font-size: 20px;
}
</style>

<?php
    $q = $_GET['name'];
    $con = mysqli_connect("localhost:3306", "root", "","isp");
      if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
      }
   
    mysqli_select_db($con,"isp");
    $sql="SELECT * FROM user WHERE user_name = '".$q."'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
    }
    else if (empty($row)) {
      echo "No username found";
      return;
    }
    else if (strcmp($row['password'], $_GET['password']) != 0) {
      echo "Wrong password";
      return;
    }
    else {
      $sql="SELECT * FROM playlist WHERE owner_name = '".$q."'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);
      mysqli_close($con);
    }

    $playlist_names = array();
    while($row = mysqli_fetch_array($result)) {
      if (in_array($row['playlist_name'], $playlist_names)) {}
        else array_push($playlist_names, $row['playlist_name']);
    }
?>

<script>
function showPlaylist(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","printByPlaylist.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

<div class = "header2"> 
<h1>Choose A Playlist:</h1> 

<form>
<select name="users" onchange="showPlaylist(this.value)">
  <option value="">Playlist:</option>
  <option value="<?php if (isset($playlist_names[0])) echo $playlist_names[0]; else echo "No Playlist"; ?>">
                 <?php if (isset($playlist_names[0])) echo $playlist_names[0]; else echo "No Playlist"; ?></option>
  <option value="<?php if (isset($playlist_names[1])) echo $playlist_names[1] ?>"><?php if (isset($playlist_names[1])) echo $playlist_names[1] ?></option>
  <option value="<?php if (isset($playlist_names[2])) echo $playlist_names[2] ?>"><?php if (isset($playlist_names[2])) echo $playlist_names[2] ?></option>
  <option value="<?php if (isset($playlist_names[3])) echo $playlist_names[3] ?>"><?php if (isset($playlist_names[3])) echo $playlist_names[3] ?></option>
  <option value="<?php if (isset($playlist_names[4])) echo $playlist_names[4] ?>"><?php if (isset($playlist_names[4])) echo $playlist_names[4] ?></option>
  </select>
</form>
</div>
<div id="txtHint"><b>Playlist will be play here</b></div>

</body>
</html>