<?php
function insertPersonType(){

    global $wpdb;

    $personTypeTableName = "{$wpdb->prefix}sfcwp_persontype";

    if (!verifyDataTable($personTypeTableName)) {
        
        $insertPersonType = "INSERT INTO {$personTypeTableName}
        (code, personTypeName)
        VALUES
        (1,	'Natural'),
        (2,	'Jurídica')
        ";
        $wpdb->query($insertPersonType);
    }

}