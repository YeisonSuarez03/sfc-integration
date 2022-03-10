<?php
function insertRectification(){

    global $wpdb;
    $rectificationTableName = "{$wpdb->prefix}sfcwp_rectification";

    if (!verifyDataTable($rectificationTableName)) {
        $insertRectification = "INSERT INTO {$rectificationTableName}
        (code, rectificationName)
        VALUES
        (1,	'Queja o reclamo rectificada por la entidad vigilada antes de la decisión del DCF'),
        (2,	'Queja o reclamo no rectificada por la entidad vigilada antes de la decisión del DCF'),
        (3,	'Queja o reclamo rectificada por la entidad vigilada después de la decisión del DCF'),
        (4,	'Queja o reclamo no rectificada por la entidad vigilada después de la decisión del DCF')
        ";
        $wpdb->query($insertRectification);
    }

}