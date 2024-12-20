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

addPlayer.forEach(add=>{
    add.addEventListener('click',()=>{
        playerSection.classList.remove('hidden');
    })
})
let CloseAddPlayer=document.getElementById('CloseAddPlayer');


CloseAddPlayer.addEventListener('click',()=>{
        playerSection.classList.remove('block');
        playerSection.classList.add('hidden');
    })

fetch('./gatPlayersToPlayers.php')
.then(res=>res.json())
.then(data=>{
    console.log(data);
    
})
