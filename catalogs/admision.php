<?php
function insertAdmision(){

    global $wpdb;
    $admisionTableName = "{$wpdb->prefix}sfcwp_admision";

    if (!verifyDataTable($admisionTableName)) {
        $insertAdmision = "INSERT INTO {$admisionTableName}
        (code, admisionName)
        VALUES
        (1,	'Queja o reclamo inadmitida y/o rechazada por el DCF'),
        (2,	'Queja o reclamo admitida por el DCF'),
        (9,	'No Aplica')
        ";
        $wpdb->query($insertAdmision);
    }

}