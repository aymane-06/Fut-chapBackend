<?php include("./header.php") ?>
<?php include("./sideBar.php") ?>
<?php include("./dataBase.php");

$sql = "SELECT team.teamName, COUNT(players.playerid) AS total
FROM team 
LEFT JOIN players ON team.teamID = players.teamid
GROUP BY team.teamID
HAVING COUNT(players.playerid) != 0
ORDER BY total DESC;";
$result = mysqli_query($conn, $sql);

$teamAv = [];
while ($row = mysqli_fetch_assoc($result)) {
    $teamAv[] = $row;
}
$sql = "SELECT nationality.nationalityname,COUNT(players.playerid) totalNation
FROM nationality 
LEFT JOIN players ON nationality.nationalityID=players.nationalityid
GROUP BY nationality.nationalityID
HAVING totalNation>0
ORDER BY totalNation DESC";
$result = mysqli_query($conn, $sql);
$nationAV= [];
while ($row = mysqli_fetch_assoc($result)) {
  $nationAV[] = $row;
}
?>

<section id="home" class="mb-12">
    <h2 class="text-2xl font-bold text-gray-100 mb-4">Home</h2>
    <div class="bg-[#3a3a3a] shadow rounded-lg p-6">
        <p class="text-gray-300">Welcome to the FUT Clone Dashboard. Use the navigation to add players or view the list of players.</p>
    </div>
    <h1 class="text-3xl"><?= "Players Available: " . array_sum(array_column($teamAv, 'total')); ?></h1>
    <div id="charts" class="flex gap-52">
    <div style="width: 500px;">
        <canvas id="acquisitions"></canvas>
    </div>
    <div style="width: 500px;">
        <canvas id="acquisitions2"></canvas>
    </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Ensure Chart.js is loaded -->
<script>
  // Prepare the PHP data for JavaScript
  const teamNames = <?= json_encode(array_column($teamAv, 'teamName')); ?>;
  const teamTotals = <?= json_encode(array_column($teamAv, 'total')); ?>;

  let ctx = document.getElementById('acquisitions').getContext('2d');
  new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: teamNames,
          datasets: [{
              label: 'Number of Players per Team',
              data: teamTotals,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 205, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(153, 102, 255, 0.5)',
                  'rgba(255, 159, 64, 0.5)',
                  // Add more colors as needed
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 205, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: {
                  position: 'top',
              },
              tooltip: {
                  enabled: true,
              },
              title: {
              display: true,
              text: 'Player per Team Stats:' 
            }
          }
      }
  });
  //nations
  const nationNames = <?= json_encode(array_column($nationAV, 'nationalityname')); ?>;
  const nationTotals = <?= json_encode(array_column($nationAV, 'totalNation')); ?>;

     ctx = document.getElementById('acquisitions2').getContext('2d');
  new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: nationNames,
          datasets: [{
              label: 'Number of Players per Team',
              data: nationTotals,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.5)',
                  'rgba(54, 162, 235, 0.5)',
                  'rgba(255, 205, 86, 0.5)',
                  'rgba(75, 192, 192, 0.5)',
                  'rgba(153, 102, 255, 0.5)',
                  'rgba(255, 159, 64, 0.5)',
                  // Add more colors as needed
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 205, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
              ],
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: {
                  position: 'top',
              },
              tooltip: {
                  enabled: true,
              },
              title: {
              display: true,
              text: 'Player per Nation Stats:' 
            }
          }
      }
  });
</script>

<?php include("./footer.php") ?>
