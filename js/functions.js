/*****
PRIPRAVENE FUNCKCIE 
*****/


/*****
 * Funkcia nacitajuca data z localStorage;
Osetrit, pokial data v localStorage nie su
 *****/
const getSavedNames = function(){
    const myIntentions = localStorage.getItem('intentions')

    if(myIntentions == null) {
        var myArray = []
        return myArray
    } else {
        myArray = JSON.parse(localStorage.getItem('intentions'))
        return myArray
    }
}


/*****
 * Funkcia pre pouzitie odoslania formulara;
Uklada do localStorage umysel z formulara
 *****/

const saveNames = function(myArray){
    localStorage.setItem('intentions', JSON.stringify(myArray))
}


/*****
 * Generovanie HTML struktury, ktoru umiestnime do stranky po kliknuti na tlacitko 'Zobraz umysly'
+ pouzijeme ju tiez pre vypisanie novych informacii z localStorage, ked niektory umysel vymazeme
pomocou tlacitka 'Vymazat umysel'
 *****/
const generateHTMLstructure = function(oneName){
    const newDiv = document.createElement('div')
    const newLink = document.createElement('a')
    const button = document.createElement('button')
    const span = document.createElement('span')

    newDiv.classList.add('result-list')
    // newDiv.classList.add('tooltip')

    // newLink.setAttribute('href', `edit.html#${oneName.id}`)
    setAttributes(newLink, {"href": `edit.html#${oneName.id}`, 'class': 'one-intention'})
    // setAttributes(newDiv, {'class': 'tooltip' })
    setAttributes(span, {'class': 'tooltiptext' })
    // button.innerHTML = '<span class="tooltiptext">Tooltip text</span>'

    newLink.textContent = oneName.intentions
    newDiv.appendChild(newLink)

    // nastavenie mazacieho tlacitka
    button.textContent = 'X'
    button.classList.add('int-remove', 'tooltip')
    newDiv.appendChild(button)

    span.textContent = 'Zmazať'
    button.appendChild(span)
    
    button.addEventListener('click', function(){
        removeNames(intention, oneName.id)
        saveNames(intention)
        toListAgain()

    })

    return newDiv
}



/*****
 * Podla ID najdeme index daneho umyslu a pomocou splice ho odstranime
 *****/
const removeNames = function(ourNames, id){
    const index = ourNames.findIndex(function(checkingInt){
        return checkingInt.id === id
    })
    
    if(index > -1) {
        ourNames.splice(index, 1)
    }
}


/*****
 * Pokial zmazeme jeden umysel z localStorage, tak tato funkcia zabezpeci opetovne vypisanie localStorage (teda vypisanie bez zmazaneho umyslu)
 *****/
const toListAgain = function(){
    document.querySelector('.int-list').innerHTML = ''

    let newData = getSavedNames()

    newData.forEach(function(onlyOneName){
        const newContent = generateHTMLstructure(onlyOneName)
        document.querySelector('.int-list').appendChild(newContent)
    })
}

/*****
 * Funkcia na pridanie viacerych atributov elementu 
*****/
function setAttributes(el, attrs) {
    for(var key in attrs) {
      el.setAttribute(key, attrs[key]);
    }
  }
