<?php

function getCatalogTables(){

    global $wpdb;
    //NOMBRES DE CADA TABLA
    $countriesTableName = "{$wpdb->prefix}sfcwp_countries";
    $departmentsTableName = "{$wpdb->prefix}sfcwp_departments";
    $municipiosTableName = "{$wpdb->prefix}sfcwp_municipios";
    $identificationsTableName = "{$wpdb->prefix}sfcwp_identifications";
    $specialConditionsTableName = "{$wpdb->prefix}sfcwp_special_conditions";
    $personTypeTableName = "{$wpdb->prefix}sfcwp_persontype";
    $sexTableName = "{$wpdb->prefix}sfcwp_sex";
    $lgbtTableName = "{$wpdb->prefix}sfcwp_lgbt";
    $canalsTableName = "{$wpdb->prefix}sfcwp_canals";
    $productsTableName = "{$wpdb->prefix}sfcwp_products";
    $motivosTableName = "{$wpdb->prefix}sfcwp_motivos";
    $tutelaTableName = "{$wpdb->prefix}sfcwp_tutela";
    $pqrsStatesTableName = "{$wpdb->prefix}sfcwp_pqrs_states";
    $digitalProductTableName = "{$wpdb->prefix}sfcwp_digital_product";
    $instanceReceptionTableName = "{$wpdb->prefix}sfcwp_instance_reception";
    $pointsReceptionTableName = "{$wpdb->prefix}sfcwp_points_reception";
    $admisionTableName = "{$wpdb->prefix}sfcwp_admision";
    $favorabilityTableName = "{$wpdb->prefix}sfcwp_favorability";
    $aceptacionTableName = "{$wpdb->prefix}sfcwp_aceptacion";
    $desestimientoTableName = "{$wpdb->prefix}sfcwp_desestimiento";
    $rectificationTableName = "{$wpdb->prefix}sfcwp_rectification";
    $marcacionTableName = "{$wpdb->prefix}sfcwp_marcacion";
    $procesosTableName = "{$wpdb->prefix}sfcwp_procesos";
    $centrosTableName = "{$wpdb->prefix}sfcwp_centros";
    $responsiblesTableName = "{$wpdb->prefix}sfcwp_responsibles";
    $procesoCentersTableName = "{$wpdb->prefix}sfcwp_procesos_centers";
    $centerResponsiblesTableName = "{$wpdb->prefix}sfcwp_centers_responsibles";
    $enteControlTableName = "{$wpdb->prefix}sfcwp_entecontrol";

    //pqrs table
    $pqrsTable = "{$wpdb->prefix}sfcwp_pqrs";
    //pqrs anexos table
    $pqrsAnexosTable = "{$wpdb->prefix}sfcwp_pqrs_anexos";
    //pqrs observations table
    $pqrsObservationsTable = "{$wpdb->prefix}sfcwp_pqrs_observations";

    return array(
        "countries" => array(
          "name" => $countriesTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          countryName VARCHAR(100) NOT NULL,
          isoCode INT NOT NULL,
          CONSTRAINT sfcwp_countries_PK PRIMARY KEY (id)"
          ),
        "departments" => array(
          "name" => $departmentsTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          departmentName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_departments_PK PRIMARY KEY (id) "
        ),
        "municipios" => array(
          "name" => $municipiosTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          departmentCode INT NOT NULL,
          munCode INT NOT NULL,
          munName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_municipios_PK PRIMARY KEY (id) "
        ),
        "identifications" => array(
          "name" => $identificationsTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          idName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_identifications_PK PRIMARY KEY (id) "
        ),
        "specialConditions" => array(
          "name" => $specialConditionsTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          conditionName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_special_conditions_PK PRIMARY KEY (id) "
        ),
        "personTypes" => array(
          "name" => $personTypeTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          personTypeName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_persontype_PK PRIMARY KEY (id) "
        ),
        "sex" => array(
          "name" => $sexTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          sexName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_sex_PK PRIMARY KEY (id) "
        ),
        "lgbt" => array(
          "name" => $lgbtTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          lgbtName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_lgbt_PK PRIMARY KEY (id) "
        ),
        "canals" => array(
          "name" => $canalsTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          canalName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_canals_PK PRIMARY KEY (id) "
        ),
        "products" => array(
          "name" => $productsTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          productName VARCHAR(100) NOT NULL,
          CONSTRAINT sfcwp_products_PK PRIMARY KEY (id) "
        ),
        "motivos" => array(
          "name" => $motivosTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          reasonName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_motivos_PK PRIMARY KEY (id) "
        ),
        "tutela" => array(
          "name" => $tutelaTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          tutelaName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_tutela_PK PRIMARY KEY (id) "
        ),
        "pqrsStates" => array(
          "name" => $pqrsStatesTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          stateName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_pqrs_states_PK PRIMARY KEY (id) "
        ),
        "digitalProduct" => array(
          "name" => $digitalProductTableName,
          "fields" => " id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          stateName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_digital_product_PK PRIMARY KEY (id) "
        ),
        "instanceReception" => array(
          "name" => $instanceReceptionTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          instanceName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_instance_reception_PK PRIMARY KEY (id) "
        ),
        "pointsReception" => array(
          "name" => $pointsReceptionTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          pointName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_points_reception_PK PRIMARY KEY (id) "
        ),
        "admision" => array(
          "name" => $admisionTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          admisionName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_admision_PK PRIMARY KEY (id) "
        ),
        "favorability" => array(
          "name" => $favorabilityTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          favorabilityName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_favorability_PK PRIMARY KEY (id)"
        ),
        "aceptacion" => array(
          "name" => $aceptacionTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          aceptacionName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_aceptacion_PK PRIMARY KEY (id) "
        ),
        "desestimiento" => array(
          "name" => $desestimientoTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          desestimientoName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_desestimiento_PK PRIMARY KEY (id)"
        ),
        "rectificacion" => array(
          "name" => $rectificationTableName,
          "fields" => " id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          rectificationName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_rectification_PK PRIMARY KEY (id) "
        ),
        "marcacion" => array(
          "name" => $marcacionTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NULL,
          marcacionName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_marcacion_PK PRIMARY KEY (id) "
        ),
        "procesos" => array(
          "name" => $procesosTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          procesoCode INT NOT NULL,
          procesoName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_procesos_PK PRIMARY KEY (id) "
        ),
        "centros" => array(
          "name" => $centrosTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          centroCode INT NOT NULL,
          centroName VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_centros_PK PRIMARY KEY (id) "
        ),
        "responsibles" => array(
          "name" => $responsiblesTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          responsibleCode INT NOT NULL,
          responsibleName VARCHAR(500) NULL,
          responsibleEmail VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_responsibles_PK PRIMARY KEY (id) "
        ),
        "procesoCenters" => array(
          "name" => $procesoCentersTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          procesoCode INT NOT NULL,
          centerCode INT NOT NULL,
          CONSTRAINT sfcwp_procesoCenters_PK PRIMARY KEY (id) "
        ),
        "centerResponsibles" => array(
          "name" => $centerResponsiblesTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          procesoCode INT NOT NULL,
          centerCode INT NOT NULL,
          responsibleCode INT NOT NULL,
          CONSTRAINT sfcwp_centerResponsibles_PK PRIMARY KEY (id) "
        ),
        "pqrs" => array(
          "name" => $pqrsTable,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          tipo_entidad INT  NULL,
          entidad_cod INT  NULL,
          isolution_code VARCHAR(20) NULL,
          process_code INT NULL,
          center_code INT NULL,
          pqrs_sfc_code VARCHAR(20) NULL,
          fecha_creacion TIMESTAMP  NULL,
          codigo_queja VARCHAR(20)  NULL,
          codigo_pais INT  NULL,
          departamento_cod INT  NULL,
          municipio_cod INT  NULL,
          nombres VARCHAR(100)  NULL,
          tipo_id_CF INT  NULL,
          numero_id_CF VARCHAR(20)  NULL,
          tipo_persona INT  NULL,
          sexo INT  NULL,
          lgbtiq INT  NULL,
          canal_cod INT  NULL,
          condicion_especial INT  NULL,
          producto_cod INT  NULL,
          producto_nombre VARCHAR(100)  NULL,
          macro_motivo_cod INT  NULL,
          texto_queja VARCHAR(1000)  NULL,
          anexo_queja TINYINT(1)  NULL,
          tutela INT NULL,
          ente_control INT NULL,
          escalamiento_DCF INT NULL,
          replica INT NULL,
          argumento_replica VARCHAR(1000) NULL,
          desistimiento_queja INT NULL,
          queja_expres INT NULL,
          status_queja_sfc INT NULL,
          status_intern_code INT NULL,
          status_intern_name VARCHAR(30) NULL,
          CONSTRAINT sfcwp_pqrs_PK PRIMARY KEY (id)"
        ),
        "anexos" => array(
          "name" => $pqrsAnexosTable,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          anexoId INT NOT NULL,
          file VARCHAR(1000) NOT NULL,
          type VARCHAR(5) NOT NULL,
          codigo_queja VARCHAR(20) NOT NULL,
          state INT NOT NULL,
          CONSTRAINT sfcwp_pqrs_anexos_PK PRIMARY KEY (id)"
        ),
        "observations" => array(
          "name" => $pqrsObservationsTable,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          pqrs_sfc_code INT NOT NULL,
          isolution_code VARCHAR(20) NOT NULL,
          observationText VARCHAR(500) NOT NULL,
          CONSTRAINT sfcwp_pqrs_anexos_PK PRIMARY KEY (id)"
        ),
        "ente_control" => array(
          "name" => $enteControlTableName,
          "fields" => "id INT NOT NULL AUTO_INCREMENT,
          code INT NOT NULL,
          enteName VARCHAR(20) NOT NULL,
          CONSTRAINT sfcwp_pqrs_anexos_PK PRIMARY KEY (id)"
        ),
        );
}
