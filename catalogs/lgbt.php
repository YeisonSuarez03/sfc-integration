<?php
function insertLgbt(){
    global $wpdb;
    $lgbtTableName = "{$wpdb->prefix}sfcwp_lgbt";
    if (!verifyDataTable($lgbtTableName)) {
        $insertLgbt = "INSERT INTO {$lgbtTableName}
        (code, lgbtName)
        VALUES
        (1,	'SI'),
        (2,	'NO')
        ";
        $wpdb->query($insertLgbt);
    }
}