<?php
function insertSpecialConditions(){

    global $wpdb;

    $specialConditionsTableName = "{$wpdb->prefix}sfcwp_special_conditions";

    if (!verifyDataTable($specialConditionsTableName)) {
        
        $insertSpecialConditions = "INSERT INTO {$specialConditionsTableName}
        (code, conditionName)
        VALUES
        (1,	'Adulto mayor'),
        (2,	'Pensionado'),
        (3,	'Receptor de subsidio'),
        (4,	'Discapacidad auditiva'),
        (5,	'Discapacidad física'),
        (6,	'Menor de edad'),
        (7,	'Indígena'),
        (8,	'Mujer embarazada'),
        (9,	'Reinsertado'),
        (10,	'Víctima del conflicto armado'),
        (11,	'Afrocolombiano'),
        (12,	'Desplazado'),
        (13,	'Madre cabeza de familia'),
        (14,	'Sordomudo'),
        (15,	'Discapacidad cognitiva'),
        (16,	'Discapacidad visual'),
        (17,	'Periodista'),
        (90,	'Otra'),
        (98,	'No aplica')
        ";
        $wpdb->query($insertSpecialConditions);
    }

}