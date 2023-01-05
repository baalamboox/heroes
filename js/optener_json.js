$(document).ready(() => {
    $('#tabla_heroes').hide();
    $('#btn_obtener_heroes').click(() => {
        $.getJSON("https://cdn.jsdelivr.net/gh/akabab/superhero-api@0.3.0/api/all.json", function (data) {
            //nombre del obejto clave
            var customJSON = [];
            var datos = JSON.stringify(data);
            datos = JSON.parse(datos)
            $.each(datos, function (index, item) {
                console.log(index);
                customJSON.push({ "imagen": item.images.sm, "nombre": item.name, "apariencia": item.appearance.gender, "biografia": item.biography.fullName, "trabajo": item.work.occupation, "conexion": item.connections.groupAffiliation });
            });
            $.ajax({
                type: 'POST',
                url: 'control/control-heroes.php',
                data: {
                    'json_data': JSON.stringify(customJSON)
                },
                success: resultado => {
                    console.log(resultado);
                }
            });
        });
        /* Camara Fer tu puedes xd, eres un loco xd */
    });
    $('#btn_borrar_heroes').click(() => {
    });
    $('#btn_mostrar_heroes').click(() => {
        $('#tabla_heroes').toggle();
        $('#datos_heroes').load('view/tabla-heroes.php');
    });
});