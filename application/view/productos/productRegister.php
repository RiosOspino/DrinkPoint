<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>REGISTRAR PRODUCTOS</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="dropdown-item" href="#">Ajustes 1</a>
							</li>
							<li><a class="dropdown-item" href="#">Ajustes 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Document">Producto <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="number" id="selDocType" required="required" class="form-control " name=selDocType>
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
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="Lastname">Descripcion <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="txtDocument" name="txtDocument" required="required" class="form-control">
						</div>
					</div>

					<div class="item form-group">
						<label for="Precio" class="col-form-label col-md-3 col-sm-3 label-align">Precio <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtNumber" class="form-control" type="number" name="txtNumber" required="required" >
						</div>
					</div>

					<div class="item form-group">
						<label for="imagen" class="col-form-label col-md-3 col-sm-3 label-align">Image <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtImagen" class="form-control" type="imagen" name="txtImagen" required="required">
						</div>
					</div>

					<div class="item form-group">
						<label for="Address" class="col-form-label col-md-3 col-sm-3 label-align">Dirección <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtAddress" class="form-control" type="text" name="txtAddress" required="required">
						</div>
					</div>

					<div class="item form-group">
						<label for="Username" class="col-form-label col-md-3 col-sm-3 label-align">Usuario <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtUser" class="form-control" type="text" name="txtUser" required="required">
						</div>
					</div>

					<div class="item form-group">
						<label for="categoria" class="col-form-label col-md-3 col-sm-3 label-align">Categoria <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 ">
							<input id="txtCategoria" class="form-control" type="categoria" name="txtCategoria" required="required">
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button class="btn btn-primary" type="button">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success" name="btnRegister" >Enviar</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>