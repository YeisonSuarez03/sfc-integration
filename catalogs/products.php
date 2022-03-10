<?php
function insertProducts(){

    global $wpdb;
    $productsTableName = "{$wpdb->prefix}sfcwp_products";

    if (!verifyDataTable($productsTableName)) {
        $insertProducts = "INSERT INTO {$productsTableName}
        (code, productName)
        VALUES
        (NULL,	'Otro')
        ";
        $wpdb->query($insertProducts);
    }

}