<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .editar, .guardar {
            background-color: #2196F3;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .editar:hover, .guardar:hover {
            background-color: #0b7dda;
        }
    </style>
</head>
<body>

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
        
    
   /*      // Procesa la solicitud de actualización si se ha enviado un formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
        $identificacion_actualizar = $_POST['identificacion'];
        $nuevos_nombres = $conexion->real_escape_string($_POST['nombres']);
        $nuevo_sexo = $conexion->real_escape_string($_POST['sexo']);
        $nueva_direccion = $conexion->real_escape_string($_POST['direccion']);
        $nuevo_correo = $conexion->real_escape_string($_POST['correo']);
        $nueva_fecha_nacimiento = $_POST['fecha_nac'];
        $nuevo_movil = $conexion->real_escape_string($_POST['movil']);
        $nueva_edad = $_POST['edad']; */
    
        
/* 
            if (!isset($identificacion_actualizar) || empty($identificacion_actualizar)) {
            echo "ID de usuario no válido";
            exit();
            } */

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
            echo "<td><button type='submit' class='guardar' name='guardar'>Guardar</button></form>";
            echo "<button class='editar' onclick='habilitarEdicion({$fila['identificacion']})'>Editar</button></td>";
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

</body>
</html>