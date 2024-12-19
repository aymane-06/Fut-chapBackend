<?php
   include("./conect.php");
    $players = [];
    global $editeplayer;
            // $editeplayer=[[
            //     "playerid"=>"",
            //     "playername"=>"",
            //     "position"=> "",
            //     "playerimage"=> "",
            //     "pac"=> "",
            //     "sho"=> "",
            //     "def"=> "",
            //     "pas"=> "",
            //     "dri"=> "",
            //     "phy"=> "",
            //     "teamid"=> "",
            //     "cardtype"=> "",
            //     "nationalityid"=> "",
            //     "leagueid"=> ""]
            // ];

    
    
    $sql= "SELECT 
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
    $result= $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           global $players;
             $players[]= $row;
        }
    }
    $encodedData=json_encode($players,JSON_PRETTY_PRINT||JSON_UNESCAPED_UNICODE);


    // json machi jason 
    file_put_contents("../jasonFiles/playersDB.json", '');
    file_put_contents("../jasonFiles/playersDB.json", $encodedData);


    if(isset($_GET['Deleteid'])){
        $id= $_GET['Deleteid'];
        $sql= "DELETE FROM players WHERE playerid=$id; ";
        $result= $conn->query($sql);

    }
    if(isset($_GET["editid"]) ){
        $id= $_GET["editid"];
        
        header("location:./AddPlayer.php?Editid=$id");
}


?>