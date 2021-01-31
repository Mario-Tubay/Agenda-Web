eventsListener();

function eventsListener() {
    document.querySelector("#guardar").addEventListener('click', validar);
}

function validar(e) {
    e.preventDefault();
    let sector = [document.getElementById('sector').value,
        document.getElementById('codPersona').value,
        document.getElementById('nombre').value,
        document.getElementById('fecha').value,
        document.getElementById('zona').value,
        document.getElementById('sueldo').value
    ];
    let validar = false;
    for (let i = 0; i < sector.length; i++) {
        if (sector[i] === '' || sector[i] == null) {
            validar = true;
            break;
        }
    }

    if (validar) {
        alert("Faltan datos")
    } else {
        console.log("entra")
        guardar(sector);
    }

}

const guardar = function(datos) {
    let dato = new FormData();
    dato.append('sector', datos[0]);
    dato.append('codigo', datos[1]);
    dato.append('nombre', datos[2]);
    dato.append('fecha', datos[3]);
    dato.append('zona', datos[4]);
    dato.append('sueldo', datos[5]);
    dato.append('accion', 'crear');
    //creamos la conexion 
    var xhr = new XMLHttpRequest();

    //abrimos la conexion 
    xhr.open('POST', 'inc/funciones/insert.php', true);

    //verificamos 
    xhr.onload = function() {
        console.log(this.status)
        if (this.status === 200) {
            var respuesta = JSON.parse(xhr.responseText);
            if (respuesta.respuesta === 'correcto') {
                alert('Se guardaron los datos correctamente');
            } else {
                alert('error');
            }
        } else {

        }
    }

    //enviamos los datos
    xhr.send(dato);

}