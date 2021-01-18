USE isp;
CREATE TABLE user (
  user_name varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  following_count int,
  playlist_count int,
  followed_count int,
  UNIQUE(user_name)
);

INSERT INTO user VALUES ("Mark", "password", "myemail@gmail.com", 0, 0, 0);
INSERT INTO user VALUES ("David", "password", "davidemail@gmail.com", 0, 0, 0);
INSERT INTO user VALUES ("Emma", "password", "emmaemail@gmail.com", 0, 0, 0);
INSERT INTO user VALUES ("Robert", "password", "robertemail@gmail.com", 0, 0, 0);
INSERT INTO user VALUES ("Jim", "password", "jimemail@gmail.com", 0, 0, 0);
