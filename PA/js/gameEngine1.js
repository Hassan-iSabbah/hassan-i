    const canvas = document.querySelector('canvas')
    canvas.width = 1280
    canvas.height = 720
    const c = canvas.getContext('2d')
class gameEnviroment {
    constructor({scenes=null,players}) {
        this.players = players
        this.scenes = scenes
    }







    animate() {
        window.requestAnimationFrame(this.animate.bind(this))
        if (!this.scenes){
        c.fillStyle = 'black'
        c.fillRect(0, 0, canvas.width, canvas.height)
    } else {
        this.scenes.forEach(scene => {
            scene.draw()
            
        });
    }
        //update each player
        this.players.forEach(player => {
            player.update()
            
        });


        console.log('go')

    }

    

}

