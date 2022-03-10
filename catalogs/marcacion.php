<?php
function insertMarcacion(){

    global $wpdb;
    $marcacionTableName = "{$wpdb->prefix}sfcwp_marcacion";

    if (!verifyDataTable($marcacionTableName)) {
        $insertMarcacion = "INSERT INTO {$marcacionTableName}
        (code, marcacionName)
        VALUES
        (1,	'Si la queja o reclamo corresponde a una réplica, es decir, si el consumidor financiero solicita reabrir la queja o reclamo por inconformidad con la respuesta dada por la entidad vigilada y/o el defensor del consumidor financiero, dentro de los dos (2) meses siguientes a la fecha final de cierre de la última respuesta'),
        (2,	'Si la queja o reclamo fue reclasificada por la entidad vigilada respecto de lo que fue remitido a la superintendencia Financiera de Colombia a través del Formato “Smartsupervision - Interposición de queja o reclamo”'),
        (3,	'Si el caso fue cerrado por la entidad vigilada por no ser una queja o reclamo sino otro tipo de petición ante la entidad vigilada'),
        (4,	'Si la queja o reclamo fue cerrada por falta de competencia'),
        (5,	'Si la queja o reclamo fue cerrada por falta de documentación a ser aportada por el consumidor financiero'),
        (6,	'Si la queja o reclamo está en proceso de completar su documentación por parte del consumidor financiero'),
        (7,	'Si la queja fue cerrada por estar repetida en Smartsupervision'),
        (8,	'Si para la queja o reclamo se encuentra en curso una conciliación'),
        (9,	'Si el caso fue cerrado por la entidad vigilada por no ser una queja o reclamo sino una demanda')
        ";
        $wpdb->query($insertMarcacion);
    }

}