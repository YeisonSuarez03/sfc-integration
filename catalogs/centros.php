<?php

function insertCentros(){

    global $wpdb;

    $centrosTableName = "{$wpdb->prefix}sfcwp_centros";

    if (!verifyDataTable($centrosTableName)) {

        $insertCentros = "INSERT INTO {$centrosTableName}
        (centroCode, centroName)
        VALUES
        (1 ,'Oficina Principal'), 
        (2 ,'Torrefactora'),
        (3 ,'Cartagena'),
        (4 ,'Santa Marta'),
        (5 ,'Buenaventura'),
        (6 ,'IBAGUÉ'),
        (7 ,'MEDELLÍN'),
        (8 ,'NEIVA'),
        (9 ,'CEDI'),
        (10 ,'PASTO'),
        (11 ,'PEREIRA'),
        (12 ,'POPAYÁN'),
        (13 ,'ARMENIA'),
        (14 ,'BOGOTÁ'),
        (15 ,'BUCARAMANGA'),
        (16 ,'BUGA'),
        (17 ,'CÚCUTA'),
        (18 ,'MANIZALES')
        ";
        $wpdb->query($insertCentros);
    }

}