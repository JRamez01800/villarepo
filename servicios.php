<?php session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $conexion = new mysqli('localhost','root','','login');
//        $conexion = new mysqli('localhost','root','','restaurante');      
      $numPersonas = $_POST['personas'];//Reunimos la informacion
      $fecha = $_POST['fecha'];
      $hora = $_POST['hora'];
      $usuario = $_SESSION['usuario'];
      $consulta = "SELECT * FROM reservacion WHERE Fecha='$fecha'";//Realizamos la consulta.
      $resultado = $conexion->query($consulta);

      //cehcar los rengloes si hay menos de 10 si se puede si no no.
      if($resultado->num_rows < 11) {
        //Checar que no se repita.
        $numMesa = rand(1, 10);//random para la mesa
        $consulta = "INSERT INTO reservacion values (null,'$usuario', '$numPersonas','$numMesa','$fecha','$hora')";
        $resultado = $conexion->query($consulta);//insertar
        echo "<script>alert('Gracias por tu reservación te esperamos.....')</script>";
      }else{
        //Mostrar datos de que no se pude.
        echo "<script>alert('No hay mesas disponibles...')</script>";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Servicios</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
  <div class="contenedor aling: center">
    <header>
      <div>
        <nav class="menu">
              <ul>
                <li><a href="home.php">Inicio</a></li>
                <li><a href="home.php#menu">Menu</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="variedad.php">Variedad</a></li>
                <li class="separado"><a href="home.php#about">A cerca de..</a></li>
                <li><a href="home.php">Cerrar secion</a></li>
                <li class="nav-item dropdown">
          s     </ul>
          </nav>
      </div>
    </header>
      <main>  
        <div id="contServ" style="align:center"> 
            <div class="cajaServ colorgris" id="divServ1"> 
              <h2>RESERVACIONES.</h2>
              <div class="imagenAnt colorBlue" id="serv1">
                </div>
            </div>
        </div>

<!--Empiezan los formularios -->
        <div class="cajaServ serInvisible" id="contServ1">
        <div class = "inicioSesion">
            <div class="divDatos">
            <h1>Reservación</h1>
                <form method="POST">
                Personas: <input type="number" name="personas" min="1" max="5"/><br><br>
                Fecha: <input type="date" name="fecha" value="dd/mmm/aaaa"/><br><br>
                Hora: <input type="time" name="hora"/><br><br>
                    <center>
                        <input type="submit" value= "Reservar" class="btnReserva">
                    </center>
                </form>
            </div>
        </div>
        </div>

        <div class="cajaServ serInvisible" id="contServ3">
        <div class = "inicioSesion">
          <h1>Informacion de la reservación</h1>
          <!--Consulta-->
        </div>
      </div>
      </main>
  </div>
</body>
</html>


<!--         

  
                Hora: <select name="hora"> 
                          <option value="0"></option> 
                          <option value="5">5:00 pm</option>
                          <option value="6">6:00 pm</option> 
                          <option value="7">7:00 pm</option> 
                          <option value="8">8:00 pm</option> 
                          <option value="9">9:00 pm</option> 
                          <option value="10">10:00 pm</option>  
                        </select> <br><br>  
                  No. Personas: <select name="personas"> 
                          <option value="0"></option> 
                          <option value="1">1</option>
                          <option value="2">2</option> 
                          <option value="3">3</option> 
                          <option value="5">5</option> 
                          <option value="7">7</option> 
                          </select><br><br>
  
  
         Dia: <select name="dia"> 
                          <option value="0"></option> 
                          <option value="1">1</option>
                          <option value="2">2</option> 
                          <option value="3">3</option> 
                          <option value="4">4</option> 
                          <option value="5">5</option> 
                          <option value="6">6</option> 
                          <option value="7">7</option> 
                          <option value="8">8</option> 
                          <option value="9">9</option> 
                          <option value="10">10</option> 
                          <option value="11">11</option>
                          <option value="12">12</option> 
                          <option value="13">13</option> 
                          <option value="14">14</option> 
                          <option value="15">15</option> 
                          <option value="16">16</option> 
                          <option value="17">17</option> 
                          <option value="18">18</option> 
                          <option value="19">19</option> 
                          <option value="20">20</option> 
                          <option value="21">21</option>
                          <option value="22">22</option> 
                          <option value="23">23</option> 
                          <option value="24">24</option> 
                          <option value="25">25</option> 
                          <option value="26">26</option> 
                          <option value="27">27</option> 
                          <option value="28">28</option> 
                          <option value="29">29</option> 
                          <option value="30">30</option> 
                        </select> 
                 Mes: <select name="mes"> 
                          <option value="0"></option> 
                          <option value="Enero">Enero</option>
                          <option value="Febrero">Febrero</option> 
                          <option value="Marzo">Marzo</option> 
                          <option value="Abril">Abril</option> 
                          <option value="Mayo">Mayo</option> 
                          <option value="Junio">Junio</option>
                          <option value="Julio">Julio</option>
                          <option value="Agosto">Agosto</option> 
                          <option value="Septiembre">Septiembre</option> 
                          <option value="Octubre">Octubre</option> 
                          <option value="Noviembre">Noviembre</option> 
                          <option value="Diciembre">Diciembre</option> 
                        </select> <br><br>-->