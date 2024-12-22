CREATE DATABASE playerdb;
USE playerdb;


CREATE TABLE team (
    teamid INT AUTO_INCREMENT PRIMARY KEY,
    teamname VARCHAR(255) NOT NULL,
    teamlogo VARCHAR(255) NOT NULL
);

CREATE TABLE nationality (
    nationalityid INT AUTO_INCREMENT PRIMARY KEY,
    nationalityname VARCHAR(255) NOT NULL,
    flag VARCHAR(255) NOT NULL
);

CREATE TABLE league (
    leagid INT AUTO_INCREMENT PRIMARY KEY,
    leagname VARCHAR(255) NOT NULL,
    leaglogo VARCHAR(255) NOT NULL
);
CREATE TABLE players (
    playerid INT AUTO_INCREMENT PRIMARY KEY,
    playername VARCHAR(255) NOT NULL,
    position VARCHAR(50) NOT NULL,
    playerimage VARCHAR(255) NOT NULL,
    pac INT NOT NULL,
    sho INT NOT NULL,
    def INT NOT NULL,
    pas INT NOT NULL,
    dri INT NOT NULL,
    phy INT NOT NULL,
    teamid INT,
    nationalityid INT,
    leagid INT,
    FOREIGN KEY (teamid) REFERENCES team(teamid),
    FOREIGN KEY (nationalityid) REFERENCES nationality(nationalityid),
    FOREIGN KEY (leagid) REFERENCES league(leagid)
);
