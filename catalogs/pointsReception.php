<?php
function insertPointsReception(){

    global $wpdb;
    $pointsReceptionTableName = "{$wpdb->prefix}sfcwp_points_reception";

    if (!verifyDataTable($pointsReceptionTableName)) {
        $insertPointsReception = "INSERT INTO {$pointsReceptionTableName}
        (code, pointName)
        VALUES
        (1,	'Internet'),
        (2,	'Aplicación móvil'),
        (3,	'Correo electrónico'),
        (4,	'Oficina'),
        (5,	'Call center'),
        (6,	'Audio respuesta'),
        (7,	'Redes sociales'),
        (99,	'Otros Puntos de recepción')
        ";
        $wpdb->query($insertPointsReception);
    }

}