import './bootstrap';
import $ from 'jquery';

// resources/js/app.js

$(document).ready(function() {
    $('#tipo').change(function() {
        var tipo = $(this).val();
        $('#costoPrecioGroup').empty(); // Limpiar el contenido anterior

        if (tipo === 'entrada') {
            $('#costoPrecioGroup').append(`
                <label for="costo">Costo</label>
                <input type="number" name="costo" id="costo" class="form-control" step="0.01" required>
            `);
        } else if (tipo === 'salida') {
            $('#costoPrecioGroup').append(`
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
            `);
        }
    });
});

