
<?php include("./header.php") ?>
<?php include("./dataBase.php");?>
<?php if(isset($_GET["Editid"]) ){
        $id= $_GET["Editid"];
        $sql="SELECT * FROM players WHERE playerid=$id;";
        $result= $conn->query($sql);
          
        if ($result->num_rows > 0) {
            $editeplayer = array();
            $editeplayer[] = $result->fetch_assoc();
        }
}else{
  $editeplayer=[[
        "playerid"=>"",
        "playername"=>"",
        "position"=> "",
        "playerimage"=> "",
        "pac"=> "",
        "sho"=> "",
        "def"=> "",
        "pas"=> "",
        "dri"=> "",
        "phy"=> "",
        "teamid"=> "",
        "cardtype"=> "",
        "nationalityid"=> "",
        "leagueid"=> ""]
    ];
} ?>
<?php include("./errorHandling.php");?>

  <div class="min-h-screen flex">
  <?php include("./sideBar.php") ?>

    <!-- Main Content -->
    <div class="flex-1 py-8 px-6">
      <!-- Home Section -->

      <!-- Add Player Section -->
      <section id="add-player" class="mb-12 w-[156%]">
        <h2 class="text-2xl font-bold text-gray-100 mb-4">Add Player</h2>
        <div class="bg-[#3a3a3a] shadow rounded-lg p-6">
        <form id="form" action="" method="POST" class="flex flex-col items-center m-[53px]">
        <h1 class="text-white m-[30px]"><Span id="label" >ADD</Span>Player</h1>
        <div class="flex items-center gap-8 ">
            <label for="select-Name" class="text-white">Player name:<br>
        <select id="select-Name" name="playerName" class="w-[300px] flex" style="background-color: #1e1e1e;" placeholder="Player Name" >
          <option value="<?php if ($editeplayer[0]['playername']) {echo $editeplayer[0]['playername'];}else{echo "";} ?>" selected><?php
          if ($editeplayer[0]['playername']){
          echo $editeplayer[0]['playername'];}else{echo "";} ;?></option>
        </select>
        <p class="text-red-500 font-sans"><?php echo $error["Name"]; ?></p>
            </label>

            <label for="football-positions" class="text-white">Player Position<br>
            <select name="positions" id="football-positions" name="positions" class="w-[300px] text-white flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="">
            </label>
            <option value="
            <?php if($editeplayer[0]['position']){
              echo $editeplayer[0]['position'] ;
            }else{echo "";} ;?>" selected><?php if($editeplayer[0]['position']){echo $editeplayer[0]['position'];
            }else{echo "please pick position";}
             ;?>
             </option>
                <!-- Goalkeeper -->
  <option value="GK">Goalkeeper (GK)</option>

  <!-- Defenders -->
  <option value="CB">Center-Back (CB)</option>
  <option value="LB">Left Back (LB)</option>
  <option value="RB">Right Back (RB)</option>
  <option value="LWB">Left Wing-Back (LWB)</option>
  <option value="RWB">Right Wing-Back (RWB)</option>
  <option value="SW">Sweeper (SW)</option>

  <!-- Midfielders -->
  <option value="CDM">Defensive Midfielder (CDM)</option>
  <option value="CM">Central Midfielder (CM)</option>
  <option value="CAM">Attacking Midfielder (CAM)</option>
  <option value="LM">Left Midfielder (LM)</option>
  <option value="RM">Right Midfielder (RM)</option>
  <option value="BBM">Box-to-Box Midfielder</option>
  <option value="DPM">Deep-Lying Playmaker</option>

  <!-- Forwards -->
  <option value="ST">Striker (ST)</option>
  <option value="CF">Center Forward (CF)</option>
  <option value="LW">Left Winger (LW)</option>
  <option value="RW">Right Winger (RW)</option>
  <option value="SS">Second Striker (SS)</option>
  <option value="FN">False Nine</option>
              </select>
        <p class="text-red-500 font-sans"><?php echo $error["position"]; ?></p>

        </div>
        <label for="palyer-img" class="text-white ">Player Image:
            <input type="text" id="pImgInput" name="img" placeholder="Enter URL" class="w-[300px] flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?= $editeplayer[0]["playerimage"];?>">
        </label>
        <p class="text-red-500 font-sans"><?php echo $error["img"]; ?></p>

        <div class="flex gap-8">
        <label for="select-league"class="text-white">League:
        <select id="select-league" class="w-[300px] flex " name="league"  style="background-color: #1e1e1e;" placeholder="Pick leauge" value="<?php echo $editeplayer['leagueid'] ;?>">
            <Option value=""></Option>
        </select>
        <p class="text-red-500 font-sans"><?php echo $error["league"]; ?></p>

    </label>
        <label for="select-nation" class="text-white">Nation:
        <select id="select-nation" class="w-[300px] flex " name="nation" style="background-color: #1e1e1e;" placeholder="Pick Nation" value="<?php echo $editeplayer['nationalityid'] ;?>"></select>
        <p class="text-red-500 font-sans"><?php echo $error["nation"]; ?></p>
          
      </label> 
</div>

<div class="flex gap-8">
    <label for="select-version" class="text-white">Version:
        <select id="select-version" class="w-[300px] flex " name="card" style="background-color: #1e1e1e;" placeholder="Pick Version" value="<?php echo $editeplayer['cardtype'] ;?>"></select>
        <p class="text-red-500 font-sans"><?php echo $error["card"]; ?></p>

      </label> 
    <label for="select-club" class="text-white">Club:
        <select id="select-club" class="w-[300px] flex " name="club" style="background-color: #1e1e1e;" placeholder="Pick Club" value="<?php echo $editeplayer['teamid'] ;?>"></select>
        <p class="text-red-500 font-sans"><?php echo $error["club"]; ?></p>

      </label> 
</div>
<h1 class="text-white text-center" >Player Stats</h1>
<div class="flex gap-8">
    <label for="PAC" class="text-white "><span class="stats">PAC:</span><br>
        <input type="number"name="pac" min="30" max="99" step="1" class=" flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?php echo $editeplayer[0]["pac"] ;?>" >
    </label>
    <label for="PAS" class="text-white "><span class="stats">PAS:</span><br>
        <input type="number" name="pas" min="30" max="99" step="1" class=" flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?php echo $editeplayer[0]["pas"] ;?>" >
    </label>
    <label for="DEF" class="text-white "><span class="stats">DEF:</span><br>
        <input type="number" name="def" min="30" max="99" step="1" class=" flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?php echo $editeplayer[0]["def"] ;?>">
    </label>
    <label for="SHO" class="text-white "><span class="stats">SHO:</span><br>
        <input type="number" name="sho" min="30" max="99" step="1" class=" flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?php echo $editeplayer[0]["sho"] ;?>" >
    </label>
    <label for="DRI" class="text-white "><span class="stats">DRI:</span><br>
        <input type="number" name="dri" min="30" max="99" step="1" class=" flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?php echo $editeplayer[0]["dri"] ;?>">
    </label>
    <label for="PHY" class="text-white "><span class="stats">PHY:</span><br>
        <input type="number" name="phy" min="30" max="99" step="1" class=" flex bg-[#1e1e1e] border-white h-[35.6px] font-sans rounded-[3px] border-solid border-[1px]" value="<?php echo $editeplayer[0]["phy"] ;?>" >
    </label>
  </div>
  <p class="text-red-500 font-sans"><?php echo $error["stats"];?></p>
    <Button type="submit" id="btn" name="submit" class="mt-8 bg-[#55cca2] rounded-[20px] w-[50%] h-[50px] font-Poppins hover:bg-[#55cca288]">Save Player</Button>
    </form>
        </div>
      </section>
    </div>
  </div>
<div class="hidden">
</div>
<?php include("./footer.php") ?>

