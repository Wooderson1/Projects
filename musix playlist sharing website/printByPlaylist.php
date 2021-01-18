<html>
  <style>
 table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 2px solid black;
  padding: 6px;
}

th {text-align: left;
    padding: 6px; 
    background-color: #DAA520;
}

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
    $q = $_GET['q'];
    $con = mysqli_connect("localhost:3306", "root", "","isp");
      if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
      }
   
    mysqli_select_db($con,"isp");
    $sql="SELECT * FROM playlist WHERE playlist_name = '".$q."'";
    $result = mysqli_query($con,$sql);

    # If it is empty, it was called with following username, not playlist name
      if (mysqli_num_rows($result) == 0) {
        $sql="SELECT * FROM playlist WHERE owner_name = '".$q."'";
        $result = mysqli_query($con,$sql);
      }
    $owner = "";
    echo "<table>
    <tr>
    <th>User Owner</th>
    <th>Playlist</th>
    <th>Song</th>
    <th>Artist</th>
    <th>Release Date</th>
    <th>Genre</th>
    <th>Youtube Link</th>
    </tr>";
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['owner_name'] . "</td>";
        echo "<td>" . $row['playlist_name'] . "</td>";
        echo "<td>" . $row['song_name'] . "</td>";
        echo "<td>" . $row['song_artist'] . "</td>";
        echo "<td>" . $row['song_release'] . "</td>";
        echo "<td>" . $row['song_genre'] . "</td>";
        echo "<td>" . '<a href="'.$row['youtube_link'].'">'.$row['youtube_link'].'</a>'."</td>";
        echo "</tr>";
        $owner = $row['owner_name'];
      }
    echo "</table>";
    $sql="SELECT * FROM following WHERE follower = '".$owner."'";
    $result = mysqli_query($con,$sql);

    $following = array();
    while($row = mysqli_fetch_array($result)) {
    array_push($following, $row['followed']);
    }
  mysqli_close($con);
?>

<div class = "header1"> 
<h4>View playlists of other users followed:</h4>
<form>
<select name="following" onchange="showPlaylist(this.value)">
  <option value="">Following:</option>
  <option value="<?php if (isset($following[0])) echo $following[0] ?>"><?php if (isset($following[0])) echo $following[0] ?></option>
  <option value="<?php if (isset($following[1])) echo $following[1] ?>"><?php if (isset($following[1]))echo $following[1] ?></option>     
  <option value="<?php if (isset($following[2])) echo $following[2] ?>"><?php if (isset($following[2]))echo $following[2] ?></option>
  <option value="<?php if (isset($following[3])) echo $following[3] ?>"><?php if (isset($following[3]))echo $following[3] ?></option>
  <option value="<?php if (isset($following[4])) echo $following[4] ?>"><?php if (isset($following[4]))echo $following[4] ?></option>
  <option value="<?php if (isset($following[5])) echo $following[5] ?>"><?php if (isset($following[5]))echo $following[5] ?></option>
  </select>
</form>
<div id="txtHint"><b></b></div>
Or
<br><br>
<form>
    <button value="<?php echo $owner ?>" name = "owner" type= "submit" formaction = "editPlaylist.php">Change Playlist</button>
</form>

</div>


</body>
</html>