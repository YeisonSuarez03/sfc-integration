<?php
function insertPqrsStates(){

    global $wpdb;
    $pqrsStatesTableName = "{$wpdb->prefix}sfcwp_pqrs_states";

    if (!verifyDataTable($pqrsStatesTableName)) {
        $insertPqrsStates = "INSERT INTO {$pqrsStatesTableName}
        (code, stateName)
        VALUES
        (1,	'Recibida'),
        (2,	'Abierta'),
        (4,	'Cerrada')
        ";
        $wpdb->query($insertPqrsStates);
    }

}