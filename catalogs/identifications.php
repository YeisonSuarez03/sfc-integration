<?php
function insertIdentifications(){

    global $wpdb;

    $identificationsTableName = "{$wpdb->prefix}sfcwp_identifications";

    if (!verifyDataTable($identificationsTableName)) {

        $insertIdentifications = "INSERT INTO {$identificationsTableName}
        (code, idName)
        VALUES
        (1,	'Cédula de ciudadanía'),
        (2,	'Cédula de extranjería'),
        (3,	'Número de identificación tributaria (NIT)'),
        (4,	'Tarjeta de identidad'),
        (5,	'Pasaporte'),
        (6,	'Carné diplomático'),
        (7,	'Sociedad extranjera sin NIT en Colombia'),
        (8,	'Fideicomiso, fondos de inversión colectiva, fondo o patrimonio autónomo'),
        (9,	'Número único de identificación personal (NUIP)'),
        (10,	'Permiso por protección temporal (PPT)'),
        (11,	'Permiso especial de permanencia (PEP)')
        ";
        $wpdb->query($insertIdentifications);
    }
}