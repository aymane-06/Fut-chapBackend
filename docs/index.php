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
        <div id="LW" class="player_card relative  text-center h-[196px] w-[130px] top-[30px]">
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
        <div id="ST" class="player_card relative text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">ST</div>
        </div>
        <!-- rw -->
        <div id="RW" class="player_card relative text-center h-[196px] w-[130px] top-[30px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">RW</div>
    </div>
     </div>
     <div id='mid' class="flex justify-center gap-[80px] relative top-[40px]">
    <div id="CM" class="player_card relative  text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CM</div>
     </div>
        <!-- cm -->
        <div id="CM" class="player_card relative  text-center h-[196px] w-[130px] top-8">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CM</div>
    </div>
        <!-- cm -->
        <div id="CM" class="player_card relative  text-center h-[196px] w-[130px]">
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
        <div id="LB" class="player_card relative text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">LB</div>
        </div>
        <!-- cb -->
        <div id="CB" class="player_card relative top-8 text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans ">CB</div> 
      </div>
        <!-- cb -->
        <div id="CB" class="player_card relative top-8 text-center h-[196px] w-[130px]">
            <img class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] " src="./assets/placeholder-card-normal.webp" alt="">
            <div class="absolute top-[84px] left-[47px]">
                <svg class="text-[#07D95A]" viewBox="0 0 36 42" fill="none" width="36"><path d="M18.6275 41.711L18.3137 41.0298C18.1146 41.1215 17.8854 41.1215 17.6863 41.0298L17.3726 41.711L17.6863 41.0298L1.18627 33.4311C0.920355 33.3087 0.75 33.0427 0.75 32.7499V8.7248C0.75 8.42506 0.928458 8.15411 1.20383 8.03575L17.7038 0.943648C17.8929 0.862375 18.1071 0.862375 18.2962 0.943648L34.7962 8.03575C35.0715 8.15411 35.25 8.42506 35.25 8.7248V32.7499C35.25 33.0427 35.0796 33.3087 34.8137 33.4311L18.3137 41.0298L18.6275 41.711Z" stroke="currentColor" stroke-width="1.5"></path></svg>
                <h1 class="text-[#07D95A] font-sans absolute top-[7px] left-[12.5px]">+</h1>
        </div>
        <div class="typ rounded- bg-tyBG [background-size:55px_35px] bg-no-repeat bg-center h-[29px] text-white font-sans">CB</div>
        </div>
        <!-- rb -->
        <div id="RB"  class="player_card relative text-center h-[196px] w-[130px] flex justify-center items-center flex-col">
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
 <div id="GK" class="player_card w-[13%] flex justify-center">
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

<section id="playerSection" class="absolute top-72 bg-[#2b2a2a]  w-full h-[200%] hidden z-50">
<label for="serchPlayer" class="m-6 text-start">Serch Player:<br>
    <input type="text" id="serchPlayer" placeholder="Serch Player">
</label>
<button id="CloseAddPlayer">X</button>
<div id="ShowCard" class="flex flex-wrap gap-8">
         

</div>
</section>
</div>      

</div>
<script src="./test.js"></script>
<?php include("./footer.php") ?>
