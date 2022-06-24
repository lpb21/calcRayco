const enviar = (e) => {
    e.preventDefault();
    let numero1 = document.getElementById("numero1").value,
        numero2 = document.getElementById("numero2").value,
        opcion = document.getElementById("opcion").value

    let params = `numero1=${numero1}&numero2=${numero2}&opcion=${opcion}`
    const url = "procesos/procesar.php"
    const xhr = new XMLHttpRequest();
    xhr.open("post", url, true)
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.responseText;
            console.log(response)
            document.getElementById("resultado").value = response;
        }
    }

    xhr.send(params);




    //let url = "./Calculadora/procesar.php";
}


//var clickArea = document.getElementById("enviar_bll");
//clickArea.onclick = function(){}

function enviar_form() {

    var enviar = document.getElementById('enviar_dato');
    var numero1 = document.getElementById('numero1').value
    var numero2 = document.getElementById('numero2').value
    var opcion = document.getElementById('opcion').value
    var resultado = document.getElementById('resultado').value;

    if (numero1 == "") {
        //swal reemplaza el alert y hace el llamado a los objetos de la libreria SweetAlert
        swal('Oooops!', 'El campo del Nro 1 no puede estar vacio', 'error');
        numero1.focus();
        return false;
    } else if (isNaN(numero1)) {
        swal('Oooops!', 'El dato ingresado en el campo del Nro 1 debe ser numerico', 'error');
        numero1.focus();
        return false;
    } else if (numero1 == 0 && opcion == "dividir") {
        swal('Oooops!', 'No se puede dividir entre cero', 'error');
        return false;
    } else if (numero2 == "") {
        swal('Oooops!', 'El campo del Nro 2 no puede estar vacio', 'error');
        numero2.focus();
        return false;
    } else if (isNaN(numero2)) {
        swal('Oooops!', 'El dato ingresado en el campo del Nro 2 debe ser numerico', 'error');
        numero2.focus();
        return false;
    } else if (opcion == "Operacion a realizar") {
        swal('Oooops!', 'Debes seleccionar una operacion', 'error');
        opcion.focus();
        return false;
    } else if (numero2 == 0 && opcion == "dividir") {
        swal('Oooops!', 'No se puede dividir entre cero', 'error');
        return false;
    } else {

        numero1 = document.formulario.numero1.value;
        numero2 = document.formulario.numero2.value;
        opcion = document.formulario.opcion.value;
        //resultado = document.formulario.resultado.value;


        $.ajax({
            url: 'Enviar.php',
            method: 'POST',

            data: {
                numero1: numero1,
                numero2: numero2,
                opcion: opcion
            },
            success: function(response) {
                $('#resultado').html(response);
                console.log(response);
                swal('success', 'Datos calculados correctamente', 'success');
                //window.location = 'Enviar.php';
            },
            error: function() {
                swal('Error', 'Error en el procesamiento de datos', 'error');
                //window.parent.window.alert("Ha ocurrido un error en el calculo. Por favor, intenta nuevamente");
            }

        });


    }
}