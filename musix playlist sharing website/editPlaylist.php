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
  padding: 20px;
  text-align: justify;
  background: #2F4F4F;
  color: #DAA520;
  font-size: 20px;
}

</style>

<div class = "header"> 

<h4>Enter Song Info:</h4>

<form action="addSong.php" method="get">
  Enter Playlist Name, New or Existing: <input type="text" name="playlist"><br>
  Song Name: <input type="text" name="name"><br>
  Artist: <input type="text" name="artist"><br>
  Release Date: <input type="text" name="release"><br>
  Genre: <input type="text" name="genre"><br>
  Youtube Link: <input type="text" name="link"><br>
  <button value = "<?php echo $_GET['owner'] ?>" name = "owner" type="submit">Add</button>
  <button value = "<?php echo $_GET['owner'] ?>" name = "owner" type="submit" formaction="deleteSong.php">Delete</button>
</form>   



</div>

</body>
</html>