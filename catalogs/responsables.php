<?php

function insertResponsables(){

    global $wpdb;

    $responsiblesTableName = "{$wpdb->prefix}sfcwp_responsibles";

    if (!verifyDataTable($responsiblesTableName)) {

        $insertResponsables = "INSERT INTO {$responsiblesTableName}
        (responsibleCode, responsibleName, responsibleEmail)
        VALUES
        (1, 'Fernando Arturo Osorio', 'fernando.osorio@almacafe.com.co'),
        (2, 'Daniel Garcia', 'daniel.garcia@almacafe.com.co'),
        (3, 'Fernando Trillos', 'fernando.trillos@almacafe.com.co'),
        (4, 'Jhon Freddy Mora Tapasco', 'john.mora@almacafe.com.co'),
        (5, 'Jimmy Fonseca', 'jimmy.fonseca@almacafe.com.co'),
        (6, 'Angélica Quintana', 'angelica.quintana@almacafe.com.co'),
        (7, 'Jaime Ospina', 'Jaime.Ospina@almacafe.com.co'),
        (8, 'Henry Amorocho', 'Henry.Amorocho@almacafe.com.co'),
        (9, 'Jorge Larrarte', 'jorge.larrarte@almacafe.com.co'),
        (10, 'Angélica Jhohana Quintana Suarez', 'Angélica.quintana@almacafe.com.co'),
        (11, 'Nicolás Piedrahita Pineda', 'Nicolas.piedrahita@almacafe.com.co'),
        (12, 'Ivette Canchila', 'ivette.canchila@almacafe.com.co'),
        (13, 'Juan Camilo Del Rio Rodríguez', 'juan.delrio@almacafe.com.co'),
        (14, 'Maria Angelica Orjuela', 'Angelica.Orjuela@almacafe.com.co'),
        (15, 'Cesar Herrera', 'Cesar.Herrera@almacafe.com.co'),
        (16, 'Carlos Arturo Gomez', 'Carlos.Gomez@almacafe.com.co'), 
        (17, 'Nicolas Martignon', 'Nicolas.Martignon@almacafe.com.co'),
        (18, 'Diego Tovar', 'Diego.Tovar@almacafe.com.co'),
        (19, 'Ruth Del Socorro Morales Pabón', 'ruth.morales@almacafe.com c'),
        (20, 'Luis Adriano Orozco', 'Luis.Orozco@almacafe.com.co'),
        (21, 'Juan Carlos Garrido', 'JuanC.Garrido@almacafe.com.co'),
        (22, 'Alfonso Campo', 'Alfonso.Campo@almacafe.com.co')
        ";
        $wpdb->query($insertResponsables);
    }

}