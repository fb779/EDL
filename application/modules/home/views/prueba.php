<!-- Fin Contenido de la pagina -->
<div id="contenido" class="container" >
	<div class="row">
		<div class="col-xs-12">
			<form action="" method="POST">
				<div class="tab-content">
					<!-- formulario Caratula Unica -->
					<div class="tab-pane active" id="caratula-unica">
						<div class="row text-center">
							<div class="col-xs-12">
								<h2>Caratula Unica</h2>
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-4 col-xs-offset-4">
								<label>1. Numero de Orden</label>
								<input type="text" class="form-control" placeholder="Numero de orden" name="IDNOREM" id="IDNOREM" required>
							</div>
						</div>

						<div class="row">
							
							<h3 class="col-xs-12 text-info">Identificacion</h3>

							<div class="form-group col-xs-3 col-xs-offset-3 " >
								<div>
									<label for="">2. Tipo de identificación</label>
								</div>
								<label class="radio-inline">
									<input type="radio" name="TIPODOC" id="inlineRadio1" value="option1"> NIT
								</label>
								<label class="radio-inline">
									<input type="radio" name="TIPODOC" id="inlineRadio2" value="option2"> CC
								</label>
								<label class="radio-inline">
									<input type="radio" name="TIPODOC" id="inlineRadio3" value="option3"> CE
								</label>
							</div>

							<div class="form-group col-xs-3">
								<label>Numero de identificación</label>
								<input type="number" class="form-control" placeholder="" name="nombre" id="nombre" required>
							</div>

							
						</div>

						<div class="row">
							<div class="form-group col-xs-3">
								<label>3. Digito de Veriicación</label>
								<input type="number" class="form-control col-xs-3" placeholder="" name="nombre" id="nombre" required>
							</div>

							<div class="form-group col-xs-3" >
								<div>
									<label for="">Tipo de registro en la cámara</label>
								</div>
								<label class="radio-inline">
									<input type="radio" name="IDRM" id="inlineRadio1" value="option1"> Inscripción matricula
								</label>
								<label class="radio-inline">
									<input type="radio" name="IDRM" id="inlineRadio2" value="option2"> Renovación
								</label>
							</div>

							<div class="form-group col-xs-3">
								<label>Camara</label>
								<select class="form-control">
									<option>Selecciones una opción</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>

							<div class="form-group col-xs-3">
								<label>Incripción/Matrícula</label>
								<input type="number" class="form-control" placeholder="" name="nombre" id="nombre" required>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-6">
								<label>4. Codigo de actividad</label>
								<input type="text" class="form-control col-xs-3" placeholder="" name="nombre" id="nombre" required>
							</div>
							<div class="form-group col-xs-6">
								<label class="">5. Novedad</label>
								<input type="text" class="form-control col-xs-3" placeholder="" name="apellido" id="apellido" required>
							</div>
						</div>

						<div class="row">
							<h4 class=" col-xs-12 text-info">UBICACIÓN Y DATOS GENERALES</h4>
						</div>

						<div class="row">
							<div class="form-group col-xs-12">
								<label>6. Nombre o  Razón social</label>	
								<input type="text" id="RAZSOC" class="form-control" name="RAZSOC" value="" size="50" maxlength="60" />
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-9">
								<label>7. Nombre Comercial</label>
								<input type="text" id="IDNOMCOM" class="form-control" name="IDNOMCOM" value="" size="50" maxlength="60" />
							</div>
							<div class="form-group col-xs-3 ">
								<label>8. Sigla</label>
								<input type="text" id="IDSIGLA" class="form-control" name="IDSIGLA" value="" maxlength="20" />
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12">
								<label>9. Domicilio principal o dirección de la gerencia</label>
								<input type="text" id="IDDIRECC" class="form-control" name="IDDIRECC" value="" size="50" maxlength="40" />
							</div>
						</div>


						<div class="row">
							<div class="form-group col-xs-6">
								<label>10. Departamento</label>
								<select id="IDDEPTO" class="form-control" name="IDDEPTO">
									<option value=""> -Seleccione- </option>
									
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>	
								
								</select>
							</div>
							<div class="form-group col-xs-6">
								<label>11. Municipio</label>
								<select id="IDMPIO" class="form-control" name="IDMPIO">
									<option value=""> -Seleccione- </option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-6">
								<label>12. Teléfono</label>
								<input type="text" id="IDTEL" class="form-control" name="IDTEL" maxlength="7">
							</div>
							<div class="form-group col-xs-6">
								<label>13. Fax</label>
								<input type="text" id="IDFAX" class="form-control" name="IDFAX" maxlength="13">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12">
								<label >14. Correo Electrónico</label>
								<input type="text" id="IDCORREO" class="form-control" name="IDCORREO" size="50" maxlength="256">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12">
								<label>15. Página web</label>
								<input type="text" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12">
								<label>16. Dirección notificación</label>
								<input type="text" id="IDDIRECC" class="form-control" name="IDDIRECC" value="" size="50" maxlength="40" />
							</div>
						</div>


						<div class="row">
							<div class="form-group col-xs-6">
								<label>17. Departamento notificación</label>
								<select id="IDDEPTO" class="form-control" name="IDDEPTO">
									<option value=""> -Seleccione- </option>
									
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="form-group col-xs-6">
								<label>18. Municipio notificación</label>
								<select id="IDMPIO" class="form-control" name="IDMPIO">
									<option value=""> -Seleccione- </option>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-6">
								<label>19. Teléfono notificación</label>
								<input type="text" id="IDTEL" class="form-control" name="IDTEL" maxlength="7">
							</div>
							<div class="form-group col-xs-6">
								<label>20. Fax notificación</label>
								<input type="text" id="IDFAX" class="form-control" name="IDFAX" maxlength="13">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-xs-12">
								<label >21. Correo Electrónico notificación</label>
								<input type="text" id="IDCORREO" class="form-control" name="IDCORREO" size="50" maxlength="256">
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12">
								<label>22. Página web notificación</label>
								<input type="text" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<h4 class="text-info">Tipo de Organización y Fecha de Constitución</h4>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-xs-3">
								<label>23. Tipo de organizaión</label>
								<input type="text" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
							
							<div class="text-center col-xs-3">
								<label for="">23. Fecha de constitución</label>
								<input type="time" id="IDWEB" class="form-control" placeholder="Ej: AAAA-MM-DD 1998-11-22" readonly>
								
	
							</div>
							<div class="form-group col-xs-3">
								<label>Desde</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
							<div class="form-group col-xs-3">
								<label>Hasta</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
						
						</div>
						
						<div class="row">
							<div class="col-xs-12">
								<h4 class="text-info">Composición del Capital Social y Estado Actual </h4>
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-3">
								<label>Nacional publico</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>

							<div class="form-group col-xs-3">
								<label>Nacional privado</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
							
							<div class="form-group col-xs-3">
								<label>Extranjero publico</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>

							<div class="form-group col-xs-3">
								<label>Extranjero privado</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
						</div>

						<div class="row">
							<div class="form-group col-xs-12">
								<label for="">26. Estado actual</label>
								<input type="time" id="IDWEB" class="form-control" name="IDWEB" maxlength="100" >
							</div>
						</div>
					</div>
					<!-- Fin formulario Caratula Unica -->
					
					<div class="tab-pane" id="modulo-1">
						<h3 class="">Notice the gap between the content and tab after applying a background color</h3>
						<div class="row">

							<div class="form-group col-xs-6">
								<label class="">Email</label>
								<input type="email" class="form-control col-xs-3" placeholder="Email" name="correo" id="correo" ng-model="usEmail" required>
							</div>
							<div class="form-group col-xs-6">
								<label class="">Telefono</label>
								<input type="tel" class="form-control col-xs-3" placeholder="Telefono" name="telefono" id="telefono" ng-model="usPhone" required>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-xs-1 col-xs-offset-11">
						<input type="submit" class="btn btn-primary" value="Dirección" name="direccion" id="direccion" >
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
	<!-- Fin Contenido de la pagina -->