CREATE TABLE user (
email VARCHAR(256) NOT NULL PRIMARY KEY,
password VARCHAR(64) NOT NULL,
access INTEGER(1)
);

CREATE TABLE  roster (
playerName VARCHAR(256) NOT NULL PRIMARY KEY,
playerNumber VARCHAR(64) NOT NULL,
playerPosition VARCHAR(256) NOT NULL,
playerYear VARCHAR(256) NOT NULL
);

CREATE TABLE upcoming (
upTournament VARCHAR(256) NOT NULL PRIMARY KEY,
upLocation VARCHAR(256) NOT NULL,
upResult VARCHAR(256) NOT NULL
);

CREATE TABLE practices (
practiceDay VARCHAR(256) NOT NULL PRIMARY KEY,
practiceTime VARCHAR(256) NOT NULL,
practiceLocation VARCHAR(256) NOT NULL
);
