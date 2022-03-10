<?php
function insertTutela(){

    global $wpdb;
    $tutelaTableName = "{$wpdb->prefix}sfcwp_tutela";

    if (!verifyDataTable($tutelaTableName)) {
        $insertTutela = "INSERT INTO {$tutelaTableName}
        (code, tutelaName)
        VALUES
        (1,	'Si'),
        (2,	'No')
        ";
        $wpdb->query($insertTutela);
    }

}