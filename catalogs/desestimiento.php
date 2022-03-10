<?php
function insertDesestimiento(){

    global $wpdb;
    $desestimientoTableName = "{$wpdb->prefix}sfcwp_desestimiento";

    if (!verifyDataTable($desestimientoTableName)) {
        $insertDesestimiento = "INSERT INTO {$desestimientoTableName}
        (code, desestimientoName)
        VALUES
        (1,	'Queja o reclamo desistida por el CF'),
        (2,	'Queja o reclamo no desistida por el CF')
        ";
        $wpdb->query($insertDesestimiento);
    }

}