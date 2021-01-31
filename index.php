<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
        
    <header class="content-header">
        <div class="contenedor">
        <button style="background-color:#e24730 " class="btn-acciones" type="button" onclick="">CONSULTA</button>
        </div>
    </header>

    <div class="flex contenedor">
        <aside class="form">
            <form action="">
                <div>
                    <label for="codPersona">Cod. Persona:</label>
                    <input  class="inputs" type="text" name="codPersona" id="codPersona" placeholder="Ingrese el codigo">
                </div>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input  class="inputs" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
                </div>
                <div>
                    <label for="fecha">Fecha Nacimiento</label>
                    <input  class="inputs" type="date" id="fecha" value="2002-01-01" min="1985-01-01" max="2002-01-01">
                </div>
                <div>
                    <label for="sector">Sector</label>
                    <select class="inputs" name="sector" id="sector">
                        <option value="nort">Norte</option>
                        <option value="sur">Sur</option>
                        <option value="este">Este</option>
                    </select>
                </div>
                <div>
                    <label for="zona">Zona</label>
                    <select class="inputs" name="zona" id="zona">
                        <option value="florida">Florida</option>
                        <option value="flor">Flor de Bastion</option>
                        <option value="orquideas">Orquideas</option>
                    </select>
                </div>
                <div>
                    <label for="sueldo">Sueldo</label>
                    <input  class="inputs" type="text" id="sueldo" name="sueldo"placeholder="Sueldo">
                </div>
                <div>

                    <input  type="submit" id="guardar" class="btn btn-guardar inputs" value="Guardar" action>
                </div>
            </form>
        </aside>
      
        <main class="table">
            <table class="tabla">
                <tr>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Sector</th>
                    <th>Zona</th>
                    <th>Sueldo</th>
                    <th colspan="2">Acciones</th>
                </tr>
                <?php 
                obtenerDatos();
                function obtenerDatos(){
                    include 'inc/funciones/conexion.php';

                    try{
                        $datos = $conn->query("SELECT * FROM guardar");
                    }catch(Exception $e){
                        return false;
                    }
                foreach($datos as $agenda){?>
                <tr>
                    <td> <?php echo $agenda['nombre']; ?></td>
                    <td><?php echo $agenda['fecha_nac']; ?></td>
                    <td><?php echo $agenda['sector']; ?></td>
                    <td><?php echo $agenda['zona']; ?></td>
                    <td><?php echo $agenda['sueldo']; ?></td>
                    <td style="text-align:center;">
                        <a href="editar.php" style="background-color: #b2bbbd" class="btn btn-acciones ">Editar</a>
                        <a href="#" style="background-color:#e24730 " class="btn btn-acciones ">Eliminar</a>
                    </td>
                </tr>
                <?php }
                } ?>
            </table>
        </main>
    </div>

<script src="js/app.js"></script>
</body>
</html>