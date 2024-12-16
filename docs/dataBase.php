<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="playerdb";


    $conn= new mysqli($db_server,$db_user,$db_pass,$db_name);   
    if ($conn->connect_error) {
        die("error". $conn->connect_error);
    }
    $sql= "SELECT players.playerid,players.playername,players.position,players.playerimage,players.pac,players.sho,players.def,players.pas,players.dri,players.phy,team.teamName team,team.teamLogo teamLogo,nationality.nationalityname nationlity,nationality.flag flag,league.leaguename leauge,league.leaguelogo LeagueLogo
FROM players JOIN team JOIN nationality JOIN league
ON players.teamid=team.teamID 
AND players.nationalityid=nationality.nationalityid
AND players.leagueid=league.leagueid;";
    $result= $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $players[]= $row;
        }
        }
        $encodedData=json_encode($players,JSON_PRETTY_PRINT||JSON_UNESCAPED_UNICODE);

        file_put_contents("../jasonFiles/playersDB.json", '');
        file_put_contents("../jasonFiles/playersDB.json", $encodedData);
    
   
    
    if(isset($_POST["submit"])){
        $playerNAme=$_POST["playerName"];
        $playerPosition=$_POST["positions"];
        $playerimg=$_POST["img"];
        $playerleague=$_POST["league"];
        $playernation=$_POST["nation"];
        $playerclub=$_POST["club"];
        $playercard=$_POST["card"];
        $playerpac=$_POST["pac"];
        $playerpas=$_POST["pas"];
        $playerdef=$_POST["def"];
        $playersho=$_POST["sho"];
        $playerdri=$_POST["dri"];
        $playerphy=$_POST["phy"];
    
    
        $stmt = $conn->prepare("INSERT INTO players(playername,position,playerimage,pac,sho,def,pas,dri,phy,teamid,cardtype,nationalityid,leagueid) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?) ");

        $stmt->bind_param("sssiiiiiiisii", $playerNAme,$playerPosition,$playerimg,$playerpac,$playersho,$playerdef,$playerpas,$playerdri,$playerphy,$playerclub,$playercard,$playernation,$playerleague);

        $stmt->execute();

        $stmt->close();
        $conn->close();
        
    }


?>