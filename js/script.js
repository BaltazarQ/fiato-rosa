// nacitanie data z localStorage do premennej intention. Pokial je localStorage prazdny,
// tak sa do intention ulozi prazdne pole
const intention = getSavedNames()

let intFromStorageJSON = JSON.parse(localStorage.getItem('intentions'))
    
if (intFromStorageJSON !== null) {
    intFromStorageJSON.forEach(function(myName){
        const oneNameHtml = generateHTMLstructure(myName)
        document.querySelector('.int-list').appendChild(oneNameHtml)
    });
}

// odoslanie formulara a ulozzenie do lcoalStorage pomocou premennej intention
let intForm = document.querySelector('.intentions-form')
intForm.addEventListener('submit', function(event) {
    event.preventDefault()

    if (event.target.elements.intentions.value === '') {
        return
        } else {
            intention.push({
                id: uuidv4(),
                intentions: event.target.elements.intentions.value
            })
        }

    event.target.elements.intentions.value = ''

    saveNames(intention)

    document.querySelector('.int-list').innerHTML = ''
    let intFromStorageJSON = JSON.parse(localStorage.getItem('intentions'))
    
    intFromStorageJSON.forEach(function(myName){
        const oneNameHtml = generateHTMLstructure(myName)
        document.querySelector('.int-list').appendChild(oneNameHtml)
    });
})
