<?php
function insertEnteControl(){

    global $wpdb;
    $enteControlTableName = "{$wpdb->prefix}sfcwp_entecontrol";

    if (!verifyDataTable($enteControlTableName)) {
        $insertEnteControl = "INSERT INTO {$enteControlTableName}
        (code, enteName)
        VALUES
        (1,	'Procuraduría'),
        (2,	'Contraloría'),
        (3,	'Defensoría del pueblo'),
        (4,	'Personerías'),
        (99,	'Otros')
        ";
        $wpdb->query($insertEnteControl);
    }

}














