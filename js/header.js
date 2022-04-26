(function(){
    
    let rosePray = document.querySelector('.rose')
    let roseMenu = document.querySelector('.rose-menu')
    let roseA = document.querySelector('.rose-a')
    
    let style = getComputedStyle(roseMenu)

    
    rosePray.addEventListener('mouseenter', function(event) {
        roseMenu.style.display = 'block'
})

rosePray.addEventListener('mouseleave', function(event) {
    roseMenu.style.display = 'none'
})

roseA.addEventListener('click', function(event){
    event.preventDefault()
    
})


})()

