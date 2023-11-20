class sprite {
    constructor({ position = { x: 0, y: 0 },
        source = '',
        color = 'blue',
        width = 0,
        height = 0
    }) {
        this.position = position
        this.src = source
        this.width = width
        this.height = height
        this.ground = 720
        this.color = color
        if (this.src.length !== 0) {
            this.image = new Image()
            this.image.src = this.src
        }
    }
    draw() {
        //Depending on if the image has been provided
        if (this.src.length !== 0) {
            if (this.width===0 && this.height===0){
            c.drawImage(this.image,this.position.x,this.position.y,this.image.width,this.image.height)} else {
                c.drawImage(this.image,this.position.x,this.position.y,this.width,this.height)
            }
        } else {
            c.fillStyle = this.color
            c.fillRect(this.position.x, this.position.y, this.width, this.height)
        }
    }



}


class fighter extends sprite {

    constructor({ position,
        velocity = { x: 0, y: 0 },
        source,
        color = 'blue',
        config = {
            jump: { key: 'w', pressed: false },
            moveL: { key: 'a', pressed: false },
            moveR: { key: 'd', pressed: false },
            fall: { key: 's', pressed: false },
            attack: { key: ' ', pressed: false }
        },
        width = 50,
        height = 100
    }) {
        super({ position, source, color,width,height })
        this.velocity = velocity
        this.config = config
    }


    checkKey({ key, pressed }) {
        console.log(key)
        switch (key) {
            case this.config.jump.key:
                if (pressed) { this.velocity.y = -15 } else { }
                break
            case this.config.moveL.key:
                if (pressed) { this.velocity.x = -5 } else { this.velocity.x = 0 }
                break
            case this.config.moveR.key:
                if (pressed) { this.velocity.x = 5 } else { this.velocity.x = 0 }
                break
            case this.config.fall.key:
                if (pressed) { this.velocity.y = 5 } else { }
                break
            case this.config.attack.key:
                if (pressed) { } else { }
                break

        }
    }


    update() {
        this.draw()

        this.position.x += this.velocity.x
        this.position.y += this.velocity.y

        //manage y axis
        if (this.position.y + this.velocity.y + this.height < this.ground) {
            this.velocity.y += this.gravity
        } else {
            this.position.y = this.ground - this.height
        }


    }

}