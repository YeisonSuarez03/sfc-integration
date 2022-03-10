<?php
function insertAceptacion(){

    global $wpdb;
    $aceptacionTableName = "{$wpdb->prefix}sfcwp_aceptacion";

    if (!verifyDataTable($aceptacionTableName)) {
        $insertAceptacion = "INSERT INTO {$aceptacionTableName}
        (code, aceptacionName)
        VALUES
        (1,	'Respuesta final a favor del consumidor financiero aceptadas por la entidad'),
        (2,	'Respuesta final a favor del consumidor financiero no aceptadas por la entidad')
        ";
        $wpdb->query($insertAceptacion);
    }

}