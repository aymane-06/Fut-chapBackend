<?php include("./header.php") ?>
<?php include("./sideBar.php") ?>
<?php include("./conect.php") ;

 $sql="SELECT nationality.*,COUNT(players.playerid) total
FROM nationality 
LEFT JOIN players ON nationality.nationalityID=players.nationalityid
GROUP BY nationality.nationalityID
ORDER BY total DESC;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)) {
$nationalitys[]= $row;
}
if(isset($_POST["addnationality"])) {
$nationalityNAme= $_POST["nationalityName"];
$nationalityLogo= $_POST["nationalityImg"];
if(isset($_GET["edit"])) {
    $id=$_GET["edit"];
    
    $stmt = $conn->prepare("UPDATE nationality SET nationalityname=?,flag=?
WHERE nationalityID=?;");
            $stmt->bind_param("ssi",$nationalityNAme,$nationalityLogo,$id);
    
}
else {
    $stmt = $conn->prepare("INSERT INTO nationality(nationalityname,flag) value(?,?)");
            $stmt->bind_param("ss",$nationalityNAme,$nationalityLogo);
    

}$stmt->execute();
    
header("location:./addNation.php");
            $stmt->close();
            $conn->close();

}
if(isset($_GET["edit"])) {
    $id=$_GET["edit"];
    $sql= "SELECT * FROM nationality WHERE nationalityid=$id";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)) {
        $nationalityEdit[]= $row;
}
}else{
    $nationalityEdit[0]=[
        "nationalityname"=> "",
        "flag"=> "",
    ];
}
if(isset($_GET["delete"])) {
    $id=$_GET["delete"];	
    $sql= "DELETE FROM nationality WHERE nationalityid=$id;";
    $result=mysqli_query($conn,$sql);
header("location:./addNation.php");

}
?>
<section class="flex flex-col gap-5 items-center justify-center w-full">
    <!-- Add nationality Button -->
    <button  id="addnationalityBtn" class="bg-slate-600 h-8 rounded w-28 text-center" popovertarget="Addnationality">
        ADD nationality
    </button>

    <!-- Add nationality Popover Form -->
    <div popover  class="bg-[#2b2a2a] w-[40%] border-gray-400 border-solid border-[2px] absolute top-[30%] left-[30%]" id="Addnationality" >
        <h1 class="text-center text-white text-2xl font-bold mb-4">Add nationality</h1>
        <form action="" method="POST" class="flex flex-col items-center space-y-4 w-full">
            <!-- nationality Name Input -->
            <div class="w-full flex items-center flex-col">
                <label for="nationality-name" class="text-white block mb-2">nationality Name:</label>
                <input 
                    type="text" 
                    id="nationality-name" 
                    name="nationalityName" 
                    placeholder="Enter nationality name" 
                    class="w-[300px] bg-[#1e1e1e] text-white px-3 py-2 rounded border border-gray-400 focus:outline-none focus:border-blue-500"
                    VALUE="<?php echo $nationalityEdit[0]['nationalityname']?>">
            </div>

            <!-- nationality Image Input -->
            <div class="w-full flex items-center flex-col">
                <label for="nationality-img" class="text-white block mb-2">nationality Image URL:</label>
                <input 
                    type="text" 
                    id="nationality-img" 
                    name="nationalityImg" 
                    placeholder="Enter image URL" 
                    class="w-[300px] bg-[#1e1e1e] text-white px-3 py-2 rounded border border-gray-400 focus:outline-none focus:border-blue-500"
                    VALUE="<?php echo $nationalityEdit[0]['flag']?>">
                    
                    
            </div>

            <!-- Submit Button -->
            <button name="addnationality"
                type="submit" 
                class="bg-slate-600 text-white px-6 py-2 rounded shadow hover:bg-slate-700 transition duration-300">
                Save nationality
            </button>
        </form>
    </div>

    <!-- nationalitys Table -->
    <div class="overflow-x-auto w-full px-4">
        <table class="min-w-full table-auto bg-[#2b2a2a] shadow-md rounded-lg">
            <thead class="bg-[#3c3b3b] text-white">
                <tr>
                    <th class="px-6 py-3 text-left">nationality ID</th>
                    <th class="px-6 py-3 text-left">nationality Name</th>
                    <th class="px-6 py-3 text-left">nationality Logo</th>
                    <th class="px-6 py-3 text-left">Player Number</th>
                    <th class="px-6 py-3 text-left">Edit</th>
                    <th class="px-6 py-3 text-left">delete</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                 <?php foreach($nationalitys as $nationality) {
              echo  "<tr class='border-t border-gray-600'>
                    <td class='px-6 py-4 text-center text-white'>$nationality[nationalityid]</td>
                    <td class='px-6 py-4 text-white'>$nationality[nationalityname]</td>
                    <td class='px-6 py-4'>
                        <img src='$nationality[flag]' alt='nationality A Logo' class='w-8 h-8 rounded-full'>
                    </td>
                    <td class='px-6 py-4 text-center text-white'>$nationality[total]</td>
                    <td class='px-6 py-4 text-center text-white'><a href='?edit=$nationality[nationalityid]'><button><i class='fa-solid fa-pen'></i></button></td>
                    <td class='px-6 py-4 text-center text-white'><a href='?delete=$nationality[nationalityid]'><button><i class='fa-solid fa-trash'></i></button></td>
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
        document.getElementById("addnationalityBtn").click();
    };

</script>

<?php include("./footer.php") ?>
