<?php include("./header.php") ?>
<div class="">
<nav class="flex items-center h-[64px] justify-between  bg-[#040404] w-full sticky top-0 z-50">
        <a href=""><img class="h-[32px] w-[32px] m-[5px]" src="https://cdn.futbin.com/design/img/logos/futbin-green-small.png?v=5" alt="logo"></a>
        <ul class="flex gap-[20px]  text-[#eaf8f3] items-center w-[50%]">
            <button class="hover:text-[#55cca2] w-[50%]">Squad builder</button>
            <a href="#add_player" class="w-[50%] h-[50px]"><button id="addPlayerBtn"  class="bg-[#55cca2] rounded-[20px] w-[50%] h-[50px] font-Poppins hover:bg-[#31e3a588] w-full">ADD New player</button></a>
            <a href="./home.php" class="w-[50%] h-[50px]"><button id="admin"  class="bg-[#55cca2] rounded-[20px] w-[50%] h-[50px] font-Poppins hover:bg-[#31e3a588]">Login</button></a>
        </ul>
    </nav>
    <header class="m-[99px]">
        <h1 class="text-cyan-50">EA FC 25 Squad Builder</h1>
        <p class="text-cyan-50 text-[10px] py-2">Create EA FC 25 Squads</p>
    </header>
    <section class="flex w-full">
    <section id="filde" class="relative p-[99px] flex flex-col w-[70%] items-center ">
        <img src="https://www.futbin.com/design2/img/static/field-bg.svg" class="w-[892px] [aspect-ratio:auto_892_/_725] h-[99%] object-contain" alt="filde not loade">
        <div id="players_cards" class="flex flex-col absolute top-0 w-full">
     <div id="attack" class="flex justify-center gap-[110px]">  
    <!-- lw -->
        <div class="player_card relative  text-center h-[196px] w-[130px] top-[30px]">
            <div class="card">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
            </div>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">LW</div>
    </div>
        <!-- st  -->
        <div class="player_card relative text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">ST</div>
        </div>
        <!-- rw -->
        <div class="player_card relative text-center h-[196px] w-[130px] top-[30px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">RW</div>
    </div>
     </div>
     <div id='mid' class="flex justify-center gap-[80px] relative top-[40px]">
    <div class="player_card relative  text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CM</div>
     </div>
        <!-- cm -->
        <div class="player_card relative  text-center h-[196px] w-[130px] top-8">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CM</div>
    </div>
        <!-- cm -->
        <div class="player_card relative  text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CM</div>
    </div>
    </div>

<div id="deffenc" class="flex  relative top-8 justify-center gap-12">
    <!-- lb -->
        <div class="player_card relative text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">LB</div>
        </div>
        <!-- cb -->
        <div class="player_card relative top-8 text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans ">CB</div> 
      </div>
        <!-- cb -->
        <div class="player_card relative top-8 text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CB</div>
        </div>
        <!-- rb -->
        <div class="player_card relative text-center h-[196px] w-[130px] flex justify-center items-center flex-col">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans w-full">RB</div>
    </div>
</div>
<div id="GP" class="flex justify-center">
<!-- gk -->
 <div class="player_card w-[13%] flex justify-center">
<div class="relative   text-center h-[196px] w-[130px]">
    <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
    <div class="absolute top-[84px] left-[47px]">
        <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
        <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
</div>
<div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">GK</div>
</div>
</div>
</div>
</div>
</section>

<section id="subtitul"  class="border-[#59544a] border-solid border-[2px] h-[700px] mr-8 w-[500px] overflow-y-auto flex flex-col">
    <h1 class="text-center text-[2em] text-white">Player Sub:</h1>
    <div id="players_sub" class="flex flex-wrap h-full">

    </div>
<div id="GP" class="flex justify-center"></div>
    
</section>
</section>

<section id="playerSection" class="absolute top-72 bg-[#2b2a2a]  w-full h-[200%] hidden">
<label for="serchPlayer" class="m-6 text-start">Serch Player:<br>
    <input type="text" placeholder="Serch Player">
</label>
<button id="CloseAddPlayer">X</button>
<div id="ShowCard" class=" w-[206px] h-[360px] flex flex-col items-center gap-8">
            <div id="cardplace">
            <div id="cardTemplate" class=" relative top-8 text-center  w-[99%] " draggable="true">
                <img id="cardBG" class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] w-[260px] " src="./assets/placeholder-card-normal.webp" alt="">
                <div id="data_container" class="data_container flex flex-col items-center absolute top-0 w-full" style="gap:150px;" >
                <div  class=" flex flex-col items-center justify-center relative top-0 rating" style="align-self: start;top: 75px;left: 40px;" >
                    <h1 class=" text-[#fff]  text-[20px] -mb-[10px] color" id="card-rating">-</h1>
                    <h1 class=" text-[#fff] color" id="post">-</h1>
                </div>
                <div  class=" w-[80%] top-[40px] right-[14px] absolute">
                    <img class="w-full" id="player_img" src="https://cdn.pixabay.com/photo/2014/04/02/10/25/man-303792_1280.png" alt="">
                </div>
                <div id="stat" class="flex flex-col items-center " style="z-index: 0;">
                <div class=" bottom-[130px] left-[80px] text-[30px]">
                    <h1 id="card-name" class="color text-[12px]">-</h1>
                </div>
                <div id="stats" class=" text-white flex gap-1 bottom-20 left-[38px]"> 
                    <div>
                    <span id="c-PAC" class="font-sans cStats color">PAC</span>  
                    <div id="card-pac" class="color">-</div>
                </div>
                <div>
                    <span id="c-SHO" class="font-sans cStats color">SHO</span>  
                    <div id="card-sho" class="color">-</div>
                </div>
                <div>
                    <span id="c-PAS" class="font-sans cStats color">PAS</span>  
                    <div id="card-pas" class="color">-</div>
                </div>
                <div>
                    <span id="c-DRI" class="font-sans cStats color">DRI</span>   
                    <div id="card-dri" class="color">-</div>
                </div>
                <div>
                    <span id="c-DEF" class="font-sans cStats color">DEF</span>  
                    <div id="card-def" class="color">-</div>
                </div>
                <div>
                    <span id="c-PHY" class="font-sans cStats color">PHY</span>  
                    <div id="card-phy" class="color">-</div>
                </div>
            </div>
            <div id="cardLogos" class="flex  gap-2 bottom-[52px] left-[92px]">
                <img id="NatioFlag" height="20" width="20" src="" alt="">
                <img id="leagueLogo" height="20" width="20" src="" alt="">
                <img id="teamLogo" height="20" width="20" src="" alt="">
            </div>
            <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans hidden">GK</div>
        </div>
        </div>
        </div>
    </div>

</div>
</section>
</div>      

</div>
<script src="./test.js"></script>
<?php include("./footer.php") ?>
