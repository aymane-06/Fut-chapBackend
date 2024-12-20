new TomSelect('#select-league',{
    valueField: 'leagueid',
    labelField: 'name',
    searchField: 'name',
    // fetch remote data
    load: function(query, callback) {
        fetch("../jasonFiles/leauges.json")
            .then(response => response.json())
            .then(json => {
                callback(json);
                // console.log(json);
            }).catch(()=>{
                callback();
            });

    },
    // custom rendering functions for options and items
    render: {
        option: function(item, escape) {
            return `<div class="flex w-full clicked">
                    <img src="${item.img}" alt="" class="w-[20px] h-[20px]" >
                    <h1>${item.name}</h1>
                    </div>`;
        },
        item: function(item, escape) {
            return `<div class="flex " style="display: flex;align-items: center;">
                    <img src="${item.img}" alt="" class="w-[20px] h-[20px] leaugeImg" >
                    <span>${item.name}</span>
                    </div>`;
        }
    },
});

new TomSelect('#select-Name',{
    create: true,
    valueField: 'name',
    labelField: 'name',
    searchField: 'name',
    // fetch remote data
    load: function(query, callback) {
        fetch("../jasonFiles/updated_merge.json")
            .then(response => response.json())
            .then(json => {
                callback(json);
                // console.log(json);
            }).catch(()=>{
                callback();
            });

    },
    // custom rendering functions for options and items
    render: {
        option: function(item, escape) {
            return `<div class="flex w-full clicked">
                    <img src="${item.img}" alt="" class="w-[20px] h-[20px]" >
                    <h1>${item.name}</h1>
                    </div>`;
        },
        item: function(item, escape) {
            return `<div class="flex " style="display: flex;align-items: center;">
                    <img src="${item.img}" alt="" class="w-[20px] h-[20px] PlayerImg" >
                    <span class="PName">${item.name}</span>
                    </div>`;
        }
    },
});
new TomSelect('#select-nation',{
    valueField: 'nationalityid',
    labelField: 'name',
    searchField: 'nationalityname',
    // fetch remote data
    load: function(query, callback) {
        fetch("../jasonFiles/nation.json?v=1")
            .then(response => response.json())
            .then(json => {
                callback(json);
                // console.log(json);
            }).catch(()=>{
                callback();
            });

    },
    // custom rendering functions for options and items
    render: {
        option: function(item, escape) {
            return `<div class="flex w-full">
                    <img src="${item.flag}" alt="" class="w-[20px] h-[20px]" >
                    <h1>${item.nationalityname}</h1>
                    </div>`;
        },
        item: function(item, escape) {
            return `<div class="flex" style="display: flex;align-items: center;">
                    <img src="${item.flag}" alt="" class="w-[20px] h-[20px] NationImg" >
                    <span>${item.nationalityname}</span>
                    </div>`;
        }
    },
    
});

new TomSelect('#select-version',{
    valueField: 'img',
    labelField: 'name',
    searchField: 'name',
    // fetch remote data
    load: function(query, callback) {
        fetch("../jasonFiles/card.json")
            .then(response => response.json())
            .then(json => {
                callback(json);
                console.log({CARDSJON : json});
            }).catch(()=>{
                callback();
            });

    },
    // custom rendering functions for options and items
    render: {
        option: function(item, escape) {
            return `<div class="flex w-full">
                    <img src="${item?.img}" alt="" class="w-[20px] h-[20px]" >
                    <h1>${item.name}</h1>
                    </div>`;
        },
        item: function(item, escape) {
            return `<div class="flex" style="display: flex;align-items: center;">
                    <img src="${item.img}" alt="" class="w-[20px] h-[20px] CardImg" >
                    <span>${item.name}</span>
                    </div>`;
        }
    },
});
new TomSelect('#select-club',{
    valueField: 'teamID',
    labelField: 'name',
    searchField: 'teamName',
    // fetch remote data
    load: function(query, callback) {
        fetch("../jasonFiles/teams.json?v=1")
            .then(response => response.json())
            .then(json => {
                callback(json);
                console.log(json);
            }).catch(()=>{
                callback();
            });

    },
    // custom rendering functions for options and items
    render: {
        option: function(item, escape) {
            return `<div class="flex w-full">
                    <img src="${item.teamLogo}" alt="" class="w-[20px] h-[20px]" >
                    <h1>${item.teamName}</h1>
                    </div>`;
        },
        item: function(item, escape) {
            return `<div class="flex" style="display: flex;align-items: center;">
                    <img src="${item.teamLogo}" alt="" class="w-[20px] h-[20px] ClubImg" >
                    <span>${item.teamName}</span>
                    </div>`;
        }
    },
});



let nameInput=document.getElementById('select-Name');

let imgInput=document.getElementById('pImgInput');

nameInput.addEventListener('change',()=>{
    let pImagSrc=document.querySelector('.PlayerImg');
    if(pImagSrc){
    imgInput.value=pImagSrc.getAttribute('src');
    console.log(nameInput.value);
    
}
})




