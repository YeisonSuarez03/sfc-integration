<?php
function insertFavorability(){

    global $wpdb;
    $favorabilityTableName = "{$wpdb->prefix}sfcwp_favorability";

    if (!verifyDataTable($favorabilityTableName)) {
        $insertFavorability = "INSERT INTO {$favorabilityTableName}
        (code, favorabilityName)
        VALUES
        (1,	'Favorable'),
        (2,	'Parcialmente favorable'),
        (3,	'No favorable')
        ";
        $wpdb->query($insertFavorability);
    }

}