<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>FORMULARIO DE REGISTRO</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">

					<div class="form-group row">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Tipo de documento</label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control" name="selDocType" id="selDocType">
								<option>Elija una opción</option>
								<?php foreach($documentType as $value):?>
									<option value="<?php echo $value['idTipoDocumento'];?>"><?php echo $value['doc'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Document">N° Documento <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="number" id="txtDocument" required="required" class="form-control " name=txtDocument>
						</div>
					</div>
													
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Names">Nombres <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="txtNames" required="required" class="form-control " name="txtNames">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Lastname">Apellidos <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="txtLastname" name="txtLastname" required="required" class="form-control">
						</div>
					</div>

					<div class="item form-group">
						<label for="Email" class="col-form-label col-md-3 col-sm-3 label-align">Correo <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtEmail" class="form-control" type="email" name="txtEmail" required="required" >
						</div>
					</div>

					<div class="item form-group">
						<label for="Phone" class="col-form-label col-md-3 col-sm-3 label-align">Teléfono <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtPhone" class="form-control" type="number" name="txtPhone" required="required">
						</div>
					</div>

					<div class="item form-group">
						<label for="Address" class="col-form-label col-md-3 col-sm-3 label-align">Dirección <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtAddress" class="form-control" type="text" name="txtAddress" required="required">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Genero <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<div id="selGender" class="btn-group" data-toggle="buttons">
								<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" name="selGender" value="male" class="join-btn"> &nbsp; Masculino&nbsp;
								</label>
								<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" name="selGender" value="female" class="join-btn"> Femenina
								</label>
							</div>
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Fecha de nacimiento <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtBirthdate" name="txtBirthdate" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
							<script>
								function timeFunctionLong(input) {
									setTimeout(function() {
										input.type = 'text';
									}, 60000);
								}
							</script>
						</div>
					</div>

					<div class="item form-group">
						<label for="Username" class="col-form-label col-md-3 col-sm-3 label-align">Usuario <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtUser" class="form-control" type="text" name="txtUser" required="required">
						</div>
					</div>

					<div class="item form-group">
						<label for="Password" class="col-form-label col-md-3 col-sm-3 label-align">Contraseña <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtPassword" class="form-control" type="password" name="txtPassword" required="required">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Rol <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<select class="form-control" name="selRol" id="selRol">
								<option>Elija una opción</option>
								<?php foreach($roles as $value):?>
									<option value="<?php echo $value['idRol'];?>"><?php echo $value['Descripcion'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button class="btn btn-primary" type="button">Cancelar</button>
							<button class="btn btn-primary" type="reset">Resetear</button>
							<button type="submit" class="btn btn-success" name="btnRegister" >Enviar</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>