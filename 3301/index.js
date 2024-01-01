canvas = document.querySelector('canvas')
canvas.width = '1920'
canvas.height="1080"

c = canvas.getContext('2d')

const background = new Image()
background.src = "silver dragon.jpg"
background.setAttribute('class','img')

crop = {
    x :500,
    y :500,
    width: 1600,
    height : 1000,
    moveRight : true,
    moveDown : true
}

speed= 0.985
function updateCrop(){
    
    //direct
    if(crop.x>=crop.width-670){crop.moveRight = false}
    if(crop.x<=0){crop.moveRight = true}
    if(crop.y>=crop.height-400){crop.moveDown = false}
    if(crop.y<=0){crop.moveDown = true}
    //add pos
    if (crop.moveRight){
    crop.x = crop.x+speed} else {crop.x = crop.x-speed}
    if (crop.moveDown){
    crop.y = crop.y+speed} else {crop.y = crop.y-speed}
}

run = false
x=0
//heart
function animate(){
    window.requestAnimationFrame(animate)
    background.onload = () => {
        run = true
        
    }
    if (run){
        updateCrop()
        c.drawImage(
            background,
            crop.x,
            crop.y,
            crop.width,
            crop.height,
            0,
            0,
            canvas.width,
            canvas.height
            )
            console.log(crop)

    }
}




animate()