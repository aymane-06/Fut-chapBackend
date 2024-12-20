<?php
include("./conect.php");
$sql = "SELECT 
players.playerid,
players.playername,
players.position,
players.playerimage,
players.cardtype,
players.pac,
players.sho,
players.def,
players.pas,
players.dri,
players.phy,
FLOOR((players.pac+players.sho+players.def+players.pas+players.dri+players.phy)/6) rating,
team.teamName AS team,
team.teamLogo AS teamLogo,
nationality.nationalityname AS nationality,
nationality.flag AS flag,
league.leaguename AS league,
league.leaguelogo AS leagueLogo
FROM players
LEFT JOIN team ON players.teamid = team.teamID
LEFT JOIN nationality ON players.nationalityid = nationality.nationalityid
LEFT JOIN league ON players.leagueid = league.leagueid;";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
        $players[]=$row;
}

echo json_encode($players);

?>