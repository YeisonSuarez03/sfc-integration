<?php

function insertProcesos(){

    global $wpdb;

    $procesosTableName = "{$wpdb->prefix}sfcwp_procesos";

    if (!verifyDataTable($procesosTableName)) {

        $insertProcesos = "INSERT INTO {$procesosTableName}
        (procesoCode, procesoName)
        VALUES
        (1 ,'Gestionar calidad de Café'),
        (2 ,'Realizar Torrefacción'),
        (3 ,'Realizar Comercio Exterior'),
        (4 ,'Realizar Agenciamiento Aduanero'),
        (5 ,'Efectuar Operación Logística'),
        (6 ,'Gestionar Trilla'),
        (7 ,'Realizar Gestión Comercial')
        ";
        $wpdb->query($insertProcesos);
    }

}