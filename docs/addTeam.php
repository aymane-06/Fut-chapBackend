<?php include("./header.php") ?>
<?php include("./sideBar.php") ?>
<?php include("./conect.php") ;

 $sql="SELECT team.*,COUNT(players.playerid) total
FROM team 
LEFT JOIN players ON team.teamID=players.teamid
GROUP BY team.teamID
ORDER BY total DESC;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
$teams[]= $row;
}
if(isset($_POST["addTeam"])) {
$teamNAme= $_POST["teamName"];
$teamLogo= $_POST["teamImg"];
if(isset($_GET["edit"])) {
    $id=$_GET["edit"];
    
    $stmt = $conn->prepare("UPDATE team SET teamName=?,teamLogo=?
WHERE teamID=?;");
            $stmt->bind_param("ssi",$teamNAme,$teamLogo,$id);
    
}
else {
    $stmt = $conn->prepare("INSERT INTO team(teamName,teamLogo) value(?,?)");
            $stmt->bind_param("ss",$teamNAme,$teamLogo);
    

}$stmt->execute();
    
header("location:./addTeam.php");
            $stmt->close();
            $conn->close();

}
if(isset($_GET["edit"])) {
    $id=$_GET["edit"];
    $sql= "SELECT * FROM team WHERE teamID=$id";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)) {
        $teamEdit[]= $row;
}
}else{
    $teamEdit[0]=[
        "teamName"=> "",
        "teamLogo"=> "",
    ];
}
if(isset($_GET["delete"])) {
    $id=$_GET["delete"];	
    $sql= "DELETE FROM team WHERE teamID=$id;";
    $result=mysqli_query($conn,$sql);
header("location:./addTeam.php");

}
?>

<section class="flex flex-col gap-5 items-center justify-center w-full">
    <!-- Add Team Button -->
    <button  id="addTeamBtn" class="bg-slate-600 h-8 rounded w-28 text-center" popovertarget="AddTeam">
        ADD Team
    </button>

    <!-- Add Team Popover Form -->
    <div popover  class="bg-[#2b2a2a] w-[40%] border-gray-400 border-solid border-[2px] " id="AddTeam" >
        <h1 class="text-center text-white text-2xl font-bold mb-4">Add Team</h1>
        <form action="" method="POST" class="flex flex-col items-center space-y-4 w-full">
            <!-- Team Name Input -->
            <div class="w-full flex items-center flex-col">
                <label for="team-name" class="text-white block mb-2">Team Name:</label>
                <input 
                    type="text" 
                    id="team-name" 
                    name="teamName" 
                    placeholder="Enter team name" 
                    class="w-[300px] bg-[#1e1e1e] text-white px-3 py-2 rounded border border-gray-400 focus:outline-none focus:border-blue-500"
                    VALUE="<?php echo $teamEdit[0]['teamName']?>">
            </div>

            <!-- Team Image Input -->
            <div class="w-full flex items-center flex-col">
                <label for="team-img" class="text-white block mb-2">Team Image URL:</label>
                <input 
                    type="text" 
                    id="team-img" 
                    name="teamImg" 
                    placeholder="Enter image URL" 
                    class="w-[300px] bg-[#1e1e1e] text-white px-3 py-2 rounded border border-gray-400 focus:outline-none focus:border-blue-500"
                    VALUE="<?php echo $teamEdit[0]['teamLogo']?>">
                    
                    
            </div>

            <!-- Submit Button -->
            <button name="addTeam"
                type="submit" 
                class="bg-slate-600 text-white px-6 py-2 rounded shadow hover:bg-slate-700 transition duration-300">
                Save Team
            </button>
        </form>
    </div>

    <!-- Teams Table -->
    <div class="overflow-x-auto w-full px-4">
        <table class="min-w-full table-auto bg-[#2b2a2a] shadow-md rounded-lg">
            <thead class="bg-[#3c3b3b] text-white">
                <tr>
                    <th class="px-6 py-3 text-left">Team ID</th>
                    <th class="px-6 py-3 text-left">Team Name</th>
                    <th class="px-6 py-3 text-left">Team Logo</th>
                    <th class="px-6 py-3 text-left">Player Number</th>
                    <th class="px-6 py-3 text-left">Edit</th>
                    <th class="px-6 py-3 text-left">delete</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                 <?php foreach($teams as $team) {
              echo  "<tr class='border-t border-gray-600'>
                    <td class='px-6 py-4 text-center text-white'>$team[teamID]</td>
                    <td class='px-6 py-4 text-white'>$team[teamName]</td>
                    <td class='px-6 py-4'>
                        <img src='$team[teamLogo]' alt='Team A Logo' class='w-8 h-8 rounded-full'>
                    </td>
                    <td class='px-6 py-4 text-center text-white'>$team[total]</td>
                    <td class='px-6 py-4 text-center text-white'><a href='?edit=$team[teamID]'><button><i class='fa-solid fa-pen'></i></button></td>
                    <td class='px-6 py-4 text-center text-white'><a href='?delete=$team[teamID]'><button><i class='fa-solid fa-trash'></i></button></td>
                </tr>";
            }?>
            </tbody>
        </table>
    </div>
</section>
<script>
        let queryString = window.location.search;
        let urlParams = new URLSearchParams(queryString);
        let editclubeid = urlParams.get('edit');
    if(editclubeid){
        document.getElementById("addTeamBtn").click();
        let popover=document.getElementById('AddTeam');
        popover.click();
        popover.addEventListener('blur',()=>{
            window.location='http://localhost/Fut-chapBackend/docs/addTeam.php'
        })
    };

</script>

<?php include("./footer.php") ?>
