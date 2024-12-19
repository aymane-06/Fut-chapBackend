<?php include('./header.php') ?>
<?php include('./sideBar.php') ?>
<?php include('./dataBase.php') ?>
<?php include('./errorHandling.php') ?>

<section id="show-players" class="w-full bg-[#2b2a2a] p-6 rounded-lg shadow-lg">
    <table class="w-full table-auto bg-[#2b2a2a] text-white rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-[#3c3b3b]">
                <th class="w-4 px-4 py-2">Player ID</th>
                <th class="px-4 py-2">Player</th>
                <th class="w-4 px-4 py-2">Position</th>
                <th class="w-10 px-4 py-2">PAC</th>
                <th class="w-10 px-4 py-2">SHO</th>
                <th class="w-10 px-4 py-2">DEF</th>
                <th class="w-10 px-4 py-2">PAS</th>
                <th class="w-10 px-4 py-2">DRI</th>
                <th class="w-10 px-4 py-2">PHY</th>
                <th class="w-16 px-4 py-2">Edit</th>
                <th class="w-16 px-4 py-2">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($players as $player){
                echo"
                <tr class='border-t border-gray-600'>
                    <td class='px-4 py-2 text-center'>$player[playerid]</td>
                    <td class='px-4 py-2'>
                        <div class='flex items-center space-x-4'>
                            <div class='relative'>
                                <img src='$player[playerimage]' class='relative z-[1] w-24 h-24 object-cover rounded-full'/>
                                <img class='absolute inset-0 w-24 h-24 object-cover rounded-full opacity-60' src='$player[cardtype]' />
                            </div>
                            <div class='flex flex-col justify-center'>
                                <span>$player[playername]</span>
                                <div class='flex space-x-2'>
                                    <img src='$player[leagueLogo]' class='w-5 h-5' alt='League'/>
                                    <img src='$player[flag]' class='w-5 h-5' alt='Flag'/>
                                    <img src='$player[teamLogo]' class='w-5 h-5' alt='Team'/>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class='px-4 py-2 text-center'>$player[position]</td>
                    <td class='px-4 py-2 text-center'>$player[pac]</td>
                    <td class='px-4 py-2 text-center'>$player[sho]</td>
                    <td class='px-4 py-2 text-center'>$player[def]</td>
                    <td class='px-4 py-2 text-center'>$player[pas]</td>
                    <td class='px-4 py-2 text-center'>$player[dri]</td>
                    <td class='px-4 py-2 text-center'>$player[phy]</td>
                    <td class='px-4 py-2 text-center'>
                        <a href='?editid=$player[playerid]'>
                            <button class='text-green-500 hover:text-green-700'>
                                <i class='fa-solid fa-pen'></i>
                            </button>
                        </a>
                    </td>
                    <td class='px-4 py-2 text-center'>
                        <a href='?Deleteid=$player[playerid]'>
                            <button class='text-red-500 hover:text-red-700'>
                                <i class='fa-solid fa-trash'></i>
                            </button>
                        </a>
                    </td>
                </tr>";
            } ?>
        </tbody>
    </table>
</section>

<?php include('./footer.php') ?>
