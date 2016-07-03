
<!-- Fin Contenido de la pagina -->
<div id="contenido" class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 ">
			<form action="" method="POST">
				<div class="tab-content">
					<!-- formulario Caratula Unica -->
					<div class="tab-pane" id="caratula-unica">
						<div class="row text-center">
							<div class="col-xs-12  ">
								<h2>Caratula Unica</h2>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-4 col-sm-offset-4">
								<label>1. Numero de Orden</label> <input type="text"
									class="form-control" placeholder="Numero de orden"
									name="IDNOREM" id="IDNOREM" required>
							</div>
						</div>

						<div class="row">
							<h3 class="col-xs-12 col-ms-12  text-info">Identificacion</h3>

							<div class="form-group col-xs-12 col-sm-4 col-sm-offset-2">
								<label for="">2. Tipo de identificación</label> <select
									class="form-control" id="TIPDOC" name="TIPDOC" required>
									<option value="2">NIT</option>
									<option value="3" selected>Cedula de ciudadania</option>
									<option value="4">Cedula de extranjeria</option>
								</select>
							</div>

							<div class="form-group col-xs-12 col-sm-4">
								<label>Numero de identificación</label> <input type="number"
									class="form-control" name="NUMDOC" id="NUMDOC" required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-3 ">
								<label>3. Digito de Veriicación</label> <input type="number"
									class="form-control" placeholder="" name="DV" id="DV" required>
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label for="">Tipo de registro en la cámara</label> <select
									class="form-control" id="TIPCAM" name="TIPCAM" required>
									<option value="3" selected>Inscripción matricula</option>
									<option value="4">Renovación</option>
								</select>
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Camara</label> <input type="text" class="form-control"
									placeholder="" name="CAMARA" id="CAMARA" required>
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label># Incripción/MatrÃ­cula</label> <input type="text"
									class="form-control" placeholder="" name="REGCAM" id="REGCAM"
									required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>4. Codigo de actividad</label> <input type="text"
									class="form-control" placeholder="" name="CIIU" id="CIIU"
									required>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label class="">5. Novedad</label> <input type="text"
									class="form-control" placeholder="" name="NOVEDAD" id="NOVEDAD"
									required>
							</div>
						</div>

						<div class="row">
							<h4 class=" col-xs-12 text-info">UBICACIÓN Y DATOS GENERALES</h4>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>6. Nombre o Razón social</label> <input type="text"
									id="RAZSOC" class="form-control" name="RAZSOC" value=""
									size="50" maxlength="60" />
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-9 ">
								<label>7. Nombre Comercial</label> <input type="text"
									id="NOMCOM" class="form-control" name="NOMCOM" value=""
									size="50" maxlength="60" />
							</div>
							<div class="form-group col-xs-12 col-sm-3  ">
								<label>8. Sigla</label> <input type="text" id="SIGLA"
									class="form-control" name="SIGLA" value="" maxlength="20" />
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>9. Domicilio principal o dirección de la gerencia</label>
								<input type="text" id="DIRECCION" class="form-control"
									name="DIRECCION" value="" size="50" maxlength="40" />
							</div>
						</div>


						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>10. Departamento</label> <select id="DEPTO"
									class="form-control" name="DEPTO">
									<option value="">-Seleccione-</option>

									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>

								</select>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>11. Municipio</label> <select id="MCIPIO"
									class="form-control" name="MCIPIO">
									<option value="">-Seleccione-</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>12. Teléfono</label> <input type="text" id="TEL"
									class="form-control" name="TEL" maxlength="7">
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>13. Ext</label> <input type="text" id="EXT"
									class="form-control" name="EXT" maxlength="13">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>14. Correo Electrónico</label> <input type="text"
									id="EMAIL" class="form-control" name="EMAIL" size="50"
									maxlength="256">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>15. Página web</label> <input type="text" id="WEB"
									class="form-control" name="WEB">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>16. Dirección notificación</label> <input type="text"
									id="DIRECCION_NOT" class="form-control" name="DIRECCION_NOT"
									value="" size="50" maxlength="40" />
							</div>
						</div>


						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>17. Departamento notificación</label> <select
									id="DEPTO_NOT" class="form-control" name="DEPTO_NOT">
									<option value="">-Seleccione-</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>18. Municipio notificación</label> <select
									id="MCIPIO_NOT" class="form-control" name="MCIPIO_NOT">
									<option value="">-Seleccione-</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>19. Teléfono notificación</label> <input type="text"
									id="TEL_NOT" class="form-control" name="TEL_NOT" maxlength="7">
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>20. Ext notificación</label> <input type="text"
									id="EXT_NOT" class="form-control" name="EXT_NOT" maxlength="13">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>21. Correo Electrónico notificación</label> <input
									type="text" id="EMAIL_NOT" class="form-control"
									name="EMAIL_NOT" size="50" maxlength="256">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>22. Página web notificación</label> <input type="text"
									id="WEB_NOT" class="form-control" name="WEB_NOT">
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12  ">
								<h4 class="text-info">Tipo de Organización y Fecha de
									Constitución</h4>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-4 ">
								<label>23. Tipo de organizaión</label> <select id="ORGJUR"
									class="form-control" name="ORGJUR">
									<option value="">-Seleccione-</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="form-group col-xs-12 col-sm-4 ">
								<label for="">Cual?</label> <input type="text" id="ORJUDF"
									class="form-control" name="ORJUDF" placeholder="Cual?">
							</div>
							<div class="text-center col-xs-12 col-sm-4 ">
								<label for="">24. Fecha de constitución</label>
							</div>
							<div class="form-group col-xs-12 col-sm-2 col-sm-offset-0 ">
								<input type="time" id="FECHADES" class="form-control"
									name="FECHADES" placeholder="Desde">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">

								<input type="time" id="FECHAHASTA" class="form-control"
									name="FECHAHASTA" placeholder="Hasta">
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12  ">
								<h4 class="text-info">Composición del Capital Social y Estado
									Actual</h4>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Nacional publico</label> <input type="time" id="CONP"
									class="form-control" name="CONP">
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Nacional privado</label> <input type="time" id="CONPR"
									class="form-control" name="CONPR">
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Extranjero publico</label> <input type="time" id="COCEX"
									class="form-control" name="COCEX">
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Extranjero privado</label> <input type="time" id="COCEP"
									class="form-control" name="COCEP">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label for="">26. Estado actual</label> <select id="ESTAC"
									class="form-control" name="ESTAC">
									<option value="">-Seleccione-</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>

							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-3 ">
								<label for="">27. Total de establecimientos</label> <input
									type="time" id="NUMESTAB" class="form-control" name="NUMESTAB">
							</div>
						</div>

						<div class="row">

							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Agropecuarios</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Mineros</label> <input type="time" id="IDWEB"
									class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Manufactureros</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Servicios PÃºblicos</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Const. y Obras civiles</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Comerciales</label> <input type="time" id="IDWEB"
									class="form-control" name="IDWEB">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Rest y Hoteles</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Trans / Almacenaje</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Comunicación y Correo</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Financ y Otros Serv.</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Servicios Comunales</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Unidades Auxiliares</label> <input type="time"
									id="IDWEB" class="form-control" name="IDWEB">
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-3 ">
								<h4 class="text-info">Actividades Económicas</h4>
							</div>
							<!--div class="col-xs-12 col-sm-3">
								<a id="agregarCampo" class="btn btn-info" href="#">Agregar Campo</a>
							</div-->
							<div class="col-xs-12 col-sm-3">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Modal title</h4>
									</div>
									<div id="listActivi" class="modal-body">
										<div class="form-group ">
											<div class="input-group ">
												<span class="input-group-btn">
													<button class="btn btn-default botonera addAct" type="button">
														<span class="icono glyphicon glyphicon-plus" aria-hidden="true"></span>
													</button>
												</span> <input type="text" class="form-control" id="2233" name="" value="2233 - XXXXXXXX" disabled>
											</div>
										</div>
										
										<div class="form-group ">
											<div class="input-group ">
												<span class="input-group-btn">
													<button class="btn btn-default addAct" type="button">
														<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
													</button>
												</span> <input type="text" class="form-control" id="3344" name="" value="3344 - XXXXXXXX" disabled>
											</div>
										</div>
										
										<div class="form-group ">
											<div class="input-group ">
												<span class="input-group-btn">
													<button class="btn btn-default addAct" type="button">
														<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
													</button>
												</span> <input type="text" class="form-control" id="4455" name="" value="4455 - XXXXXXXX" disabled>
											</div>
										</div>
										
										<div class="form-group ">
											<div class="input-group ">
												<span class="input-group-btn">
													<button class="btn btn-default addAct" type="button">
														<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
													</button>
												</span> <input type="text" class="form-control" id="5566" name="" value="5566 - XXXXXXXX" disabled>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default"
											data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="row">
							<div id="contenedor" class="col-xs-12 col-sm-12 "></div>
						</div>

						<div class="row">
							<div class="col-xs-12  ">
								<h4 class="text-info">Datos de diligenciamiento</h4>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<label for="">29. Fecha de diligenciamiento</label>
							</div>
							<div class="col-xs-12 text-center">
								<div class="form-group col-xs-2 col-xs-offset-3">
									<label for="">DÍA</label> <input type="date" id="DIA"
										class="form-control" name="DIA">
								</div>
								<div class="form-group col-xs-2">
									<label for="">MES</label> <input type="date" id="MES"
										class="form-control" name="MES">
								</div>
								<div class="form-group col-xs-2">
									<label for="">AÑO</label> <input type="date" id="ANO"
										class="form-control" name="IDWEB">
								</div>
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">30. Representante legal</label> <input type="date"
									id="NOMREP" class="form-control" name="NOMREP">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">31. Persona quien diligencia</label> <input
									type="date" id="CONTACTO" class="form-control" name="CONTACTO">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">32. Cargo persona quien diligencia</label> <input
									type="date" id="CARGOCONT" class="form-control"
									name="CARGOCONT">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">33. Email persona quien diligencia</label> <input
									type="date" id="EMAILCONT" class="form-control"
									name="EMAILCONT">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">34. Telefono</label> <input type="date"
									id="TELCONT" class="form-control" name="TELCONT">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">35. Ext.</label> <input type="date" id="EXTCONT"
									class="form-control" name="EXTCONT">
							</div>
						</div>
					</div>
					<!-- Fin formulario Caratula Unica -->

					<!-- Fin formulario Caracterizacion de vacantes -->
					<div class="tab-pane active" id="modulo-1">
						<div class="row text-center">
							<h2>Modlo 1</h2>
							<h3>Caracterizacion de vacantes</h3>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<label for="">Este módulo  determina la cantidad de vacantes durante el "I trimestre del año 2016" e  identifica sus características.</label>
							</div>
						</div>
						<div class="row">
							<!--div class="form-group col-xs-12 col-sm-2">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Lanzar modal</button>
							</div-->
							<div class="form-group col-xs-12 col-sm-6">
							    <div class="input-group">
							    	<span class="input-group-btn">
								    	<button id="addDisp" type="button" class="btn btn-default" aria-label="Left Align">
											<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
										</button>
      								</span>
      								<input type="text" id="tituloDisp" class="form-control" placeholder="Search for...">
    							</div>
							</div>
							<div class="col-xs-12 col-sm-1">
								<button id="removeDisp" type="button" class="btn btn-danger" aria-label="Left Align">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button>
							</div>
							
						</div>
						<div class="row">
							<div class="col-xs-12">
								<ul class="nav nav-tabs" id="listDisTab">
									<!--li class="active"><a href="#dis1" data-toggle="tab"> Disp 1</a></li-->
								</ul>
								<p>
									<div id="listDisForm" class="tab-content"> </div>
								</p>
							</div>
							<div id="disTotales" class="col-xs-12">
								<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
									<label class="">Total Vacantes</label>
									<div class='small'>
										<input type='text' class='form-control input-sm text-right' id='idi1r2ctv' name='i1r2ctv' value = "<?php //echo $row['i1r2ctv']?>"  />
									</div>
								</div>
								<div class="form-group form-group-sm col-xs-12 col-sm-3">
									<label class="">Total Vacantes Cubiertas</label>
									<div class='small'>
										<input type='text' class='form-control input-sm text-right' id='idi1r2ctvc' name='i1r2ctvc' value = "<?php //echo $row['i1r2ctvc']?>" />
									</div>
								</div>
								<div class="col-xs-12 col-sm-1">
									<button id="calcTotalDisp" type="button" class="btn btn-success" >
										<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
									</button>
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- Fin formulario Caracterizacion de vacantes -->
					<div class="tap-panel" id="boton">
						<div class="row">
							<div class="form-group col-xs-12 text-right ">
								<input type="submit" class="btn btn-primary" value="Guardar"
									name="direccion" id="direccion">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Contenedor de la caracterizacion -->
<div id="caracterizacion" class="hidden">
	<div class="container-fluid">		
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Cantidad de vacantes abiertas</label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['d1r2c1']?>" maxlength="9" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">&Aacute;rea funcional</label>
			<div class='small'>
				<select class='form-control input-sm' id="idi1r2c" name="i1r2c">
					<option value="0"> Seleccione una opción</option>
					<option value="1" <?php //echo ($row['i1r2c'] == 1) ? 'checked' : '';  ?> >Área de dirección general</option>
					<option value="2" <?php //echo ($row['i1r2c'] == 2) ? 'checked' : '';  ?> >Área de administración</option>
					<option value="3" <?php //echo ($row['i1r2c'] == 3) ? 'checked' : '';  ?> >Área de mercadeo/ventas</option>
					<option value="4" <?php //echo ($row['i1r2c'] == 4) ? 'checked' : '';  ?> >Área de producción</option>
					<option value="5" <?php //echo ($row['i1r2c'] == 5) ? 'checked' : '';  ?> >Área de contabilidad y finanzas</option>
					<option value="6" <?php //echo ($row['i1r2c'] == 6) ? 'checked' : '';  ?> >Personal de Investigación y desarrollo</option>
					<option value="7" <?php //echo ($row['i1r2c'] == 7) ? 'checked' : '';  ?> >Personal de apoyo</option>
				</select>								
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Mínimo nivel educativo requerido</label>
			<div class='small'>
				<select class='form-control input-sm' id="idi1r2c" name="i1r2c">
					<option value="0" > Seleccione una opción</option>
					<option value="1" <?php //echo ($row['i1r2c'] == 1) ? 'checked' : '';  ?> >No bachiller</option>
					<option value="2" <?php //echo ($row['i1r2c'] == 2) ? 'checked' : '';  ?> >Educación básica secundaria (6° - 9°)</option>
					<option value="3" <?php //echo ($row['i1r2c'] == 3) ? 'checked' : '';  ?> >Educación media   (10° - 13°)</option>
					<option value="4" <?php //echo ($row['i1r2c'] == 4) ? 'checked' : '';  ?> >Técnico laboral</option>
					<option value="5" <?php //echo ($row['i1r2c'] == 5) ? 'checked' : '';  ?> >Técnico profesional</option>
					<option value="6" <?php //echo ($row['i1r2c'] == 6) ? 'checked' : '';  ?> >Tecnológo</option>
					<option value="7" <?php //echo ($row['i1r2c'] == 7) ? 'checked' : '';  ?> >Estudiante universitario</option>
					<option value="8" <?php //echo ($row['i1r2c'] == 8) ? 'checked' : '';  ?> >Profesional universitario</option>
					<option value="9" <?php //echo ($row['i1r2c'] == 9) ? 'checked' : '';  ?> >Especialización </option>
					<option value="10" <?php //echo ($row['i1r2c'] == 10) ? 'checked' : '';  ?> >Maestría</option>
					<option value="11" <?php //echo ($row['i1r2c'] == 11) ? 'checked' : '';  ?> >Doctorado</option>
					<option value="12" <?php //echo ($row['i1r2c'] == 12) ? 'checked' : '';  ?> >No requiere estudios</option>
				</select>
			</div>
		</div>
		
	</div>
	
	<div class="container-fluid">
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Área de Formación</label>
			<div class='small'>
				<select class='form-control input-sm' id="idi1r2c" name="i1r2c">
					<option value="0" > Seleccione una opción</option>
					<option value="1" <?php //echo ($row['i1r2c'] == 1) ? 'checked' : '';  ?> >Economía, Administración y Contaduría</option>
					<option value="2" <?php //echo ($row['i1r2c'] == 2) ? 'checked' : '';  ?> >Ingeniería, Arquitectura Urbanismo y afines</option>
					<option value="3" <?php //echo ($row['i1r2c'] == 3) ? 'checked' : '';  ?> >Ciencias Sociales y humanas</option>
					<option value="4" <?php //echo ($row['i1r2c'] == 4) ? 'checked' : '';  ?> >Ciencias de la educación</option>
					<option value="5" <?php //echo ($row['i1r2c'] == 5) ? 'checked' : '';  ?> >Ciencias de la salud</option>
					<option value="6" <?php //echo ($row['i1r2c'] == 6) ? 'checked' : '';  ?> >Bellas artes</option>
					<option value="7" <?php //echo ($row['i1r2c'] == 7) ? 'checked' : '';  ?> >Agronomía, Veterinaria</option>
					<option value="8" <?php //echo ($row['i1r2c'] == 8) ? 'checked' : '';  ?> >Matemáticas y ciencias naturales</option>
					<option value="9" <?php //echo ($row['i1r2c'] == 9) ? 'checked' : '';  ?> >No aplica</option>
				</select>
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Experiencia en meses</label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Modalidad de Contratación</label>
			<div class='small'>
				<select class='form-control input-sm' id="idi1r2c" name="i1r2c">
					<option value="0" > Seleccione una opción</option>
					<option value="1" <?php //echo ($row['i1r2c'] == 1) ? 'checked' : '';  ?> >Término Indefinido</option>
					<option value="2" <?php //echo ($row['i1r2c'] == 2) ? 'checked' : '';  ?> >Término  Fijo</option>
					<option value="3" <?php //echo ($row['i1r2c'] == 3) ? 'checked' : '';  ?> >Prestación de servicios</option>
					<option value="4" <?php //echo ($row['i1r2c'] == 4) ? 'checked' : '';  ?> >Por  obra  o  labor  contratada</option>
					<option value="5" <?php //echo ($row['i1r2c'] == 5) ? 'checked' : '';  ?> >Ocasional ó Transitorio</option>
				</select>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Salario u honorarios mensuales</label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">Edad</label>
			<div class='small'>
				<select class='form-control input-sm' id="idi1r2c" name="i1r2c">
					<option value="0" > Seleccione una opción</option>
					<option value="1" <?php //echo ($row['i1r2c'] == 1) ? 'checked' : '';  ?> >15 - 20</option>
					<option value="2" <?php //echo ($row['i1r2c'] == 2) ? 'checked' : '';  ?> >20 - 25</option>
					<option value="3" <?php //echo ($row['i1r2c'] == 3) ? 'checked' : '';  ?> >25 - 30</option>
					<option value="4" <?php //echo ($row['i1r2c'] == 4) ? 'checked' : '';  ?> >30 - 35</option>
					<option value="5" <?php //echo ($row['i1r2c'] == 5) ? 'checked' : '';  ?> >35 - 40</option>
					<option value="6" <?php //echo ($row['i1r2c'] == 6) ? 'checked' : '';  ?> >40 - 45</option>
					<option value="7" <?php //echo ($row['i1r2c'] == 7) ? 'checked' : '';  ?> >45 - 50</option>
					<option value="8" <?php //echo ($row['i1r2c'] == 8) ? 'checked' : '';  ?> >50 - 55</option>
					<option value="9" <?php //echo ($row['i1r2c'] == 9) ? 'checked' : '';  ?> >55 - 60</option>
					<option value="10" <?php //echo ($row['i1r2c'] == 10) ? 'checked' : '';  ?> >60 - 65</option>
					<option value="11" <?php //echo ($row['i1r2c'] == 11) ? 'checked' : '';  ?> >65 - 70</option>
					<option value="12" <?php //echo ($row['i1r2c'] == 12) ? 'checked' : '';  ?> >70 - 75</option>
					<option value="13" <?php //echo ($row['i1r2c'] == 13) ? 'checked' : '';  ?> >75 - 80</option>
					<option value="14" <?php //echo ($row['i1r2c'] == 14) ? 'checked' : '';  ?> >80 - 85</option>
					<option value="15" <?php //echo ($row['i1r2c'] == 15) ? 'checked' : '';  ?> >85 - 90</option>
					<option value="16" <?php //echo ($row['i1r2c'] == 16) ? 'checked' : '';  ?> >Indiferente</option>
				</select>
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">De las vacantes ¿Cuántas logró cubrir?</label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">De las vacantes cubiertas ¿cuantas se ocuparon con hombres?</label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">De las vacantes cubiertas ¿Cuántas se ocuparon con mujeres?</label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label class="">De las vacantes ¿Cuántas NO logró cubrir? </label>
			<div class='small'>
				<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
			</div>
		</div>
		
	</div>
	
	<div class="container-fluid">
		<div class="form-group form-group-sm col-xs-12 col-sm-3 ">
			<label>De las vacantes NO cubiertas ¿Cuáles fueron las causas?</label>
			<div class="small">
				<select class='form-control input-sm' id="idi1r2c" name="i1r2c">
					<option value="0" > Seleccione una opción</option>
					<option value="1" <?php //echo ($row['i1r2c'] == 1) ? 'checked' : '';  ?> >La remuneración ofrecida era insuficiente</option>
					<option value="2" <?php //echo ($row['i1r2c'] == 2) ? 'checked' : '';  ?> >Postulantes sub-calificados</option>
					<option value="3" <?php //echo ($row['i1r2c'] == 3) ? 'checked' : '';  ?> >Postulantes sobre-calificados</option>
					<option value="4" <?php //echo ($row['i1r2c'] == 4) ? 'checked' : '';  ?> >Falta de experiencia o conocimiento específico</option>
					<option value="5" <?php //echo ($row['i1r2c'] == 5) ? 'checked' : '';  ?> >Los postulantes no dominaban otros idiomas</option>
					<option value="6" <?php //echo ($row['i1r2c'] == 6) ? 'checked' : '';  ?> >Pocos postulantes</option>
					<option value="7" <?php //echo ($row['i1r2c'] == 7) ? 'checked' : '';  ?> >Otra</option>
				</select>
			</div>
		</div>
		<div class="col-xs-12 col-sm-1"></div>
		<div class="form-group form-group-sm col-xs-12 col-sm-7">
			<label class="">Cual?</label>
			<input type='text' class='form-control input-sm text-right' id='idi1r2c' name='i1r2c' value = "<?php //echo $row['i1r2c']?>" maxlength="9" />
		</div>
	</div>
</div>
<!-- Contenedor de la caracterizacion -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div id="listActividad" class="modal-body">
				<!-- Listado de actividades consultadas -->
				<?php foreach ( $qlisActi as $lsAct ) { ?>
				<div class="form-group">
					<div class="input-group ">
						<span class="input-group-btn">
							<button class="btn btn-default addAct" type="button">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</span> <input type="text" class="form-control"
							id="<?php echo $lsAct['CODIGO']; ?>" name="<?php echo $lsAct['CODIGO']; ?>"
							value="<?php echo $lsAct['CODIGO'] . ' - ' . $lsAct['DESCRIP']; ?>"
							readonly>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>
<!-- Modal -->

<!-- Fin Contenido de la pagina -->


