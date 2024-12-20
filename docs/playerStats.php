<?php include("./header.php") ?>
<?php include("./sideBar.php") ?>
<?php include("./conect.php") ;
if(isset($_GET["id"])){
    $id = $_GET["id"];
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
    team.teamName AS team,
    team.teamLogo AS teamLogo,
    nationality.nationalityname AS nationality,
    nationality.flag AS flag,
    league.leaguename AS league,
    league.leaguelogo AS leagueLogo
FROM players
LEFT JOIN team ON players.teamid = team.teamID
LEFT JOIN nationality ON players.nationalityid = nationality.nationalityid
LEFT JOIN league ON players.leagueid = league.leagueid
WHERE players.playerid=$id;";
$result = mysqli_query($conn, $sql);
$playerstats=mysqli_fetch_assoc($result);
}
$reating=intval(($playerstats["pac"]+$playerstats["sho"]+$playerstats["def"]+$playerstats["pas"]+$playerstats["dri"]+$playerstats["phy"])/6);

?>
<section id="playerStats" class="flex flex-col w-full gap-32">
<h1 class="text-center w-full h-[30px] block text-4xl font-normal">Player Stats:</h1>

<div id="ShowCard" class=" w-full h-[360px] flex  items-center gap-32">
            <div id="cardplace">
            <div id="cardTemplate" class=" relative top-8 text-center  w-[99%] " draggable="true">
                <img id="cardBG" class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] w-[260px] " src="<?=$playerstats["cardtype"]?>" alt="">
                <div id="data_container" class="data_container flex flex-col items-center absolute top-0 w-full" style="gap:150px;" >
                <div  class=" flex flex-col items-center justify-center relative top-0 rating" style="align-self: start;top: 75px;left: 40px;" >
                    <h1 class=" text-[#fff]  text-[20px] -mb-[10px] color" id="card-rating"><?=$reating;?></h1>
                    <h1 class=" text-[#fff] color" id="post"><?=$playerstats["position"]?></h1>
                </div>
                <div  class=" w-[80%] top-[40px] right-[14px] absolute">
                    <img class="w-full" id="player_img" src="<?=$playerstats["playerimage"]?>" alt="">
                </div>
                <div id="stat" class="flex flex-col items-center " style="z-index: 0;">
                <div class=" bottom-[130px] left-[80px] text-[30px]">
                    <h1 id="card-name" class="color text-[26px] text-black"><?=$playerstats["playername"]?></h1>
                </div>
                <div id="stats" class=" text-white flex gap-1 bottom-20 left-[38px]"> 
                    <div>
                    <span id="c-PAC" class="font-sans cStats color">PAC</span>  
                    <div id="card-pac" class="color"><?=$playerstats["pac"]?></div>
                </div>
                <div>
                    <span id="c-SHO" class="font-sans cStats color">SHO</span>  
                    <div id="card-sho" class="color"><?=$playerstats["sho"]?></div>
                </div>
                <div>
                    <span id="c-PAS" class="font-sans cStats color">PAS</span>  
                    <div id="card-pas" class="color"><?=$playerstats["pas"]?></div>
                </div>
                <div>
                    <span id="c-DRI" class="font-sans cStats color">DRI</span>   
                    <div id="card-dri" class="color"><?=$playerstats["dri"]?></div>
                </div>
                <div>
                    <span id="c-DEF" class="font-sans cStats color">DEF</span>  
                    <div id="card-def" class="color"><?=$playerstats["def"]?></div>
                </div>
                <div>
                    <span id="c-PHY" class="font-sans cStats color">PHY</span>  
                    <div id="card-phy" class="color"><?=$playerstats["phy"]?></div>
                </div>
            </div>
            <div id="cardLogos" class="flex  gap-2 bottom-[52px] left-[92px]">
                <img id="NatioFlag" height="20" width="20" src="<?=$playerstats["flag"]?>" alt="">
                <img id="leagueLogo" height="20" width="20" src="<?=$playerstats["leagueLogo"]?>" alt="">
                <img id="teamLogo" height="20" width="20" src="<?=$playerstats["teamLogo"]?>" alt="">
            </div>
            <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans hidden">GK</div>
        </div>
        </div>
        </div>
    </div>

    <div style="width: 500px;">
    <canvas id="acquisitions"></canvas>
  </div>

        </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
      const ctx = document.getElementById('acquisitions').getContext('2d');

      new Chart(ctx, {
        type: 'radar', 
        data: {
          labels: ['PAC', 'SHO', 'PAS', 'DRI', 'DEF', 'PHY'], 
          datasets: [{
            label: 'Rating',
            data: [<?=$playerstats["pac"]?>, <?=$playerstats["sho"]?>, <?=$playerstats["pas"]?>, <?=$playerstats["dri"]?>, <?=$playerstats["def"]?>, <?=$playerstats["phy"]?>], 
            backgroundColor: 'rgba(54, 162, 235, 0.2)', 
            borderColor: 'rgba(54, 162, 235, 1)', 
            borderWidth: 2 
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top', 
            },
            title: {
              display: true,
              text: 'Player Stats:' 
            }
          },
          scales: {
            r: {
              beginAtZero: true,
              max: 100
            }
          }
        }
      });
    });
  </script>



<?php include("./footer.php") ?>
