<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi página</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    *{
      font-family: 'Times New Roman', Times, serif;
      font-size: 20px;
      }
    

    /*Paleta Colores
    780000
    c1121f
    fdf0d5
    003049
    669bbc
    */

    /* Agrega aquí el código CSS */
    .menu {
      position: fixed;
      top: 0;
      left: -300px;
      width: 350px;
      height: 100%;
      background-color: #003049;
      transition: left 0.3s ease-in-out;
      z-index: 1;
    }

    .menu.open {
      left: 0;
      width: 275px;
    }

    /* Modifica el estilo del botón Menú para centrar el texto y colocar el ícono a la derecha */
    .menu-button {
      display: flex;
      align-items: center;
      justify-content: space-between; /* Centra horizontalmente y coloca el ícono a la derecha */
      width: 100%;
      padding: 5px 10px 0px 20px;
      background-color: #669bbc;
      color: #fdf0d5;
      border: none;
      cursor: pointer;
      font-size: 60px;
    }

    .menu-button .material-icons {
      font-size: 35px;
      margin-left: 10px; /* Espacio entre el texto y el icono */
      font-size: 4 0px;
    }

 

    .menu-list {
      margin-top: 0;
      padding: 0;
      text-align: right;
      list-style: none;
      text-decoration: bold;
    }

    .menu-list li {
      margin: 0;
      padding: 0;
    }

    .menu-list li a {
      display: flex;
      align-items: center;
      padding: 0px 9px 0px 10px; /* Ajusta el padding según sea necesario */
      color: #fff;
      text-decoration: none;
    }
    
    .menu-list li a .material-icons {
      margin-left: auto; /* Coloca el icono a la derecha */

      font-size: 35px;
    }

    .menu-list li a:hover {
      background-color: #444;
      transform: scale(1.01);
      transition: transform .3s;
    }

    i {
        margin-left: 12px; /* Espacio entre el icono y el texto */
        vertical-align: middle;

       
    }

    .tipo_boton{
        margin-top: 90px;
        border-radius: 50px;
        text-align: right;
        
    }

    .material-icons{
      font-size: 35px;

    }

    .logo{
      width: 200px;
      height: 150px;
      padding: 50px 40px 0px 0px;
    }

    .logo2{
      width: 500px;
      height: 400px;
      align-items: center;
    }

    .bienvenida{
      color: #003049;
      font-size: 140px;
      padding-left: 50px;
      text-align: center;
      text-shadow: 3px 3px 8px black;
      margin-top: 60px;
    }

    .logo-principal{
      display: flex;
      justify-content: center;
    }

    body{
      background-color: #fdf0d5;
    }

    footer{
      background-color: #780000;
      display: flex;
      justify-content: center;
      color: white;
      margin-top: 20%;
    }
    .pantalla{
      width: 95%;
      margin-left: 50px;
    }
    /* .table{
      border: 3px solid #000;
      margin-top: 5%;
      width: 100%;
      color: black;  
    } */
    .forma {
      background-color: #c1121f;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
    }
    .forma:hover {
      background-color: #c1121e81;
    }
    /* /* .table */ /* th{ */
     /*  background-color: */ /* #f2f2f2; */ /* Fondo de los encabezados */
      /* color: #333; */ /* Color del texto en encabezados */
     /*  font-weight: bold; */ /* Texto en negrita en encabezados */
      /* border: 4px solid #000; */ /* Agrega un borde sólido de 1px a cada celda */
      /* font-size: large;
      width: 100%;
      text-align: center;
      padding: 8px;

    } */
    /* .table */ /* td{ */
     /*  background-color: #f2f2f2;  *//* Fondo de los encabezados */
     /*  color: #333; */ /* Color del texto en encabezados */
     /*  font-weight: bold; */ /* Texto en negrita en encabezados */
     /*  border: 4px solid #000; */ /* Agrega un borde sólido de 1px a cada celda */
      /* font-size: large;
      width: 80%;
      text-align: center;
      padding: 8px; */


           /*  border: 2px solid #534d4d; */ /* Agrega un borde sólido de 1px a cada celda */
            /* padding: 8px; */ /* Espaciado interno en celdas */
            /* text-align: center; 
            width: 100%; */
    
    .cuadro{
      margin: 3px solid black; 
    }
    
    .informacion{
      display: flex;

    }
    .informacion h1{
      float: center;
      justify-content: center;
      margin-left: 26%;
    }
    .forma img{
      width: 3%;
      margin-top: 3%;
    }
    .button button{
        background-color: #c1121f;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin: 5%;
        margin-left: 48%;
      }
      .button button:hover {
      background-color: #c1121e81;
    }
    table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-decoration: bold;  
        }

        th, td {
            border: 2px solid black;
            text-align: left;
            padding: 8px;
            text-align: center;
            font-weight: bold;
            
          
        }

        th {
            background-color: #c1121f;
            color: white;
            
            
        }
    .eliminar {
      background-color: #c1121f;
      color: white;
    }
    
  </style>
</head> 
<body>
  <!-- Agrega aquí el código HTML -->
<div class="pantalla">
  <div class="informacion">
    <h1>Módulo de administración de usuarios</h1>
   
  </div>
  <div>
    <form>
      <img src="../APCR/img/usuario1.png" alt="">
      <label for="busqueda"></label>
      <input type="text" id="busqueda" name="busqueda" placeholder="Buscar Usuario">
      <input class="forma" type="submit" value="Buscar"> 
    </form>
  </div>

  <?php
    // Configura la conexión a la base de datos (modifica estos valores según tu configuración)
    include '../APCR/bdd/conexion.php';

    //comprobar id
    $identificacion_actualizar = isset($_GET["identificacion_actualizar"]) ? $_GET["identificacion_actualizar"] : null;

    //comprobar id
    /* $identificacion_actual$conn _GET["identificacion_actualizar"]; */

    // Procesa la solicitud de actualización si se ha enviado un formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
        $identificacion_actualizar = $_POST['identificacion'];
        $nuevos_nombres_usuario = $_POST['nombres_usuario'];
        $nuevo_correo = $_POST['correo'];
        $nueva_torre = $_POST['torre'];
        $nueva_apartamento = $_POST['apartamento'];
        $nuevo_celular = $_POST['celular'];
        

        // Prepara la consulta SQL para actualizar el usuario
        $sql_actualizar = "UPDATE residente SET nombres_usuario = '$nuevos_nombres_usuario', correo = '$nuevo_correo', torre = '$nueva_torre', apartamento = '$nueva_apartamento', celular = '$nuevo_celular' WHERE identificacion = $identificacion_actualizar";

        // Ejecuta la consulta
        if ($conn ->query($sql_actualizar) === TRUE) {
            echo "Usuario actualizado exitosamente.";
        } else {
            echo "Error al actualizar el usuario: " . $conn ->error;
        }
    }

    // Realiza la consulta para obtener los usuarios registrados
    $sql = "SELECT * FROM residente";
    $resultado = $conn ->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Identificación</th><th>Nombres</th><th>Correo</th><th>Torre</th><th>Apartamento</th><th>Celular</th><th>Modificar</th></tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$fila['identificacion']}</td>";
            echo "<td>";
            echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
            echo "<input type='hidden' name='identificacion' value='{$fila['identificacion']}'>";
            echo "<input type='text' name='nombres_usuario' value='{$fila['nombres_usuario']}' required>";
            echo "</td>";
            /* echo "<td><select name='sexo'>
                    <option value='masculino' " . ($fila['sexo'] == 'masculino' ? 'selected' : '') . ">Masculino</option>
                    <option value='femenino' " . ($fila['sexo'] == 'femenino' ? 'selected' : '') . ">Femenino</option>
                </select></td>"; */
            echo "<td><input type='email' name='correo' value='{$fila['correo']}' required></td>";
            echo "<td><input type='text' name='torre' value='{$fila['torre']}' required></td>";
            echo "<td><input type='text' name='apartamento' value='{$fila['apartamento']}' required></td>";
            echo "<td><input type='tel' name='celular' value='{$fila['celular']}' required></td>";
            echo "<td><button type='submit' class='eliminar' name='guardar'>Guardar</button></form>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay usuarios registrados.";
    }

    // Cierra la conexión a la base de datos
    $conn ->close();
    ?>

    <script>
        function habilitarEdicion(id) {
            var inputs = document.querySelectorAll("tr[data-identificacion='" + identificacion + "'] input");
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].removeAttribute("disabled");
            }
        }
    </script>

        
    </table>
    <div class="button">
      <!-- <button onclick="location.href='../APCR/usuarios1.html'"id="seleccionar">Seleccionar</button> -->
      <button onclick="location.href='../APCR/usuarios.php'" id="salir">Salir</button>
    </div>
  </div>


  
  

  <div class="menu" aria-labelledby="menu-button">

    <ul class="menu-list" id="menu-list" role="menu">
      <button class="menu-button" title="Menú" id="menu-button" aria-expanded="false" aria-controls="menu-list">Menú<i class="material-icons">list</i></button>
      <li><a class="tipo_boton" title="Administrar zonas" href="../APCR/adminzonas.html" role="menuitem">Administrar zonas<i class="material-icons" >directions_car</i></a>
      <li><a class="tipo_boton" title="Mensajeria y pagos"  href="../APCR/admin_mens_pag.html" role="menuitem">Mensajeria y pagos<i class="material-icons">sms</i></a>
      <li><a class="tipo_boton" title="Reportes" href="../APCR/modulo_admin_report.html" role="menuitem">Reportes<i class="material-icons">request_page</i></a>
      <li><a class="tipo_boton" title="Administración usuarios" href="../APCR/asdministrador_usuario.html" role="menuitem">Administración usuarios<i class="material-icons">person</i></a>
      <li><a class="tipo_boton" title="Salir" href="index.html" role="menuitem">Salir<i class="material-icons">exit_to_app</i></a></li>
      <li>
        <img class="logo" src="../APCR/img/logoapcr.png" alt="" >
      </li>
    </ul>
  </div>

</div>

 
  <footer>
    <div class="footer">
      <h1>
        Realizado por SOFTNERD todos los derechos reservados &copy;
      </h1>
    </div>
  </footer>

  <script>
    var menuButton = document.querySelector('.menu-button');
    var menu = document.querySelector('.menu');
    var menuList = document.querySelector('.menu-list');

    menuButton.addEventListener('click', function() {
      var expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
      menuButton.setAttribute('aria-expanded', !expanded);
      menu.classList.toggle('open');
      if (menu.classList.contains('open')) {
        menuList.querySelector('a').focus();
      }
    });

    menuList.addEventListener('keydown', function(event) {
      var firstItem = menuList.querySelector('a');
      var lastItem = menuList.querySelectorAll('a')[menuList.querySelectorAll('a').length - 1];
      var currentElement = event.target;
      switch (event.keyCode) {
        case 27: // Escape
          menuButton.focus();
          menuButton.setAttribute('aria-expanded', 'false');
          menu.classList.remove('open');
          break;
        case 37: // Left arrow
          if (currentElement === firstItem) {
            lastItem.focus();
          } else {
            currentElement.previousElementSibling.focus();
          }
          break;
        case 39: // Right arrow
          if (currentElement === lastItem) {
            firstItem.focus();
          } else {
            currentElement.nextElementSibling.focus();
          }
          break;
      }
    });
  </script>
</body>
</html>