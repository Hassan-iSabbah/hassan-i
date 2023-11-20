background1 = new sprite({source:'./images/background_layer_1.png',height:canvas.height,width:canvas.width})
background2 = new sprite({source:'./images/background_layer_2.png',height:canvas.height,width:canvas.width})
background3 = new sprite({source:'./images/background_layer_3.png',height:canvas.height,width:canvas.width})

balloons = new fighter({
    position: { x: 100, y: 100 },
    source: './images/balloons.jpg',
    width: 400,
    height:200
})


dog = new fighter({
    position: { x: 200, y: 100 },
    color: 'yellow',
    config: {
        jump: { key: 'ArrowUp', pressed: false },
        moveL: { key: 'ArrowLeft', pressed: false },
        moveR: { key: 'ArrowRight', pressed: false },
        fall: { key: 'ArrowDown', pressed: false },
        attack: { key: ' ', pressed: false }
    }
})


chocolate = new fighter({
    position: { x: 900, y: 100 },
    color: 'red'
})

characters = [balloons, dog, chocolate]
map = [background1,background2,background3]

partyLand = new gameEnviroment({ scenes: map,players:  characters})
partyLand.animate()

window.addEventListener('keydown',(event)=> {
    characters.forEach(character => {
        character.checkKey({key:event.key,pressed:true})
    });
})
window.addEventListener('keyup',(event)=> {
    characters.forEach(character => {
        character.checkKey({key:event.key,pressed:false})
    });
})
