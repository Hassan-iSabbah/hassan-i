// Initialize variables
document.addEventListener("DOMContentLoaded", () => {
    max_width = document.documentElement.clientWidth;
    max_height = max_width/1.6;
let image = new Image();
image.src = './images/peakpx.jpg';
image.classList.add('imgCenter');
let priority = 'particles';

Particles = []


// Create a video element and set its source
let video = document.createElement('video');
video.classList.add('video');
const parent = document.getElementById('cinema');
video.src = parent.getAttribute('name'); // Replace 'your_video.mp4' with the video file you want to display

image.onload = () => {
    let canvas = document.createElement('canvas');
    canvas.width = image.width;    
    canvas.height = image.height;

    if (image.width>max_width){
        canvas.width = max_width;
        canvas.height = max_height;
    }
    for (let i = 0; i<300;i++){
        Particles.push(new Particle(canvas))
    }
    parent.appendChild(canvas)
    let c = canvas.getContext('2d');

    let mouseX = 0;
    let mouseY = 0;

    function animate() {
        switch (priority) {
            case 'particles':
                c.fillStyle = 'black';
                c.fillRect(0, 0, canvas.width, canvas.height);
                c.drawImage(image, 0, 0);
                Particles.forEach(particle => {
                    particle.draw(c)
                    particle.update(canvas,mouseX,mouseY)
                });
            
                break;
            case 'video':
                // Display the video on top until it is over
                c.drawImage(video, 0, 0, canvas.width, canvas.height);
                break;
        }
        window.requestAnimationFrame(animate);
    }

    animate();

    canvas.addEventListener('mousedown', () => {
        if (priority === 'particles') {
            priority = 'video';
            video.play();
        }
    });
    window.addEventListener('mousemove', (event) => {
        mouseX = event.clientX;
        mouseY = event.clientY;
    });
    video.addEventListener('ended', () => {
        // Switch back to 'particles' state when the video ends
        priority = 'particles';
        video.currentTime = 0; // Reset video time to the beginning
    });
};
})