
<style>
.semaforo{
  height:50px;
   width:50px;
   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:50px;
   margin:auto;
}
th{
text-align: center !important;
}
tr{
text-align: center !important;

}
td{
	vertical-align: middle !important;
}	

</style>
<div class="wrap" >
<div class="d-flex justify-content-between mb-3 mt-3">
<div>
	<button type="button" class="btn btn-outline-dark">Agregar PQR</button>
</div>

    <form method="POST" class="form_search">
      <input type="text" name="busquedad" id="busquedad" placeholder="Buscar" style="line-height: 1.5;">

      <button type="submit" name="buscar" class="button btn_search"><span
          class="dashicons dashicons2 "></span>Buscar</button>
      <button type="submit" name="buscar" class="button btn_search reset"><span
          class="dashicons dashicons2 "></span>Resetear</button>
    </form>
	
	
    </div>
     
  
 
	</div>

       <table class="wp-list-table widefat fixed striped pages"  >
                <thead>
				     <th style="width:20%;"># pedido</th>
                  
					<th>ID PQR</th>
					<th>Origen</th>
                    <th>Codigo ISOLUCION</th>
					<th>Remitente</th>
					<th>Asunto</th>
					<th>Fecha creación</th>
					<th>Vencimiento</th>
					<th>Instancia</th>
					<th>Estado</th>	
                </thead>
                <tbody id="the-list">
					<tr>
						<td>Cod_1_XXX</td>
						<td>SFC</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					    <td><div class='semaforo' data-colorValue='$status' style='background-color: red;' ></div></td>
                    </tr>
					<tr>
						<td>Cod_1_XXX</td>
						<td>ALM</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					    <td><div class='semaforo' data-colorValue='$status' style='background-color: green;' ></div></td>
                    </tr>
                </tbody>	
        </table>

			
</div>
