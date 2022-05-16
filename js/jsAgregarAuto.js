'use strict'
document.addEventListener('DOMContentLoaded', () => {
    var formulario = document.getElementById('formularioAgregarAuto');
    var selectAuto = document.getElementById('selectAuto');
    var button_guardar = document.getElementById('button_guardar');
    button_guardar.style.display = "none";


    //Referencias de divs
    var contenedor_ns = document.getElementById('contenedor_ns');
    var contenedor_marca = document.getElementById('contenedor_marca');
    var contenedor_precio = document.getElementById('contenedor_precio');
    var contendor_subtotal = document.getElementById('contendor_subtotal');
    var contenedor_iva = document.getElementById('contenedor_iva');
    var contenedor_precio_total = document.getElementById('contenedor_precio_total');

    //Variables numericas
    var subtotal = 0;
    var iva = 0;
    var precio_total = 0;

    var nsAgregados = '';
    var marcasAgregados = '';
    formulario.addEventListener('submit', (e) => {
        e.preventDefault();

        if (selectAuto.value.toString() === 'vacio') {
            alert('Selecciona un auto disponible');
        } else {
            var array = selectAuto.value.split('-');
            nsAgregados += array[0] + "-";

            contenedor_ns.innerHTML += '<p>' + array[0] + '</p>';
            eliminarOPC(selectAuto.value);

            contenedor_marca.innerHTML += '<p>' + array[1] + '</p>';
            contenedor_precio.innerHTML += '<p> $' + array[2] + '</p>';
            marcasAgregados += array[1];

            subtotal += Number(array[2]);
            contendor_subtotal.innerHTML = '<p>$' + subtotal + '</p>';

            iva = subtotal * 0.16;
            contenedor_iva.innerHTML = '<p> $ ' + iva + '</p>';

            precio_total = iva + subtotal;
            contenedor_precio_total.innerHTML = '<p> $ ' + precio_total + '</p>';

            button_guardar.style.display = "block";
        }

    });


    button_guardar.addEventListener('click', () => {
        alert('Datos guardados');
    });


    function eliminarOPC(opc) {
        for (var i = 0; i < selectAuto.length; i++) {
            if (selectAuto.options[i].value == opc)
                selectAuto.remove(i);
        }
    }
});