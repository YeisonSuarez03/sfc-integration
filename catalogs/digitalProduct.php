<?php
function insertDigitalProduct(){

    global $wpdb;
    $digitalProductTableName = "{$wpdb->prefix}sfcwp_digital_product";

    if (!verifyDataTable($digitalProductTableName)) {
        $insertDigitalProduct = "INSERT INTO {$digitalProductTableName}
        (code, stateName)
        VALUES
        (1,	'SI'),
        (2,	'NO')
        ";
        $wpdb->query($insertDigitalProduct);
    }

}