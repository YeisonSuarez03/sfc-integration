<?php

function insertCenterResponsibles(){

    global $wpdb;

    $centerResponsiblesTableName = "{$wpdb->prefix}sfcwp_centers_responsibles";

    if (!verifyDataTable($centerResponsiblesTableName)) {

        $insertCenterResponsibles = "INSERT INTO {$centerResponsiblesTableName}
        (procesoCode, centerCode, responsibleCode)
        VALUES
        (1, 1, 1),
        (1, 1, 2),

        (2, 2, 3),
        (2, 2, 4),

        (3, 1, 5),
        (3, 1, 12),
        (3, 1, 6),
        (3, 3, 5),
        (3, 3, 12),
        (3, 3, 6),
        (3, 4, 5),
        (3, 4, 12),
        (3, 4, 6),
        (3, 5, 5),
        (3, 5, 12),
        (3, 5, 6),

        (4, 1, 5),
        (4, 1, 12),
        (4, 1, 6),
        (4, 3, 5),
        (4, 3, 12),
        (4, 3, 6),
        (4, 4, 5),
        (4, 4, 12),
        (4, 4, 6),
        (4, 5, 5),
        (4, 5, 12),
        (4, 5, 6),

        (5, 13, 7),
        (5, 14, 8),
        (5, 15, 9),
        (5, 5, 10),
        (5, 16, 11),
        (5, 3, 12),
        (5, 17, 13),
        (5, 6, 14),
        (5, 18, 15),
        (5, 7, 16),
        (5, 8, 17),
        (5, 2, 4),
        (5, 9, 18),
        (5, 10, 19),
        (5, 11, 20),
        (5, 12, 21),
        (5, 4, 22),

        (6, 13, 7),
        (6, 14, 8),
        (6, 15, 9),
        (6, 5, 10),
        (6, 16, 11),
        (6, 3, 12),
        (6, 17, 13),
        (6, 6, 14),
        (6, 18, 15),
        (6, 7, 16),
        (6, 8, 17),
        (6, 2, 4),
        (6, 9, 18),
        (6, 10, 19),
        (6, 11, 20),
        (6, 12, 21),
        (6, 4, 22),
        (7, 13, 7),
        (7, 14, 8),
        (7, 15, 9),
        (7, 5, 10),
        (7, 16, 11),
        (7, 3, 12),
        (7, 17, 13),
        (7, 6, 14),
        (7, 18, 15),
        (7, 7, 16),
        (7, 8, 17),
        (7, 2, 4),
        (7, 9, 18),
        (7, 10, 19),
        (7, 11, 20),
        (7, 12, 21),
        (7, 4, 22)
        ";
        $wpdb->query($insertCenterResponsibles);
    }

}