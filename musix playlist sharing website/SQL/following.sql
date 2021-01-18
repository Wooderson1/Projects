USE isp;
CREATE TABLE following (
  follower varchar(255) NOT NULL,
  following varchar(255) NOT NULL
);

# Mark Follows Everyone
INSERT INTO following VALUES("Mark", "David");
INSERT INTO following VALUES("Mark", "Emma");
INSERT INTO following VALUES("Mark", "Robert");
INSERT INTO following VALUES("Mark", "Jim");


INSERT INTO following VALUES("David", "Mark");
INSERT INTO following VALUES("David", "Jim");

INSERT INTO following VALUES("Jim", "Emma");
INSERT INTO following VALUES("Jim", "David");
INSERT INTO following VALUES("Jim", "Robert");

INSERT INTO following VALUES("Robert", "Emma");
INSERT INTO following VALUES("Robert", "Jim");

INSERT INTO following VALUES("Emma", "Mark");
INSERT INTO following VALUES("Emma", "David");