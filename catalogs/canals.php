<?php
function insertCanals(){

    global $wpdb;
    $canalsTableName = "{$wpdb->prefix}sfcwp_canals";

    if (!verifyDataTable($canalsTableName)) {
        $insertCanals = "INSERT INTO {$canalsTableName}
        (code, canalName)
        VALUES
        (5,	'Centro de atención telefónica (Call center/Contac center)'),
        (13,	'Internet'),
        (14,	'Oficinas'),
        (NULL,	'Otros')
        ";
        $wpdb->query($insertCanals);
    }

}