<?php include("dataBase.php");?>
<?php
$playerNAme="";
$playerPosition="";
$playerimg="";
$playerleague="";
$playernation="";
$playerclub="";
$playercard="";
$playerpac="";
$playerpas="";
$playerdef="";
$playersho="";
$playerdri="";
$playerphy="";

$error=["Name"=>"",
"position"=> "",
"img"=>"",
"league"=>"",
"nation"=>"",
"card"=>"",
"club"=>"",
"stats"=>""]; 
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
    $error=["Name"=>"",
        "position"=> "",
        "img"=>"",
        "league"=>"",
        "nation"=>"",
        "card"=>"",
        "club"=>"",
        "stats"=>""];  ;
    if($playerNAme==''){
        $error['Name']= 'fill the player name';
    }
    if($playerPosition==''){
        $error['position']= 'fill the player postion';
    }
    if(empty($playerimg)){
        $error['img']= 'fill the player image';
    }
    if($playerleague==''){
        $error['league']= 'fill the player league';
    }
    if($playernation==''){
        $error['nation']= 'fill the player nation';
    }
    if($playercard==''){
        $error['card']= 'fill the player card';
    }
    if($playerclub== ''){
        $error['club']= 'fill the player club';
    }
    if(empty($_POST["pac"])||empty($_POST["pas"])||empty($_POST["def"])||empty($_POST["sho"])||empty($_POST["dri"])||empty($_POST["phy"])){
        $error["stats"] = "please verify the stats inputs are filled";
    }else if($_POST["pac"]<30&&$_POST["pac"]>99||$_POST["def"]<30&&$_POST["def"]>99||$_POST["sho"]<30&&$_POST["sho"]>99||$_POST["dri"]<30&&$_POST["dri"]>99||$_POST["pas"]<30&&$_POST["pas"]>99||$_POST["phy"]<30&&$_POST["phy"]>99 ){
        $error["stats"] = "please verify the stats inputs are between 30-99";

    }
    
    else{
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
        
            if(isset($_GET['Editid'])){ 
                $id=$_GET['Editid'] ;
                $stmt = $conn->prepare("UPDATE players SET playername=?,position=?,playerimage=?,pac=?,sho=?,def=?,pas=?,dri=?,phy=?,teamid=?,cardtype=?,nationalityid=?,leagueid=?
WHERE playerid=?;");
            $stmt->bind_param("sssiiiiiiisiii", $playerNAme,$playerPosition,$playerimg,$playerpac,$playersho,$playerdef,$playerpas,$playerdri,$playerphy,$playerclub,$playercard,$playernation,$playerleague,$id);
            }else{
            $stmt = $conn->prepare("INSERT INTO players(playername,position,playerimage,pac,sho,def,pas,dri,phy,teamid,cardtype,nationalityid,leagueid) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?) ");
            $stmt->bind_param("sssiiiiiiisii",   $playerNAme,$playerPosition,$playerimg,$playerpac,$playersho,$playerdef,$playerpas,$playerdri,$playerphy,$playerclub,$playercard,$playernation,$playerleague);
            }
  
            $stmt->execute(); 
            header("location:./showPlayer.php");
    
            $stmt->close();
            $conn->close();
            
        }
    
    
}

?>