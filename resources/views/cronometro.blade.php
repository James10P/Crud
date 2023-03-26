<!DOCTYPE 
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LUKAS LLARBI</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
<html>
<head>
<title>Cronómetro</title> 
<style type="text/css">
* { margin: auto; padding: 0; }
h1 { padding: 0.5em; text-align: center; }
#cronometro { padding:10px; border: 3px blue double; width: 200px;
              text-align: center }
#reloj { padding: 5px 10px; width: 175px;border: 1px solid black; 
         font: bold 1.5em digital, europa, arial; text-align: center; 
         margin: 4px  }
#cronometro [type=button]  { margin: 4px; font: normal 9pt arial } 
</style>
<script type="text/javascript">
window.onload = function() {
visor=document.getElementById("reloj"); //localizar pantalla del reloj
//asociar eventos a botones: al pulsar el botón se activa su función.
document.cron.empieza.onclick = empezar; 
document.cron.para.onclick = parar;
document.cron.continua.onclick = continuar;
document.cron.reinicia.onclick = reiniciar;
}
//variables de inicio:
var marcha=0; //control del temporizador
var cro=0; //estado inicial del cronómetro.
//cronometro en marcha. Empezar en 0:
function empezar() {
         if (marcha==0) { //solo si el cronómetro esta parado
            emp=new Date(tiempo 0) //fecha actual
            elcrono=setInterval(tiempo,10); //función del temporizador.
            marcha=1 //indicamos que se ha puesto en marcha.
            }
         }
function tiempo() { //función del temporizador
         actual=new Date() //fecha en el instante
         cro=actual-emp //tiempo transcurrido en milisegundos
         cr=new Date() //fecha donde guardamos el tiempo transcurrido
         cr.setTime(cro) 
         cs=cr.getMilliseconds() //milisegundos del cronómetro
         cs=cs/10; //paso a centésimas de segundo.
         cs=Math.round(cs)
         sg=cr.getSeconds(); //segundos del cronómetro
         mn=cr.getMinutes(); //minutos del cronómetro
         ho=cr.getHours()-1; //horas del cronómetro
         if (cs<10) {cs="0"+cs;}  //poner siempre 2 cifras en los números
         if (sg<10) {sg="0"+sg;} 
         if (mn<10) {mn="0"+mn;} 
         visor.innerHTML=ho+" : "+mn+" : "+sg+" : "+cs; //pasar a pantalla.
         }
//parar el cronómetro
function parar() { 
         if (marcha==1) { //sólo si está en funcionamiento
            clearInterval(elcrono); //parar el crono
            marcha=0; //indicar que está parado.
            }		
         }		 
//Continuar una cuenta empezada y parada.
function continuar() {
         if (marcha==0) { //sólo si el crono está parado
            emp2=new Date(); //fecha actual
            emp2=emp2.getTime(); //pasar a tiempo Unix
            emp3=emp2-cro; //restar tiempo anterior
            emp=new Date(); //nueva fecha inicial para pasar al temporizador 
            emp.setTime(emp3); //datos para nueva fecha inicial.
            elcrono=setInterval(tiempo,10); //activar temporizador
            marcha=1;
            }		
         }
//Volver al estado inicial
function reiniciar() {
         if (marcha==1) { //si el cronómetro está en marcha:
            clearInterval(elcrono); //parar el crono
            marcha=0;	//indicar que está parado
            }
         cro=0; //tiempo transcurrido a cero
         visor.innerHTML = "0 : 00 : 00 : 00"; //visor a cero
         }	
</script>
</head>
<body>
<h1>ESPERO GANES</h1>
<div id="cronometro">
  <div id="reloj">0 : 00 : 00 : 00</div>
  <form name="cron" action="#">
    <input type="button" value="EMPEZAR" name="empieza" />
    <input type="button" value="PARAR" name="para" /><br/>
    <input type="button" value="CONTINUAR" name="continua" />
    <input type="button" value="REINICIAR" name="reinicia" />
  </form>
</div>
<br>
<a href="{{route ('Producto')}}"class="btn btn-primary">VOLVER</a>
</body>
</html>



