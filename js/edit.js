let editForm = document.querySelector('#edit-form')
let editIntention = document.querySelector('#edit-intention')
let intention = getSavedNames()                                 // JSON.parse(localStorage.getItem('intentions'))
let pageID = location.hash.substring(1)                         // vytiahnem ID z URL adresy


window.addEventListener('load', function(event) {               // po nacitani stranky
    
    intention.forEach((oneIntention) => {               
        if(pageID === oneIntention.id) {                        // najdem objekt s hladanym ID
            editIntention.value = oneIntention.intentions       // nastavim hodnotu inputu na hodnotu z objektu
        }
    })
})

editForm.addEventListener('submit', function(event){
    event.preventDefault()
    let newData = event.target.editIntention.value              // odchytim zmenenu hodnotu v inpute
    
    intention.forEach((oneIntention) => {

        if(pageID === oneIntention.id) {                        // najdem objekt s hladanym ID
            let searching = intention.indexOf(oneIntention)     // najdem index objektu 
            intention[searching].intentions = newData           // nastavim mu novu hodnotu
            saveNames(intention)                                // ulozim naspat do localStorage
    }
  }) 
  
  location.href = 'index.php'
})