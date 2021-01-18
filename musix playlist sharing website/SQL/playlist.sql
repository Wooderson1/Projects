USE isp;
CREATE TABLE playlist (
  owner_name varchar(255) NOT NULL,
  playlist_name varchar(255) NOT NULL,
  song_name varchar(255) NOT NULL,
  song_artist varchar(255) NOT  NULL,
  song_release int(4) NOT NULL,
  song_genre varchar(255) NOT NULL,
  youtube_link varchar(255)
);

# Marks playlist
# Rock
INSERT INTO playlist VALUES ("Mark", "Marks Rock Playlist", "Lithium", "Nirvana", "1991", "Alternative Rock", 
  "https://www.youtube.com/watch?v=LYfnBsaTVEo&ab_channel=D9K9DK9");

INSERT INTO playlist VALUES ("Mark", "Marks Rock Playlist", "Dani California", "Red Hot Chili Peppers", "2006", "Alternative Rock", 
  "https://www.youtube.com/watch?v=4FkfyssnHqU&ab_channel=RedHotChiliPeppers-Topic");

INSERT INTO playlist VALUES ("Mark", "Marks Rock Playlist", "Come As You Are", "Nirvana", "1991", "Alternative Rock", 
  "https://www.youtube.com/watch?v=vabnZ9-ex7o&ab_channel=NirvanaVEVO");

INSERT INTO playlist VALUES ("Mark", "Marks Rock Playlist", "Heart-Shaped Box", "Nirvana", "1993", "Alternative Rock", 
  "https://www.youtube.com/watch?v=n6P0SitRwy8&ab_channel=NirvanaVEVO");

INSERT INTO playlist VALUES ("Mark", "Marks Rock Playlist", "Tell Me Baby", "Red Hot Chili Peppers", "2006", "Alternative Rock", 
  "https://www.youtube.com/watch?v=bP_GH1jezEY&ab_channel=RHCPmusic1");

INSERT INTO playlist VALUES ("Mark", "Marks Rock Playlist", "Icky Thump", "The White Stripes", "2007", "Alternative Rock", 
  "https://www.youtube.com/watch?v=1OjTspCqvk8&ab_channel=TheWhiteStripes");

# POP
INSERT INTO playlist VALUES ("Mark", "Marks Pop Playlist", "My Type", "Saint Motel", "2014", "Indie Pop", 
  "https://www.youtube.com/watch?v=IyVPyKrx0Xo&ab_channel=SaintMotel");

INSERT INTO playlist VALUES ("Mark", "Marks Pop Playlist", "Cold Cold Man", "Saint Motel", "2014", "Indie Pop", 
  "https://www.youtube.com/watch?v=MaUXpJ8Hvj8&ab_channel=DennyPappalardo");

INSERT INTO playlist VALUES ("Mark", "Marks Pop Playlist", "Van Horn", "Saint Motel", "2019", "Indie Pop", 
  "https://www.youtube.com/watch?v=ir6o8IqlV8w&ab_channel=SaintMotel-Topic");

INSERT INTO playlist VALUES ("Mark", "Marks Pop Playlist", "Bang!", "AJR", "2006", "Indie Pop", 
  "https://www.youtube.com/watch?v=4THFRpw68oQ&ab_channel=AJR");

INSERT INTO playlist VALUES ("Mark", "Marks Pop Playlist", "Back From the Edge", "James Arthur", "2006", "Pop", 
  "https://www.youtube.com/watch?v=jGlL2jBBhEk&ab_channel=JamesArthur-Topic");


# David PLaylist
# Electronic 
INSERT INTO playlist VALUES ("David", "Davids Electronic Playlist", "A Moment Apart", "Odesza", "2017", "Electronic Duo",
  "https://www.youtube.com/watch?v=xarC5jAiO7w&ab_channel=ODESZA");

INSERT INTO playlist VALUES ("David", "Davids Electronic Playlist", "Higher Ground (feat. Naomi Wild)", "Odesza, Naomi Wild", "2017", "Electronic Duo", 
  "https://www.youtube.com/watch?v=wBOsRNNDx5U&ab_channel=ChillNation");

INSERT INTO playlist VALUES ("David", "Davids Electronic Playlist", "La Ciudad", "Odesza", "2017", "Electronic Duo",
  "https://www.youtube.com/watch?v=ZUn64eKKQg0&ab_channel=ODESZA");

# Rock
INSERT INTO playlist VALUES ("David", "Davids Rock Playlist", "Ramble On", "Led Zeppelin", "1990", "Rock", 
  "https://www.youtube.com/watch?v=8oWfHcl94k4&ab_channel=LedZeppelin-Topic");

INSERT INTO playlist VALUES ("David", "Davids Rock Playlist", "Black Dog", "Led Zeppelin", "1971", "Rock", 
  "https://www.youtube.com/watch?v=yBuub4Xe1mw&ab_channel=LedZeppelin-Topic");

INSERT INTO playlist VALUES ("David", "Davids Rock Playlist", "Stairway To Heaven", "Led Zeppelin", "1971", "Rock", 
  "https://www.youtube.com/watch?v=QkF3oxziUI4&ab_channel=LedZeppelin");


# Emmas Playlist
INSERT INTO playlist VALUES ("Emma", "Emmas Indie Pop Playlist", "Clueless", "The Marias", "2018", "Indie Pop", 
  "https://www.youtube.com/watch?v=F8D9kspzXyE&ab_channel=TheLazylazyme");

INSERT INTO playlist VALUES ("Emma", "Emmas Indie Pop Playlist", "anemone", "slenderbodies", "2017", "Indie Pop", 
  "https://www.youtube.com/watch?v=fXgczro95lk&ab_channel=slenderbodies");

INSERT INTO playlist VALUES ("Emma", "Emmas Indie Pop Playlist", "Lady Lie", "Rainbow Kitten Surprise", "2015", "Indie Pop", 
  "https://www.youtube.com/watch?v=7rEZGCVOsf0&ab_channel=RainbowKittenSurprise");

INSERT INTO playlist VALUES ("Emma", "Emmas Indie Pop Playlist", "Magnet", "Modesta", "2016", "Indie Pop", 
  "https://www.youtube.com/watch?v=mCMXFhqgnWo&ab_channel=IndieMusicDimension");


# Robert Playlist
INSERT INTO playlist VALUES ("Robert", "Roberts Rock Playlist", "Believer", "Imagine Dragons", "2017", "Electronic Rock", 
  "https://www.youtube.com/watch?v=7wtfhZwyrcc&ab_channel=ImagineDragonsVEVO");

INSERT INTO playlist VALUES ("Robert", "Roberts Rock Playlist", "Natural", "Imagine Dragons", "2018", "Electronic Rock", 
  "https://www.youtube.com/watch?v=V5M2WZiAy6k&ab_channel=ImagineDragonsVEVO");

INSERT INTO playlist VALUES ("Robert", "Roberts Rock Playlist", "Polaroid", "Imagine Dragons", "2015", "Electronic Rock", 
  "https://www.youtube.com/watch?v=UuLTEUgwEXo&ab_channel=ImagineDragons-Topic");


# Jim Playlist
INSERT INTO playlist VALUES ("Jim", "Jims Chill Playlist", "Midnight Lovers", "Kicktracks", "2018", "Hip-Hop", 
  "https://www.youtube.com/watch?v=-jrPzm3iyEo&ab_channel=CzechVibesSound");

INSERT INTO playlist VALUES ("Jim", "Jims Chill Playlist", "Call me", "90sFlav", "2018", "Hip-Hop", 
  "https://www.youtube.com/watch?v=-tFd3rGkMNw&ab_channel=90sFlav-Topic");

INSERT INTO playlist VALUES ("Jim", "Jims Chill Playlist", "High Rollin'", "Pakilte", "2019", "Hip-Hop", 
  "https://www.youtube.com/watch?v=zUSGXuwFzoc&ab_channel=Paklite-Topic");


