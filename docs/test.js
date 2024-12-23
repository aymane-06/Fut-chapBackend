// let addTeam=document.getElementById('AddTeam');
// let addTeamButton=document.getElementById('addTeamBtn');
// let closeAddTeamButton=document.getElementById('colseBtnAddTeam');
// addTeamButton.addEventListener('click',()=>{
//     addTeam.classList.remove('hidden');
//     addTeam.classList.add('flex');
// })
// closeAddTeamButton.addEventListener('click',()=>{
//     addTeam.classList.remove('flex');
//     addTeam.classList.add('hidden');
// })
const FildPlayersCard=document.querySelectorAll('.player_card');
function hovercard() {
    const FildPlayersCard = document.querySelectorAll('.player_card');
    
    FildPlayersCard.forEach(playerCard => {
        const bgImg = playerCard.querySelector('img');
        const type = playerCard.querySelector('.typ');
        
        playerCard.addEventListener('mouseenter', () => {
            playerCard.style.zIndex = '2';
            playerCard.style.cursor = 'pointer';
            playerCard.style.scale = '1.1';
            bgImg.style.filter = 'drop-shadow(0px 0px 40px #417560)';
            type.style.filter = 'drop-shadow(0px 10px #458ea9)';
            
        });
        
        playerCard.addEventListener('mouseleave', () => {
            playerCard.style.zIndex = '0';
            playerCard.style.scale = '1';
            bgImg.style.filter = 'none';
            type.style.filter = 'none';
        });
    });

    // Add functionality for created cards
    const createdCards = document.querySelectorAll('#players_sub .data_container, .player_card .data_container');
    
    createdCards.forEach(card => {
        const cardContainer = card.closest('.player_card, .data_container');
        // console.log(cardContainer);
        
        
        // Create edit and delete buttons container
        const editDeleteContainer = document.createElement('div');
        editDeleteContainer.classList.add(
            'edit-delete-container', 
            'hidden', 
            'absolute', 
            'top-0', 
            'right-0', 
            'flex', 
            'gap-2', 
            'p-2', 
            'z-50'
        );
        
       
        
        // Create delete button
        const deleteButton = document.createElement('button');
        const deleteIcon = document.createElement('i');
        deleteIcon.classList.add('fas', 'fa-trash', 'text-red-500');
        deleteButton.appendChild(deleteIcon);
        deleteButton.classList.add(
            'delete-btn', 
            'bg-white', 
            'rounded-full', 
            'p-2', 
            'hover:bg-red-100', 
            'z-50'
        );
        
        editDeleteContainer.appendChild(deleteButton);
        
        cardContainer.addEventListener('mouseenter', (e) => {
            const bgImg = cardContainer.querySelector('img');
            const type = cardContainer.querySelector('.typ');
            
            cardContainer.style.zIndex = '2';
            cardContainer.style.cursor = 'pointer';
            
            if (bgImg) {
                bgImg.style.filter = 'drop-shadow(0px 0px 40px #417560)';
            }
            
            if (type) {
                type.style.filter = 'drop-shadow(0px 10px #458ea9)';
            }
            
            cardContainer.appendChild(editDeleteContainer);
            editDeleteContainer.classList.remove('hidden');
        });
        
        cardContainer.addEventListener('mouseleave', (e) => {
            const bgImg = cardContainer.querySelector('img');
            const type = cardContainer.querySelector('.typ');
            
            cardContainer.style.zIndex = '0';
            
                bgImg.style.filter = 'none';
            
                type.style.filter = 'none';
            
            
            // Hide edit/delete buttons
            editDeleteContainer.classList.add('hidden');
        });
        
        
        
        deleteButton.addEventListener('click', (event) => {
            const deletConfirmation= confirm('The player will be deleted!!!');
            // console.log(deletConfirmation);
            
            event.stopPropagation();
            if(deletConfirmation){
            console.log(cardContainer);
            
            const cardName = cardContainer.querySelector('#card-name').textContent;
            
            cardStorg = cardStorg.filter(cardHTML => {
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = cardHTML;
                const nameElement = tempDiv.querySelector('#card-name');
                return nameElement && nameElement.textContent !== cardName;
            });
            
            localStorage.setItem('storg', JSON.stringify(cardStorg));
        
            // Find if this card is in the field section
            const fieldCard = cardContainer.closest('.player_card');
            if (fieldCard) {
                resetCardToDefault(fieldCard);
            } else {
                cardContainer.parentNode.remove();
            }
        }else{return} });
        

    });
}

function removeCardFromStorage(cardContainer) {
    // Find the card name to remove
    const cardName = cardContainer.querySelector('#card-name').textContent;
    
    // Filter out the card from storage
    cardStorg = cardStorg.filter(cardHTML => {
        // Create a temporary div to parse the HTML string
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = cardHTML;
        
        // Check if the name matches
        const nameElement = tempDiv.querySelector('#card-name');
        return nameElement && nameElement.textContent !== cardName;
    });
    
    // Update localStorage
    localStorage.setItem('storg', JSON.stringify(cardStorg));
}

function resetCardToDefault(cardContainer) {
    // Find the position type
    const positionType = cardContainer.querySelector('.typ').textContent;
    
    // Find the original placeholder card for this position
    const originalPlaceholderCard = Array.from(document.querySelectorAll('.player_card'))
        .find(card => 
            card.querySelector('.typ').textContent === positionType && 
            card.querySelector('#card-name') === null
        );
    
    if (originalPlaceholderCard) {
        // Clone the original placeholder
        const placeholderClone = originalPlaceholderCard.cloneNode(true);
        
        // Replace the current card with the placeholder clone
        cardContainer.parentNode.replaceChild(placeholderClone, cardContainer);
        
        // Re-apply hover effect
        hovercard();
        // window.location.reload();  
    }
}

hovercard();

const playerSection=document.getElementById('playerSection');

const filde=document.getElementById('filde');
let playersInFilde=filde.querySelectorAll('.player_card');
let addPlayerBtn=document.getElementById('addPlayerBtn');

 let addPlayer=[...playersInFilde,addPlayerBtn];
 let Post;

 addPlayer.forEach(add=>{
     add.addEventListener('click',(event)=>{
         console.log(Post);
         Post=event.currentTarget;
        
        getPlayers(Post);
        playerSection.classList.remove('hidden');
        playersInFilde.style.zIndex = 0;
    
        
    
    })
})
let CloseAddPlayer=document.getElementById('CloseAddPlayer');


CloseAddPlayer.addEventListener('click',()=>{
        playerSection.classList.remove('block');
        playerSection.classList.add('hidden');
    })
let playersData=[];
let players=[];
let playersInTeam=[];
let playerList=document.getElementById('ShowCard')


async function getPlayers(Post){

await fetch('./gatPlayersToPlayers.php')
.then(res=>res.json())
.then(data=>{
    playersData=data;
    console.log(Post.getAttribute('id'));
    
    if(Post.getAttribute('id')=="addPlayerBtn"){
        players=playersData.filter(player=>playersInTeam.every(pt => pt !== player.playerid));
    }else if(Post.getAttribute('id')=="serchPlayer"){
        players = playersData.filter(player => player.playername.includes(Post.value)&&playersInTeam.every(pt => pt !== player.playerid));
    }else{
        players = playersData.filter(player => 
            player.position === Post.getAttribute('id') &&
            playersInTeam.every(pt => pt !== player.playerid)
          );
}
    console.table(players);
    
})
playerList.innerHTML="";
showPlayers(players);
}

function showPlayers(players){
    players.forEach(player=>{
        let card=document.createElement('div');
        card.innerHTML=`<div onclick="test(this)" data-pos="${player.playerid}" id="cardTemplate" class=" relative top-8 text-center  w-[99%] " draggable="true">
                    <img id="cardBG" class="hover:[filter:drop-shadow(20px_20px_20px_#417560)] w-[260px] " src="${player.cardtype}" alt="">
                    <div id="data_container" class="data_container flex flex-col items-center absolute top-0 w-full" style="gap: 175px;" >
                    <div  class=" flex flex-col items-center justify-center relative top-0 rating" style="align-self: start;top: 75px;left: 40px;" >
                        <h1 class=" text-[#fff]  text-[20px] -mb-[10px] color" id="card-rating">${player.rating}</h1>
                        <h1 class=" text-[#fff] color" id="post">${player.position}</h1>
                    </div>
                    <div  class=" w-[80%] top-[40px] right-[14px] absolute">
                        <img class="w-full" id="player_img" src="${player.playerimage}" alt="">
                    </div>
                    <div id="stat" class="flex flex-col items-center " style="z-index: 0;">
                    <div class=" bottom-[130px] left-[80px] text-[30px]">
                        <h1 id="card-name" class="color text-[20px]">${player.playername}</h1>
                    </div>
                    <div id="stats" class=" text-white flex gap-1 bottom-20 left-[38px]"> 
                        <div>
                        <span id="c-PAC" class="font-sans cStats color">PAC</span>  
                        <div id="card-pac" class="color">${player.pac}</div>
                    </div>
                    <div>
                        <span id="c-SHO" class="font-sans cStats color">SHO</span>  
                        <div id="card-sho" class="color">${player.sho}</div>
                    </div>
                    <div>
                        <span id="c-PAS" class="font-sans cStats color">PAS</span>  
                        <div id="card-pas" class="color">${player.pas}</div>
                    </div>
                    <div>
                        <span id="c-DRI" class="font-sans cStats color">DRI</span>   
                        <div id="card-dri" class="color">${player.dri}</div>
                    </div>
                    <div>
                        <span id="c-DEF" class="font-sans cStats color">DEF</span>  
                        <div id="card-def" class="color">${player.def}</div>
                    </div>
                    <div>
                        <span id="c-PHY" class="font-sans cStats color">PHY</span>  
                        <div id="card-phy" class="color">${player.phy}</div>
                    </div>
                </div>
                <div id="cardLogos" class="flex  gap-2 bottom-[52px] left-[92px]">
                    <img id="NatioFlag" height="20" width="20" src="${player.flag}" alt="">
                    <img id="leagueLogo" height="20" width="20" src="${player.leagueLogo}" alt="">
                    <img id="teamLogo" height="20" width="20" src="${player.teamLogo}" alt="">
                </div>
            </div>
            </div>
            </div>`
            card.style.cursor='pointer';
    playerList.appendChild(card);
    
    })
}

function test(card){
    console.log(card.childNodes);
    console.log(Post);
    card.style.width='190px';
    card.querySelector('#data_container').style.gap='95px';
    card.querySelector('#stats').style.fontSize = '12px';
    card.querySelector('.rating').style.cssText = "align-self: start;top: 60px;left: 30px;"
    playersInTeam.push(card.getAttribute('data-pos'));

    card.removeAttribute('onclick');
console.log(Post.getAttribute('id'));

    if(Post.getAttribute('id')=="addPlayerBtn"){
            let subErea=document.getElementById('players_sub');
            subErea.appendChild(card);
    }else{

    Post.innerHTML='';
    Post.appendChild(card);}
    playerSection.classList.remove('block');
    playerSection.classList.add('hidden');
}


let serchInput=document.getElementById('serchPlayer');
serchInput.addEventListener('keyup',()=>{
        getPlayers(serchInput);


})