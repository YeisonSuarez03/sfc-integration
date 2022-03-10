<?php
function insertMotivos(){

    global $wpdb;
    $motivosTableName = "{$wpdb->prefix}sfcwp_motivos";

    if (!verifyDataTable($motivosTableName)) {
        $insertMotivos = "INSERT INTO {$motivosTableName}
        (code, reasonName)
        VALUES
        (901,	'Publicidad engañosa'),
        (902,	'Dificultad en el acceso a la información'),
        (903,	'Información o asesoría incompleta y/o errada '),
        (904,	'Información inoportuna'),
        (905,	'Dificultad en la comunicación con la entidad'),
        (906,	'Mal trato por parte de un funcionario'),
        (907,	'Mal trato por parte del asesor comercial o proveedor'),
        (908,	'Presunta actuación fraudulenta o no ética del personal'),
        (909,	'Incumplimiento de los términos del contrato'),
        (910,	'Presunta suplantación de personas '),
        (911,	'Cotización errada'),
        (912,	'Demora o no entrega de la cotización y/o simulación'),
        (913,	'Demora o no entrega del contrato o de la póliza'),
        (914,	'Error o falta de claridad en las cláusulas del contrato o de la póliza'),
        (915,	'Diferencia del producto expedido con el solicitado o cotizado o simulado'),
        (916,	'Vinculación no autorizada'),
        (917,	'Condicionamiento a la adquisición de productos o servicios'),
        (918,	'No cancelación o terminación de los productos'),
        (920,	'No entrega de paz y salvo'),
        (921,	'Demora o no devolución de saldos, aportes o primas'),
        (923,	'Negación injustificada a la apertura del producto'),
        (924,	'Negación a la apertura de productos por condiciones de segmentos particulares de la población'),
        (925,	'No recepción de billetes y/o monedas'),
        (926,	'No disponibilidad o fallas de los canales de atención'),
        (927,	'Obstáculo para la interposición de quejas, reclamos o peticiones'),
        (928,	'Demora en la respuesta a quejas, reclamos o peticiones'),
        (929,	'Errores en la resolución de quejas, reclamos o peticiones.'),
        (930,	'No resolución a quejas, peticiones y reclamos'),
        (931,	'Reporte injustificado a centrales de riesgo'),
        (932,	'No levantamiento de reporte negativo a centrales de riesgo'),
        (933,	'Demora o no modificación de datos personales'),
        (934,	'Actualización equivocada de datos personales'),
        (935,	'Inadecuado tratamiento de datos personales'),
        (936,	'Información incompleta y/o errada en la ejecución'),
        (937,	'No aplicación de los protocolos especiales de atención '),
        (938,	'Inconsistencias en los pagos a terceros'),
        (939,	'Transacción mal aplicada'),
        (940,	'Transacción no reconocida'),
        (941,	'Cobro por transacciones en internet'),
        (942,	'Demora o no aplicación del pago'),
        (943,	'Error en la aplicación del pago'),
        (944,	'Inconformidad por cobros de terceros'),
        (945,	'Dificultad o imposibilidad para realizar transacciones o consulta de información por el canal'),
        (946,	'Demora en la atención o en el servicio requerido '),
        (947,	'Seguridad en canales '),
        (948,	'Omisión o envío tardío o inoportuno de informes, extractos o reportes a los que esté obligada la entidad.'),
        (949,	'Errores en el contenido de la información en informes, extractos o reportes.'),
        (950,	'Limitación en la expedición de certificaciones'),
        (951,	'Inconformidad en procesos - Constitución, Modificación y Levantamiento -  de garantía'),
        (952,	'Producto terminado o cancelado sin justificación'),
        (953,	'Inconformidad por bloqueo de productos'),
        (954,	'Incrementos de tarifas no pactadas o informadas'),
        (955,	'Error en la facturación o cobro no pactado'),
        (956,	'Modificación de condiciones en contratos'),
        (957,	'Inconsistencia en el cobro de comisiones - Descuentos injustificados '),
        (958,	'Inconsistencia en el cobro de gastos '),
        (959,	'Inconsistencia en el cálculo y/o aplicación de impuestos'),
        (960,	'Inoportunidad en la aplicación o cobro de comisiones o gastos bancarios'),
        (962,	'Inconformidad con procesos internos de conocimiento del cliente y SARLAFT'),
        (963,	'Fallas o inoportunidad en el proceso de vinculación'),
        (964,	'Información sujeta a reserva'),
        (965,	'Indebido deber de asesoría'),
        (966,	'Fallas en operaciones en moneda extranjera'),
        (967,	'Diferencias en monetización'),
        (968,	'Distribución de portafolio'),
        (969,	'Remesas')
        ";
        $wpdb->query($insertMotivos);
    }

}