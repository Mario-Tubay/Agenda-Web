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
            <p>Formulario</p>
        </div>
    </header>

    <div class="flex contenedor">
        <aside class="form">
            <form action="">
                <div class="inputs">
                    <label for="codPersona">Cod. Persona:</label>
                    <input type="text" name="codPersona" id="codPersona" placeholder="Ingrese el codigo">
                </div>
                <div class="inputs">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
                </div>
                <div class="inputs">
                    <label for="fecha">Fecha Nacimiento</label>
                    <input type="date" id="fecha" value="2002-01-01" min="1985-01-01" max="2002-01-01">
                </div>
                <div class="inputs">
                    <label for="sector">Sector</label>
                    <select name="sector" id="sector">
                        <option value="nort">Norte</option>
                        <option value="sur">Sur</option>
                        <option value="este">Este</option>
                    </select>
                </div>
                <div class="inputs">
                    <label for="zona">Zona</label>
                    <select name="zona" id="zona">
                        <option value="florida">Florida</option>
                        <option value="flor">Flor de Bastion</option>
                        <option value="orquideas">Orquideas</option>
                    </select>
                </div>
                <div class="inputs">
                    <label for="sueldo">Sueldo</label>
                    <input type="text" id="sueldo" name="sueldo"placeholder="Sueldo">
                </div>
                <div class="inputs">

                    <input type="submit" id="guardar" class="btn btn-guardar" value="Guardar">
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
                <tr>
                    <td>Mario</td>
                    <td>2020-11-20</td>
                    <td>Norte</td>
                    <td>Florida</td>
                    <td>500</td>
                    <td style="text-align:center;">
                        <a href="#" style="background-color: #b2bbbd" class="btn btn-acciones ">Editar</a>
                        <a href="#" style="background-color:#e24730 " class="btn btn-acciones ">Eliminar</a>
                    </td>
                </tr>
            </table>
        </main>
    </div>

<script src="js/app.js"></script>
</body>

</html>