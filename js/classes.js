class Particle {
    constructor(canvas) {
      this.x = Math.random() * canvas.width;
      this.y = Math.random() * canvas.height;
      this.radius = Math.random() * 10 + 5;
      this.radiusChangeDirection = Math.random() > 0.5 ? 1 : -1;
      this.age = 0;
      this.interacted = false;
  
      this.colorChangeRate = 0.001;
  
      this.color = {
        r: 0,
        g: 0,
        b: Math.floor(Math.random() * 256),
      };
  
      this.velocity = {
        x: (Math.random() - 0.5) * 2,
        y: (Math.random() - 0.5) * 2,
      };
    }
  
    draw(ctx) {
      const opacity = 0.8 + Math.abs(Math.sin(this.age * 0.05));
  
      this.color.r = (this.color.r + this.colorChangeRate) % 256;
      this.color.g = (this.color.g + this.colorChangeRate) % 256;
      this.color.b = (this.color.b + this.colorChangeRate) % 256;
  
      ctx.beginPath();
      ctx.fillStyle = `rgba(${Math.floor(this.color.r)}, ${Math.floor(
        this.color.g
      )}, ${Math.floor(this.color.b)}, ${opacity})`;
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctx.fill();
      ctx.closePath();
    }
  
    update(canvas, mouseX, mouseY) {
      if (this.x + this.radius > canvas.width || this.x - this.radius < 0) {
        this.velocity.x = -this.velocity.x;
      }
      if (this.y + this.radius > canvas.height || this.y - this.radius < 0) {
        this.velocity.y = -this.velocity.y;
      }
  
      this.x += this.velocity.x;
      this.y += this.velocity.y;
  
      const maxSize = 20;
      const minSize = 5;
      const growthRate = 0.2;
      if (this.radius >= maxSize || this.radius <= minSize) {
        this.radiusChangeDirection = -this.radiusChangeDirection;
      }
      this.radius += this.radiusChangeDirection * growthRate;
  
      const dx = this.x - mouseX;
      const dy = this.y - mouseY;
      const distance = Math.sqrt(dx * dx + dy * dy);
  
      const interactionRadius = 300;
      const interactionFactor = 0.0002;
  
      if (distance < interactionRadius) {
        this.color = {
          r: Math.floor(Math.random() * 256),
          g: 0,
          b: 0,
        };
  
        this.velocity.x -= dx * interactionFactor;
        this.velocity.y -= dy * interactionFactor;
        this.interacted = true;
      } else {
        if (this.interacted) {
          this.color = {
            r: 0,
            g: 0,
            b: Math.floor(Math.random() * 256),
          };
  
          this.velocity.x = (Math.random() - 0.5) * 2;
          this.velocity.y = (Math.random() - 0.5) * 2;
          this.interacted = false;
        }
      }
    }
  }
  