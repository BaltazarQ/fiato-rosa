let rosePray = document.querySelector('.rose')
let roseMenu = document.querySelector('.rose-menu')

let style = getComputedStyle(roseMenu)

// let slideDownFrame = new KeyframeEffect(
//     roseMenu,
//     [
//         // { display: 'none'},
//         // { display: 'block'}
//         { transform: 'translateY(-100%)'},
//         { transform: 'translateY(0%)'}
//     ],
//     {duration: 1000, fill: 'forwards'}
// )

// let slideDownAnimation = new Animation(slideDownFrame)

// function slideDown(){
//     slideDownAnimation.play()
// }

rosePray.addEventListener('mouseenter', function(event) {
    roseMenu.style.display = 'block'
    // slideDown()
})

rosePray.addEventListener('mouseleave', function(event) {
    roseMenu.style.display = 'none'
})


