<?php
function insertSex(){

    global $wpdb;

    $sexTableName = "{$wpdb->prefix}sfcwp_sex";

    if (!verifyDataTable($sexTableName)) {
        
        $insertSex = "INSERT INTO {$sexTableName}
        (code, sexName)
        VALUES
        (1,	'Femenino'),
        (2,	'Masculino'),
        (10,	'No aplica')
        ";
        $wpdb->query($insertSex);
        }        
}