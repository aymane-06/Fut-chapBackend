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
        $error['Name']= 'fille the player name';
    }
    if($playerPosition==''){
        $error['position']= 'fille the player postion';
    }
    if(empty($playerimg)){
        $error['img']= 'fille the player image';
    }
    if($playerleague==''){
        $error['league']= 'fille the player league';
    }
    if($playernation==''){
        $error['nation']= 'fille the player nation';
    }
    if($playercard==''){
        $error['card']= 'fille the player card';
    }
    if($playerclub== ''){
        $error['club']= 'fille the player club';
    }
    if(empty($_POST["pac"])||empty($_POST["pas"])||empty($_POST["def"])||empty($_POST["sho"])||empty($_POST["dri"])||empty($_POST["phy"])){
        $error["stats"] = "pleas verify the stats inputs are filde";
    }else if($_POST["pac"]<30&&$_POST["pac"]>99||$_POST["def"]<30&&$_POST["def"]>99||$_POST["sho"]<30&&$_POST["sho"]>99||$_POST["dri"]<30&&$_POST["dri"]>99||$_POST["pas"]<30&&$_POST["pas"]>99||$_POST["phy"]<30&&$_POST["phy"]>99 ){
        $error["stats"] = "pleas verify the stats inputs are between 30-99";

    }
}

?>