const canvas = document.querySelector('canvas')
const startButton = document.getElementById('startButton');

canvas.width = 300
canvas.height = 300
const ctx = canvas.getContext('2d')

//ctx.fillRect(0,0,canvas.width, canvas.height)

const score = {
    left:0,
    right:0,

}
//Creamos las palas
const getPaddle = ({x=0,color='orange'}) => ({
    x,
    y:0,
    w:10,
    h:30,
    color,
    speed:15,
    draw(){
        ctx.fillStyle = this.color
        ctx.fillRect(this.x,this.y,this.w,this.h)
    },
    moveUp(){
        //limite para q no se salga del canvas
        if(this.y< 1 ){return}
        this.y -= this.speed
    },
    moveDown(){
        //para q no se salga por abajo las palas
        if(this.y> canvas.height - this.h- 1){return}
        this.y += this.speed
    },
     //funcion para saber si contiene en x e y. Buscando si ambas están compartiendo la misma área.
    contains(b){
            return(this.x < b.x + b.w) &&
            ( this.x + this.w > b.x) &&
            ( this.y < b.y + b.h) &&
            ( this.y + this.h > b.y)
    }
    
})
//Creamos la pelota
const getBall = () => ({
    x:145,
    y:145,
    w:10,
    h:10,
    color:'blue',
    directionX: 'right',
    directionY: 'up',
    friction : .6,
    speedX:5,
    speedY:5,
    isMoving:false, 
    handleMovement(){
        if (!this.isMoving) {return}
        //direccion en x es hacia la derecha
        if (this.x < 0) {
            this.directionX = 'right'
            //cuando toca la pared de la derecha para q no se meta, cuando toca cambia la dirección hacia la izquierda
        }else if (this.x > canvas.width - this.w){
            this.directionX = 'left'
        }
        //cuando el movimiento sea positivo irá sumando, irá a la derecha
        if(this.directionX === 'right'){
            this.speedX++
        }else{
            this.speedX--
        }
        //controlar la velocidad de la pelota y la dirección
        this.speedX*=this.friction
        this.x +=this.speedX

        //para controlar la velocidad 
        if(this.y<0){
            //si es mayor q 0 le damos la dirección hacia abajo
            this.directionY = 'down'
            //sino mide más q lo q mide el canvas y lo q mide la pelota, ca
        }else if (this.y > canvas.height-this.h){
            this.directionY = 'up'
        }
        //si la direccion es hacia abajo suma
        if (this.directionY === 'down'){
            this.speedY++
            //si va hacia arriba resta
        }else{
            this.speedY--
        }
        //velocidad de Y es multiplicacion por la fricción 
        this.speedY *=this.friction
        this.y+=this.speedY
    },
    draw(){
        this.handleMovement()
        ctx.fillStyle = this.color
        ctx.fillRect(this.x,this.y,this.w,this.h)
    },
})

const paddleIzquierda = getPaddle({}) //le pasamos los valores por defecto
const paddleDerecha = getPaddle({
    x:canvas.width-10, //para que se inicie la línea roja en la posición q queremos
    color:'red'
})
const ball = getBall()



const update= () => {
    //borrar la estela de la pelota
    ctx.clearRect(0,0,canvas.width,canvas.height)
    drawCourt()
    drawScore()
    ball.draw()
    paddleIzquierda.draw()
    paddleDerecha.draw()
    checkCollitions()
    //genera la animación de la pelota
    requestAnimationFrame(update)

}

//funciones auxiliares


//funcion q dibuja el tablero
const drawCourt = () =>{
    ctx.strokeStyle = '5px black'
    ctx.lineWidth = 10;
    ctx.strokeRect(0,0,canvas.width, canvas.height)
    ctx.lineWidth = 3;
    ctx.moveTo(canvas.width/2,0)
    ctx.lineTo(canvas.width/2, canvas.height)
    ctx.stroke()
}

//función para dibujar el marcador

const drawScore = () => {
    ctx.fillStyle='gray'
    ctx.font = '34px Arial'
    ctx.fillText(score.right, 70, 70)
    ctx.fillText(score.left, 190, 70)

}  

//función para controlar las colisiones
const checkCollitions = () => {
    if (paddleIzquierda.contains(ball)){
        ball.directionX = 'right'
    }
    else if (paddleDerecha.contains(ball)){
        ball.directionX = 'left'
    }
    if (ball.x<0){
        ball.x = 145 //para llevar la bola al centro del tablero
        ball.y = 145 // ""
        ball.isMoving = false
        score.left++
        
    }else if(ball.x>canvas.width-ball.w){
    ball.x = 145 //para llevar la bola al centro del tablero
    ball.y = 145 // ""
    ball.isMoving = false
    score.right++
    }
}



//Listeners
document.addEventListener('keydown', function(event) {
       ball.isMoving = true
       switch (event.key) {
         case 'Keyup':
        //    break;
         case 'ArrowUp':
           ball.isMoving = true
           paddleDerecha.moveUp()
           paddleIzquierda.moveUp()
           // Código para moverse hacia arriba
           break;
         case 'ArrowDown':
           paddleDerecha.moveDown()
           paddleIzquierda.moveDown()
           // Código para moverse hacia abajo
           break;
         case 'ArrowLeft':
           // Código para moverse hacia la izquierda
           break;
         case 'ArrowRight':
           // Código para moverse hacia la derecha
           break;
       }
     });

     
//sirve para que el rendimiento sea óptimo
requestAnimationFrame(update)



