<?php
function insertInstanceReception(){

    global $wpdb;
    $instanceReceptionTableName = "{$wpdb->prefix}sfcwp_instance_reception";

    if (!verifyDataTable($instanceReceptionTableName)) {
        $insertInstanceReception = "INSERT INTO {$instanceReceptionTableName}
        (code, instanceName)
        VALUES
        (1,	'Superintendencia Financiera de Colombia'),
        (2,	'Entidad vigilada'),
        (3,	'Defensor del consumidor financiero'),
        (9,	'Otra (remisión por competencia)')
        ";
        $wpdb->query($insertInstanceReception);
    }

}