<?php
/**
 * Plugin Name: Integración PQRS SFC
 * Description: Manejo de estado de PQRS con integracion SFC
 * Version: 1.0
 * Author: IngenioSoft
 */

 //TRAEMOS FUNCIONES PARA INSTALAR CATALOGOS
 require plugin_dir_path(__FILE__) . "catalogs/countries.php";
 require plugin_dir_path(__FILE__) . "catalogs/departments.php";
 require plugin_dir_path(__FILE__) . "catalogs/municipes.php";
 require plugin_dir_path(__FILE__) . "catalogs/identifications.php";
 require plugin_dir_path(__FILE__) . "catalogs/specialConditions.php";
 require plugin_dir_path(__FILE__) . "catalogs/personType.php";
 require plugin_dir_path(__FILE__) . "catalogs/sex.php";
 require plugin_dir_path(__FILE__) . "catalogs/lgbt.php";
 require plugin_dir_path(__FILE__) . "catalogs/canals.php";
 require plugin_dir_path(__FILE__) . "catalogs/products.php";
 require plugin_dir_path(__FILE__) . "catalogs/motivos.php";
 require plugin_dir_path(__FILE__) . "catalogs/tutela.php";
 require plugin_dir_path(__FILE__) . "catalogs/pqrsStates.php";
 require plugin_dir_path(__FILE__) . "catalogs/digitalProduct.php";
 require plugin_dir_path(__FILE__) . "catalogs/instanceReception.php";
 require plugin_dir_path(__FILE__) . "catalogs/pointsReception.php";
 require plugin_dir_path(__FILE__) . "catalogs/admision.php";
 require plugin_dir_path(__FILE__) . "catalogs/favorability.php";
 require plugin_dir_path(__FILE__) . "catalogs/aceptacion.php";
 require plugin_dir_path(__FILE__) . "catalogs/desestimiento.php";
 require plugin_dir_path(__FILE__) . "catalogs/rectificacion.php";
 require plugin_dir_path(__FILE__) . "catalogs/marcacion.php";
 //CATALOGOS DE PROCESO/CENTRO
 require plugin_dir_path(__FILE__) . "catalogs/procesos.php";
 require plugin_dir_path(__FILE__) . "catalogs/centros.php";
 require plugin_dir_path(__FILE__) . "catalogs/responsables.php";
 require plugin_dir_path(__FILE__) . "catalogs/centerResponsibles.php";
 require plugin_dir_path(__FILE__) . "catalogs/procesoCenters.php";
 //FUNCION PARA OBTENER TABLAS DE CATALOGO
 require plugin_dir_path(__FILE__) . "catalogs/catalogTables.php";
//DEV
 //FUNCION PARA VERIFICAR QUE NO HAYA DATOS EN TABLA PARA INSERTAR CATALOGOS
function verifyDataTable($tableName){
    global $wpdb;
    $tableQuery = "SELECT
    count(1) as cantidad
    FROM {$tableName}
    ";
    $tableResult = $wpdb->get_results($tableQuery, ARRAY_A);
    return $tableResult[0]["cantidad"] > 0;
}

function ActivateSFCIsolutionIntegration(){

    global $wpdb;


    //ARRAY DE CONFIGURACION DE TABLAS
    $tablesArray = getCatalogTables();

    //CREAMOS TABLAS TRAIDAS DEL CATALOG TABLES
    foreach ($tablesArray as $key => $value) {
      $createTableQuery = "CREATE TABLE IF NOT EXISTS {$value['name']} (
        {$value['fields']} 
      )
      ENGINE=MyISAM
      DEFAULT CHARSET=utf8mb4
      COLLATE=utf8mb4_unicode_520_ci;
      "; 
      $wpdb->query($createTableQuery);
    }

    

    //DESPUES DE CREAR TABLA, INSERTAMOS CATALOGOS
    insertCountries();
    insertDeparments();
    insertMunicipes();
    insertIdentifications();
    insertSpecialConditions();
    insertPersonType();
    insertSex();
    insertLgbt();
    insertCanals();
    insertProducts();
    insertMotivos();
    insertTutela();
    insertPqrsStates();
    insertDigitalProduct();
    insertInstanceReception();
    insertPointsReception();
    insertAdmision();
    insertFavorability();
    insertAceptacion();
    insertDesestimiento();
    insertRectification();
    insertMarcacion();
    insertResponsables();
    insertProcesoCenters();
    insertCentros();
    insertProcesos();
    insertCenterResponsibles();

}


function DesactivateSFCIsolutionIntegration(){

    //nothing yet
    /* global $wpdb;
    $countriesTableName = "{$wpdb->prefix}sfcwp_departments";

    $dropTableCountries = "DROP TABLE {$countriesTableName}";
    $wpdb->query($dropTableCountries); */

}

//Endpoints para funcionalidad de selects departamentos y municipios
add_action( 'rest_api_init', function () {
  register_rest_route( 'sfcintegration/v1', '/localities/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'getMunicipalities',
    'args' => array(
      'id' => array(
        //validacion del id
        'validate_callback' => function($param, $request, $key) {
          //validar que sea numerico
          return is_numeric( $param );
        }
      ),
    )
  ) );
} );

add_action( 'rest_api_init', function () {
  register_rest_route( 'sfcintegration/v1', '/centers/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'getProcessCenters',
    'args' => array(
      'id' => array(
        //validacion del id
        'validate_callback' => function($param, $request, $key) {
          //validar que sea numerico
          return is_numeric( $param );
        }
      ),
    )
  ) );
} );

function getProcessCenters($request){

  $processCode = $request["id"];

  global $wpdb;
  $procesoCentersTableName = "{$wpdb->prefix}sfcwp_procesos_centers";
  $centrosTableName = "{$wpdb->prefix}sfcwp_centros";


  $centersQuery = "SELECT wsc.centroCode as code, wsc.centroName as name 
  FROM {$procesoCentersTableName} wspc 
  inner join {$centrosTableName} wsc 
  on wspc.centerCode = wsc.centroCode 
  where wspc.procesoCode = {$processCode}
  ";

  $centersResult = $wpdb->get_results($centersQuery, ARRAY_A);

  $data = array(
    "result" => $centersResult
  );

  $response = new WP_REST_Response( $data );
  $response->set_status( 200 );

  return $response;
  
}

function getMunicipalities($request){

  $departmentCode = $request["id"];

  $data = "";
  $statusCode = 200;
  if ($departmentCode == null || $departmentCode == "") {
    $data = array(
      "response" => false,
      "message" => "Codigo de departamento obligatorio",
      $departmentCode
    );
    $statusCode = 400;
  }else{

    global $wpdb;
    $municipiosTableName = "{$wpdb->prefix}sfcwp_municipios";
    $municipalitiesQuery = "SELECT  
    munCode as code, munName as name
    FROM {$municipiosTableName} 
    WHERE departmentCode = {$departmentCode}
    ";

    $municipalitiesResults = $wpdb->get_results($municipalitiesQuery, ARRAY_A);

    $data = array(
      "response" => true,
      "result" => $municipalitiesResults
    );
    $statusCode = 200;
  }


  $response = new WP_REST_Response( $data );
  $response->set_status( $statusCode );

  return $response;

}

//CONFIGURACION PARTE VISUAL

/*AGREGAR PLUGIN A BARRA LATERAL*/

add_action('admin_menu', 'CrearMenuSFCINTEGRATION');

function CrearMenuSFCINTEGRATION()
{
    add_menu_page(
        'PQR\'s', //Titulo de la pagina
        'PQR\'s', //Titulo del menu
        'manage_options', //Capability
        plugin_dir_path(__FILE__) . 'admin/descargadasSFC.php', //Slug
        null, //Funcion del contenido
        plugin_dir_url(__FILE__) . 'admin/img/icon.png', //Icono
        '2'
    );
	
	add_submenu_page(
	 plugin_dir_path(__FILE__) . 'admin/descargadasSFC.php', //Slug
	'Descargadas SFC',
	'Descargadas SFC',
    'manage_options',
	 plugin_dir_path(__FILE__) . 'admin/descargadasSFC.php' //Slug
	);
}
//encolar bootstrap

function EncolarBootstrapJSSFC($hook){
    if($hook != "sfc-integration/admin/descargadasSFC.php"){
        return ;
    }
    wp_enqueue_script('bootstrapJs',plugins_url('admin/bootstrap/js/bootstrap.min.js',__FILE__),array('jquery'));
}
add_action('admin_enqueue_scripts','EncolarBootstrapJSSFC');

function EncolarBootstrapCSSSFC($hook){
    if($hook != "sfc-integration/admin/descargadasSFC.php" ){
        return ;
    }
    wp_enqueue_style('bootstrapCSS',plugins_url('admin/bootstrap/css/bootstrap.min.css',__FILE__));
}
add_action('admin_enqueue_scripts','EncolarBootstrapCSSSFC');

function EncolarCSSSFC($hook){
    wp_enqueue_style('CSSSFC',plugins_url('admin/css/custom.css',__FILE__));
}
add_action('admin_enqueue_scripts','EncolarCSSSFC');


register_activation_hook(__FILE__, 'ActivateSFCIsolutionIntegration');
register_deactivation_hook(__FILE__, 'DesactivateSFCIsolutionIntegration');