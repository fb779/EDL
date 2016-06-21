<!-- Fin Contenido de la pagina -->
<div id="contenido" class="container" >
	<div class="row">
		<div class="col-xs-12 col-sm-12 ">
			<form action="" method="POST">
				<div class="tab-content">
					<!-- formulario Caratula Unica -->
					<div class="tab-pane active" id="caratula-unica">
						<div class="row text-center">
							<div class="col-xs-12  ">
								<h2>Caratula Unica</h2>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12 col-sm-4 col-sm-offset-4">
								<label>1. Numero de Orden</label>
								<input type="text" class="form-control" placeholder="Numero de orden" name="IDNOREM" id="IDNOREM" required>
							</div>
						</div>

						<div class="row">
							<h3 class="col-xs-12 col-ms-12  text-info">Identificacion</h3>

							<div class="form-group col-xs-12 col-sm-4 col-sm-offset-2">
								<label for="">2. Tipo de identificación</label>
								<select class="form-control" id="TIPDOC" name="TIPDOC" required>
									<option value="2">NIT</option>
									<option value="3" selected>Cedula de ciudadania</option>
									<option value="4">Cedula de extranjeria</option>
								</select>
							</div>

							<div class="form-group col-xs-12 col-sm-4">
								<label>Numero de identificación</label>
								<input type="number" class="form-control" name="NUMDOC" id="NUMDOC" required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-3 ">
								<label>3. Digito de Veriicación</label>
								<input type="number" class="form-control" placeholder="" name="DV" id="DV" required>
							</div>

							<div class="form-group col-xs-12 col-sm-3 " >
								<label for="">Tipo de registro en la cámara</label>
								<select class="form-control" id="TIPCAM" name="TIPCAM" required>
									<option value="3" selected>Inscripción matricula</option>
									<option value="4">Renovación</option>
								</select>
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Camara</label>
								<input type="text" class="form-control" placeholder="" name="CAMARA" id="CAMARA" required>
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label># Incripción/MatrÃ­cula</label>
								<input type="text" class="form-control" placeholder="" name="REGCAM" id="REGCAM" required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>4. Codigo de actividad</label>
								<input type="text" class="form-control" placeholder="" name="CIIU" id="CIIU" required>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label class="">5. Novedad</label>
								<input type="text" class="form-control" placeholder="" name="NOVEDAD" id="NOVEDAD" required>
							</div>
						</div>

						<div class="row">
							<h4 class=" col-xs-12 text-info">UBICACIÓN Y DATOS GENERALES</h4>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>6. Nombre o  Razón social</label>	
								<input type="text" id="RAZSOC" class="form-control" name="RAZSOC" value="" size="50" maxlength="60" />
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-9 ">
								<label>7. Nombre Comercial</label>
								<input type="text" id="NOMCOM" class="form-control" name="NOMCOM" value="" size="50" maxlength="60" />
							</div>
							<div class="form-group col-xs-12 col-sm-3  ">
								<label>8. Sigla</label>
								<input type="text" id="SIGLA" class="form-control" name="SIGLA" value="" maxlength="20" />
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>9. Domicilio principal o dirección de la gerencia</label>
								<input type="text" id="DIRECCION" class="form-control" name="DIRECCION" value="" size="50" maxlength="40" />
							</div>
						</div>


						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>10. Departamento</label>
								<select id="DEPTO" class="form-control" name="DEPTO">
									<option value=""> -Seleccione- </option>
									
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>	
								
								</select>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>11. Municipio</label>
								<select id="MCIPIO" class="form-control" name="MCIPIO">
									<option value=""> -Seleccione- </option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>12. Teléfono</label>
								<input type="text" id="TEL" class="form-control" name="TEL" maxlength="7">
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>13. Ext</label>
								<input type="text" id="EXT" class="form-control" name="EXT" maxlength="13">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12  ">
								<label >14. Correo Electrónico</label>
								<input type="text" id="EMAIL" class="form-control" name="EMAIL" size="50" maxlength="256">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>15. Página web</label>
								<input type="text" id="WEB" class="form-control" name="WEB"  >
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>16. Dirección notificación</label>
								<input type="text" id="DIRECCION_NOT" class="form-control" name="DIRECCION_NOT" value="" size="50" maxlength="40" />
							</div>
						</div>


						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>17. Departamento notificación</label>
								<select id="DEPTO_NOT" class="form-control" name="DEPTO_NOT">
									<option value=""> -Seleccione- </option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>18. Municipio notificación</label>
								<select id="MCIPIO_NOT" class="form-control" name="MCIPIO_NOT">
									<option value=""> -Seleccione- </option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>19. Teléfono notificación</label>
								<input type="text" id="TEL_NOT" class="form-control" name="TEL_NOT" maxlength="7">
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label>20. Ext notificación</label>
								<input type="text" id="EXT_NOT" class="form-control" name="EXT_NOT" maxlength="13">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12  ">
								<label >21. Correo Electrónico notificación</label>
								<input type="text" id="EMAIL_NOT" class="form-control" name="EMAIL_NOT" size="50" maxlength="256">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label>22. Página web notificación</label>
								<input type="text" id="WEB_NOT" class="form-control" name="WEB_NOT"  >
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12  ">
								<h4 class="text-info">Tipo de Organización y Fecha de Constitución</h4>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-4 ">
								<label>23. Tipo de organizaión</label>
								<select id="ORGJUR" class="form-control" name="ORGJUR">
									<option value=""> -Seleccione- </option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="form-group col-xs-12 col-sm-4 ">
								<label for="">Cual?</label>
								<input type="text" id="ORJUDF" class="form-control" name="ORJUDF" placeholder="Cual?"> 
							</div>
							<div class="text-center col-xs-12 col-sm-4 ">
								<label for="">24. Fecha de constitución</label>
							</div>
							<div class="form-group col-xs-12 col-sm-2 col-sm-offset-0 ">
								<input type="time" id="FECHADES" class="form-control" name="FECHADES" placeholder="Desde">
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								
								<input type="time" id="FECHAHASTA" class="form-control" name="FECHAHASTA" placeholder="Hasta"> 
							</div>
						</div>
						
						<div class="row">
							<div class="col-xs-12  ">
								<h4 class="text-info">Composición del Capital Social y Estado Actual </h4>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Nacional publico</label>
								<input type="time" id="CONP" class="form-control" name="CONP"  >
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Nacional privado</label>
								<input type="time" id="CONPR" class="form-control" name="CONPR"  >
							</div>
							
							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Extranjero publico</label>
								<input type="time" id="COCEX" class="form-control" name="COCEX"  >
							</div>

							<div class="form-group col-xs-12 col-sm-3 ">
								<label>Extranjero privado</label>
								<input type="time" id="COCEP" class="form-control" name="COCEP"  >
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12  ">
								<label for="">26. Estado actual</label>
								<select id="ESTAC" class="form-control" name="ESTAC">
									<option value=""> -Seleccione- </option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-3 ">
								<label for="">27. Total de establecimientos</label>
								<input type="time" id="NUMESTAB" class="form-control" name="NUMESTAB"  >
							</div>
						</div>

						<div class="row">
							
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Agropecuarios</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Mineros</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Manufactureros</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Servicios PÃºblicos</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Const. y Obras civiles</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Comerciales</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Rest y  Hoteles</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Trans / Almacenaje</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Comunicación y Correo</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Financ y Otros Serv.</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Servicios Comunales</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
							<div class="form-group col-xs-12 col-sm-2 ">
								<label for="">Unidades Auxiliares</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB"  >
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-3 ">
								<h4 class="text-info">Actividades Económicas </h4>
							</div>
							<div class="col-xs-12 col-sm-3">
								<a id="agregarCampo" class="btn btn-info" href="#">Agregar Campo</a>
							</div>
						</div>
						<div class="row">
							<div id="contenedor" class="col-xs-12 col-sm-12 ">
								<!--div class="form-group added">
									<input class="form-control" type="text" name="mitexto[]" id="campo_0" placeholder="Texto 1"/><a href="#" class="eliminar">X</a>
								</div-->

								<!--div id="campo_0" class="form-group added">
								<div class="input-group">
									<span class="input-group-btn">
										<button class="btn btn-default eliminar" type="button">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
										</button>
									</span>
									<input type="text" class="form-control" placeholder="Search for...">
								</div>
								</div-->

							</div>
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
									<label for="">DÍA</label>
									<input type="date" id="DIA" class="form-control" name="DIA" >
								</div>
								<div class="form-group col-xs-2">
									<label for="">MES</label>
									<input type="date" id="MES" class="form-control" name="MES" >
								</div>
								<div class="form-group col-xs-2">
									<label for="">AÑO</label>
									<input type="date" id="ANO" class="form-control" name="IDWEB" >
								</div>
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">30. Representante legal</label>
								<input type="date" id="NOMREP" class="form-control" name="NOMREP">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">31. Persona quien diligencia</label>
								<input type="date" id="CONTACTO" class="form-control" name="CONTACTO">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">32. Cargo persona quien diligencia</label>
								<input type="date" id="CARGOCONT" class="form-control" name="CARGOCONT">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">33. Email persona quien diligencia</label>
								<input type="date" id="EMAILCONT" class="form-control" name="EMAILCONT">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">34. Telefono</label>
								<input type="date" id="TELCONT" class="form-control" name="TELCONT">
							</div>
							<div class="form-group col-xs-12   col-sm-6 ">
								<label for="">35. Ext.</label>
								<input type="date" id="EXTCONT" class="form-control" name="EXTCONT">
							</div>
						</div>						
					</div>
					<!-- Fin formulario Caratula Unica -->
					
					<!-- Fin formulario Caracterizacion de vacantes -->
					<div class="tab-pane" id="modulo-1">
						<h3 class="">Notice the gap between the content and tab after applying a background color</h3>
						<div class="row">
							<div class="form-group col-xs-12 col-sm-6 ">
								<label class="">Email</label>
								<input type="email" class="form-control col-xs-12 col-sm-3 " placeholder="Email" name="correo" id="correo" ng-model="usEmail" required>
							</div>
							<div class="form-group col-xs-12 col-sm-6 ">
								<label class="">Telefono</label>
								<input type="tel" class="form-control col-xs-12 col-sm-3 " placeholder="Telefono" name="telefono" id="telefono" ng-model="usPhone" required>
							</div>
						</div>
					</div>
					<!-- Fin formulario Caracterizacion de vacantes -->
					<div class="tap-panel" id="boton">
						<div class="row">
							<div class="form-group col-xs-12 text-right ">
								<input type="submit" class="btn btn-primary" value="Guardar" name="direccion" id="direccion" >
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Fin Contenido de la pagina -->

