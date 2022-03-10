<?php

function insertProcesoCenters(){

    global $wpdb;

    $procesoCentersTableName = "{$wpdb->prefix}sfcwp_procesos_centers";

    if (!verifyDataTable($procesoCentersTableName)) {

        $insertProcesoCenters = "INSERT INTO {$procesoCentersTableName}
        (procesoCode, centerCode)
        VALUES
        (1, 1),
        (2, 2),
        (3, 1),
        (3, 3),
        (3, 4),
        (3, 5),
        (4, 1),
        (4, 3),
        (4, 4),
        (4, 5),
        (5, 13),
        (5, 14),
        (5, 15),
        (5, 5),
        (5, 16),
        (5, 3),
        (5, 17),
        (5, 6),
        (5, 18),
        (5, 7),
        (5, 8),
        (5, 2),
        (5, 9),
        (5, 10),
        (5, 11),
        (5, 12),
        (5, 4),
        (6, 13),
        (6, 14),
        (6, 15),
        (6, 5),
        (6, 16),
        (6, 3),
        (6, 17),
        (6, 6),
        (6, 18),
        (6, 7),
        (6, 8),
        (6, 2),
        (6, 9),
        (6, 10),
        (6, 11),
        (6, 12),
        (6, 4),
        (7, 13),
        (7, 14),
        (7, 15),
        (7, 5),
        (7, 16),
        (7, 3),
        (7, 17),
        (7, 6),
        (7, 18),
        (7, 7),
        (7, 8),
        (7, 2),
        (7, 9),
        (7, 10),
        (7, 11),
        (7, 12),
        (7, 4)
        ";
        $wpdb->query($insertProcesoCenters);
    }

}