CREATE planasphere
USE planasphere;

CREATE TABLE plana_members (
  id int(11) unsigned not null auto_increment,
  Name varchar(255),
  FAname varchar(255),
  Team varchar(255) not null,
  ModelNumber varchar(255),
  TwitterID varchar(255),
  primary key (id)
);

CREATE TABLE garage(
    position0 varchar(1024),
    position1 varchar(1024),
    position2 varchar(1024),
    position3 varchar(1024),
    position4 varchar(1024),
    description varchar(1024),
    ModelNumber varchar(1024)
);

CREATE TABLE users(
    sessionid int,
    profileImage  varchar(1024),
    TwitterID varchar(1024),
    ipadress varchar(1024),
    userName varchar(255)
);