<?php

//funcion para extraer cada catalogo
function getCatalog($catalogTable){
	global $wpdb;
	$catalogQuery = "SELECT *
	FROM {$catalogTable}
	";
	$catalogResults = $wpdb->get_results($catalogQuery, ARRAY_A);
	return $catalogResults;
}

global $wpdb;

$catalogTables = array(
	"countries" => "{$wpdb->prefix}sfcwp_countries",
    "departments" => "{$wpdb->prefix}sfcwp_departments",
    "municipios" => "{$wpdb->prefix}sfcwp_municipios",
    "identifications" => "{$wpdb->prefix}sfcwp_identifications",
    "special_conditions" => "{$wpdb->prefix}sfcwp_special_conditions",
    "persontype" => "{$wpdb->prefix}sfcwp_persontype",
    "sex" => "{$wpdb->prefix}sfcwp_sex",
    "lgbt" => "{$wpdb->prefix}sfcwp_lgbt",
    "canals" => "{$wpdb->prefix}sfcwp_canals",
    "products" => "{$wpdb->prefix}sfcwp_products",
    "motivos" => "{$wpdb->prefix}sfcwp_motivos",
    "tutela" => "{$wpdb->prefix}sfcwp_tutela",
    "pqrs_states" => "{$wpdb->prefix}sfcwp_pqrs_states",
    "digital_product" => "{$wpdb->prefix}sfcwp_digital_product",
    "instance_reception" => "{$wpdb->prefix}sfcwp_instance_reception",
    "points_reception" => "{$wpdb->prefix}sfcwp_points_reception",
    "admision" => "{$wpdb->prefix}sfcwp_admision",
    "favorability" => "{$wpdb->prefix}sfcwp_favorability",
    "aceptacion" => "{$wpdb->prefix}sfcwp_aceptacion",
    "desestimiento" => "{$wpdb->prefix}sfcwp_desestimiento",
    "rectification" => "{$wpdb->prefix}sfcwp_rectification",
    "marcacion" => "{$wpdb->prefix}sfcwp_marcacion",
    "procesos" => "{$wpdb->prefix}sfcwp_procesos",
);

$countriesCatalog 			= getCatalog($catalogTables["countries"]);
$identificationsCatalog 	= getCatalog($catalogTables["identifications"]);
$special_conditionsCatalog 	= getCatalog($catalogTables["special_conditions"]);
$sexCatalog 				= getCatalog($catalogTables["sex"]);
$lgbtCatalog				= getCatalog($catalogTables["lgbt"]);
$canalsCatalog 				= getCatalog($catalogTables["canals"]);
$productsCatalog  			= getCatalog($catalogTables["products"]);
$motivosCatalog 			= getCatalog($catalogTables["motivos"]);
$tutelaCatalog 				= getCatalog($catalogTables["tutela"]);
$desestimientoCatalog 		= getCatalog($catalogTables["desestimiento"]);
$pqrs_statesCatalog 		= getCatalog($catalogTables["pqrs_states"]);
$persontypeCatalog 			= getCatalog($catalogTables["persontype"]);
$departmentsCatalog 		= getCatalog($catalogTables["departments"]);
$procesosCatalog 			= getCatalog($catalogTables["procesos"]);
$digital_productCatalog 	= getCatalog($catalogTables["digital_product"]);
$points_receptionCatalog 	= getCatalog($catalogTables["points_reception"]);
$instance_receptionCatalog 	= getCatalog($catalogTables["instance_reception"]);
$admisionCatalog 			= getCatalog($catalogTables["admision"]);
$favorabilityCatalog 		= getCatalog($catalogTables["favorability"]);
$aceptacionCatalog 			= getCatalog($catalogTables["aceptacion"]);
$rectificationCatalog 		= getCatalog($catalogTables["rectification"]);
$marcacionCatalog 			= getCatalog($catalogTables["marcacion"]);


?>

<div class="container bg-gray w-100">
<form>

	<div class="row w-100">
		<div class="col-12 border border-dark p-2">
			<div class="row w-100 justify-content-center m-0">
				<div class="col-12 my-3 p-3 border border-secondary rounded-2">
					<div class="row mb-2">
						<h4>Identificación PQR</h4>
					</div>
					<div class="row justify-content-start align-items-center w-100">

						<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="date">Fecha</label>
							<input class="inputMaxWidth" type="text" name="date" id="date">
						</div>
						<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="entityType">Tipo de Entidad</label>
							<input class="inputMaxWidth" type="text" name="entityType" id="entityType">
						</div>
						<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="entityCode">Código de Entidad</label>
							<input class="inputMaxWidth" type="text" name="entityCode" id="entityCode">
						</div>
						<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="isolutionCode">Código Isolution</label>
							<input class="inputMaxWidth" type="text" name="isolutionCode" id="isolutionCode">
						</div>
						<div class="d-flex w-25 my-2 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="proceso">Proceso</label>
							<select class="inputMaxWidth" name="proceso" id="proceso">
								<option value="">Seleccione: </option>
								<?php
								foreach ($procesosCatalog as $key => $value) {
									?>
									<option value="<?php echo $value["procesoCode"]; ?>"><?php echo $value["procesoName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>

						<div class="d-flex w-25 my-2 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="centro">Centro</label>
							<select class="inputMaxWidth" name="centro" id="centro">
								<option value="">Seleccione: </option>
							</select>
						</div>

					</div>
				</div>

				<div class="col-12 my-3 p-3 border border-secondary rounded-2">
					<div class="row my-3 justify-content-start align-items-center w-100">

						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="country">País</label>
							<select class="inputMaxWidth"  name="country" id="country">
								<option value="">Seleccione: </option>
								<?php
								foreach ($countriesCatalog as $key => $value) {
									?>
									<option value="<?php echo $value["isoCode"]; ?>"><?php echo $value["countryName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="department">Departamento</label>
							<select class="inputMaxWidth"  name="department" id="department">
								<option value="">Seleccione: </option> 
								<?php
								foreach ($departmentsCatalog  as $key => $value) {
									?>
									<option value="<?php echo $value["code"]; ?>"><?php echo $value["departmentName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="municipality">Municipio</label>
							<select class="inputMaxWidth"  name="municipality" id="municipality">
								<option value="">Seleccione: </option>
							</select>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="personType">Tipo persona</label>
							<select class="inputMaxWidth" name="personType" id="personType">
								<option value="">Seleccione: </option>
								<?php
								foreach ($persontypeCatalog  as $key => $value) {
									?>
									<option value="<?php echo $value["code"]; ?>"><?php echo $value["personTypeName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="specialCondition">Condición especial</label>
							<select class="inputMaxWidth" name="specialCondition" id="specialCondition">
								<option value="">Seleccione: </option>
								<?php
								foreach ($special_conditionsCatalog  as $key => $value) {
									?>
									<option value="<?php echo $value["code"]; ?>"><?php echo $value["conditionName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>

					</div>
					<div class="row my-3 justify-content-start align-items-center w-100">

						<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="customerName">Nombre o razón social del consumidor financiero</label>
							<input type="text" name="customerName" id="customerName">
						</div>

						<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="docType">Tipo Documento</label>
							<select class="inputMaxWidth" name="docType" id="docType">
								<option value="">Seleccione: </option>
								<?php
								foreach ($identificationsCatalog  as $key => $value) {
									?>
									<option value="<?php echo $value["code"]; ?>"><?php echo $value["idName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>

						<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="docNumber">Número Documento</label>
							<input class="inputMaxWidth" type="text" name="docNumber" id="docNumber">
						</div>

					</div>
					<div class="row my-3 justify-content-start align-items-center w-100">

						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="address">Dirección</label>
							<input class="inputMaxWidth" type="text" name="address" id="address"/>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="email">Correo Electrónico</label>
							<input class="inputMaxWidth" type="email" name="email" id="email"/>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="phoneNumber">Teléfono</label>
							<input class="inputMaxWidth" type="text" name="phoneNumber" id="phoneNumber"/>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="sex">Sexo</label>
							<select class="inputMaxWidth" class="inputMaxWidth" type="text" name="sex" id="sex">
								<option value="">Seleccione: </option>
								<?php
								foreach ($sexCatalog   as $key => $value) {
									?>
									<option value="<?php echo $value["code"]; ?>"><?php echo $value["sexName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="d-flex w-20 justify-content-center align-items-center" style="gap: 10px;">
							<label class="label-min" for="lgbt">LGBTIQ+</label>
							<select class="inputMaxWidth" class="inputMaxWidth" type="text" name="lgbt" id="lgbt">
								<option value="">Seleccione: </option>
								<?php
								foreach ($lgbtCatalog   as $key => $value) {
									?>
									<option value="<?php echo $value["code"]; ?>"><?php echo $value["lgbtName"]; ?></option>
									<?php
								}
								?>
							</select>
						</div>

					</div>
				</div>
				<div class="col-12 my-3 p-3 border border-secondary rounded-2">
					<div class="row justify-content-start align-items-center w-100">
						<div class="col-6">
							<div class="row w-100 my-2 mx-0 p-0">
								<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="canal">Canal</label>
									<select class="inputMaxWidth" class="inputMaxWidth" type="text" name="canal" id="canal">
										<option value="">Seleccione: </option>
										<?php
										foreach ($canalsCatalog    as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["canalName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="motivo">Motivo</label>
									<select class="inputMaxWidth" class="inputMaxWidth" type="text" name="motivo" id="motivo">
										<option value="">Seleccione: </option>
										<?php
										foreach ($motivosCatalog   as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["reasonName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>	
							</div>
							<div class="row w-100 my-3 mx-0 p-0">
								<div class="d-flex my-3 flex-column justify-content-start align-items-start" style="gap: 10px;">
									<label class="label-min" for="productDetail">Detalle del producto</label>
									<textarea rows="4" cols="40" type="text" name="argComplaint" id="argComplaint"></textarea>
								</div>
								<div class="d-flex mt-2 w-100 p-0 justify-content-start align-items-center" style="gap: 5px;">
									<label class="label-min" for="marcacion">Marcación</label>
									<select name="marcacion" id="marcacion" style="max-width: 370px;width: 100%;">
										<option value="">Seleccione: </option>
										<?php
										foreach ($marcacionCatalog     as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><p><?php echo $value["marcacionName"]; ?></p></option>
											<?php
										}
										?>
									</select>
								</div>

							</div>
						</div>
						<div class="col-6">

							<div class="row w-100 my-3 mx-0 p-0">
								<div class="d-flex w-50 justify-content-start align-items-start" style="gap: 10px;">
									<label class="label-min" for="product">Producto</label>
									<select class="inputMaxWidth" type="text" name="product" id="product">
										<option value="">Seleccione: </option>
										<?php
										foreach ($productsCatalog  as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["productName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="d-flex w-50 justify-content-start align-items-start" style="gap: 10px;">
									<label class="label-min" for="digitalProduct">Producto Digital</label>
									<select class="inputMaxWidth" type="text" name="digitalProduct" id="digitalProduct">
										<option value="">Seleccione: </option>
										<?php
										foreach ($digital_productCatalog  as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["stateName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>

							</div>
							<div class="row w-100 my-3 mx-0 p-0">
								<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="pointReception">Punto Recepción</label>
									<select class="inputMaxWidth" type="text" name="pointReception" id="pointReception">
										<option value="">Seleccione: </option>
										<?php
										foreach ($points_receptionCatalog    as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["pointName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="instanceReception">Instancia Recepción</label>
									<select class="inputMaxWidth" type="text" name="instanceReception" id="instanceReception">
										<option value="">Seleccione: </option>
										<?php
										foreach ($instance_receptionCatalog   as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["instanceName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>	
							</div>

							<div class="row w-100 my-3 mx-0 p-0">
								<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="admision">Admisión</label>
									<select class="inputMaxWidth" type="text" name="admision" id="admision">
										<option value="">Seleccione: </option>
										<?php
										foreach ($admisionCatalog    as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["admisionName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>
								<div class="d-flex w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="favorability">Favorabilidad</label>
									<select class="inputMaxWidth" type="text" name="favorability" id="favorability">
										<option value="">Seleccione: </option>
										<?php
										foreach ($favorabilityCatalog   as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["favorabilityName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>	
							</div>
							<div class="row my-3 justify-content-start align-items-center w-100 p-0 mx-0" style="gap: 0 5px;">
								
								<div class="d-flex mt-2 w-45 p-0 justify-content-center align-items-center" style="gap: 5px;">
									<label class="label-min" for="aceptacion">Aceptación</label>
									<select class="inputMaxWidth" name="aceptacion" id="aceptacion">
										<option value="">Seleccione: </option>
										<?php
										foreach ($aceptacionCatalog     as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["aceptacionName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>

								<div class="d-flex mt-2 w-45 p-0 justify-content-center align-items-center" style="gap: 5px;">
									<label class="label-min" for="rectification">Rectificación</label>
									<select class="inputMaxWidth" name="rectification" id="rectification">
										<option value="">Seleccione: </option>
										<?php
										foreach ($rectificationCatalog     as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["rectificationName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>

							</div>

						</div>
										
					</div>
					<div class="row justify-content-start align-items-center w-100">

						<div class="col-6">
							<div class="d-flex flex-column w-100 justify-content-start align-items-start" style="gap: 10px;">
								<label class="label-min" for="textComplaint">Texto de la queja</label>
								<textarea rows="4" cols="55" type="text" name="textComplaint" id="textComplaint"></textarea>
							</div>
							<div class="d-flex mt-2 w-100 justify-content-center align-items-center" style="gap: 10px;">
								<label class="label-min" for="anexos">Anexos</label>
								<select class="inputMaxWidth" class="inputMaxWidth" name="anexos" id="anexos">
									<option value="">Seleccione: </option>
								</select>
								<button class="btn btn-outline-primary ms-3" style=" max-width: 150px; width: 100%;"> Cargar</button>
							</div>
						</div>

						<div class="col-6 p-0">
							<div class="row my-2 justify-content-start align-items-center w-100 p-0 mx-0" style="gap: 0 5px;">
								
								<div class="d-flex mt-2 w-30 p-0 justify-content-center align-items-center" style="gap: 5px;">
									<label class="label-min" for="tutela">Tutela</label>
									<select class="inputMaxWidth" class="inputMaxWidth" name="tutela" id="tutela">
										<option value="">Seleccione: </option>
										<?php
										foreach ($tutelaCatalog    as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["tutelaName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>

								<div class="d-flex mt-2 w-30 p-0 justify-content-center align-items-center" style="gap: 5px;">
									<label class="label-min" for="escalamiento">Escalamiento</label>
									<select class="inputMaxWidth" class="inputMaxWidth" name="escalamiento" id="escalamiento">
										<option value="">Seleccione: </option>
									</select>
								</div>

								<div class="d-flex mt-2 w-30 p-0 justify-content-center align-items-center" style="gap: 5px;">
									<label class="label-min" for="replica">Réplica</label>
									<select class="inputMaxWidth" class="inputMaxWidth" name="replica" id="replica">
										<option value="">Seleccione: </option>
									</select>
								</div>

							</div>
							<div class="d-flex flex-column my-2 w-100 justify-content-start align-items-start" style="gap: 10px;">
								<label class="label-min" for="argComplaint">Argumento réplica</label>
								<textarea rows="4" cols="60" type="text" name="argComplaint" id="argComplaint"></textarea>
							</div>
							<div class="row my-2 justify-content-start align-items-center w-100">
								<div class="d-flex mt-2 w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="desistimiento">Desistimiento</label>
									<select class="inputMaxWidth" class="inputMaxWidth" name="desistimiento" id="desistimiento">
										<option value="">Seleccione: </option>
										<?php
										foreach ($desestimientoCatalog     as $key => $value) {
											?>
											<option value="<?php echo $value["code"]; ?>"><?php echo $value["desestimientoName"]; ?></option>
											<?php
										}
										?>
									</select>
								</div>

								<div class="d-flex mt-2 w-50 justify-content-center align-items-center" style="gap: 10px;">
									<label class="label-min" for="expressComplaint">Queja exprés</label>
									<select class="inputMaxWidth" class="inputMaxWidth" name="expressComplaint" id="expressComplaint">
										<option value="">Seleccione: </option>
									</select>
								</div>
							</div>


						</div>

					</div>
				</div>
				
			</div>
			<div class="row justify-content-between w-100 p-0 m-2">

				<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 0 10px;">
					<label class="label-min" for="status">Estado</label>
					<select class="inputMaxWidth" class="inputMaxWidth" name="status" id="status">
						<option value="">Seleccione: </option>
						<?php
						foreach ($pqrs_statesCatalog      as $key => $value) {
							?>
							<option value="<?php echo $value["code"]; ?>"><?php echo $value["stateName"]; ?></option>
							<?php
						}
						?>
					</select>
				</div>
				<div class="d-flex w-25 justify-content-center align-items-center" style="gap: 0 10px;">
					<button type="reset" class="btn btn-danger">Cancelar</button>
					<button type="button"  class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#ModalGuardar">Guardar</button>
				</div>

			</div>
		</div>
	</div>
</form>

</div>



<!-- Modal -->
<div class="modal fade" id="ModalGuardar" tabindex="-1" aria-labelledby="ModalExplaGuardar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalExplaGuardar">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
//FUNCIONALIDAD PARA SELECT DE DEPARTAMENTOS:
window.addEventListener("DOMContentLoaded", () => {
	//HEADERS GLOBALES PARA PETICIONES
	const myHeaders = new Headers();
    if (document.domain === "fncsap.ingeniosoft.co") {
        myHeaders.append("Authorization", "Basic dXNlclNBUDpIcllsIFpXWFggakc0VCBPYzNoIG95WDcgRE5RYgo=");                
    }else{
        //AQUI VA EL HEADER DE AUTHORIZATION PARA INSTALAR EN PRODUCTIVO
    }

	const getSelectOptions = (firstSelect, secondSelect, fetchUrl) => {
		//REFS HTML
		const firstSelectElement = document.querySelector(`#${firstSelect}`);
		const secondSelectElement = document.querySelector(`#${secondSelect}`);
		//EVENT LISTENER
		firstSelectElement.addEventListener("change", (e) => {
			let value = e.target.value;
			const requestOptions = {
				method: 'GET',
				headers: myHeaders,
			};
			let optionsHTML = "<option value=''>Seleccione: </option>";
			secondSelectElement.innerHTML = "";
			fetch(`https://${document.domain}/wp-json/sfcintegration/v1/${fetchUrl}/${value}`, requestOptions)
			.then(resp => resp.json())
			.then(({result}) => {
				result.forEach(({code, name}) => {
					optionsHTML += `
					<option value="${code}">${name}</option>
					`;
				})
				secondSelectElement.innerHTML = optionsHTML;
				;
			})
			.catch(err => {
				console.log(err);
				secondSelectElement.innerHTML = "<option value=''>Seleccione: </option>";
			})
		})

	} 

	getSelectOptions("department", "municipality", "localities");
	getSelectOptions("proceso", "centro", "centers");

})



</script>