<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>LISTA DE PRODUCTOS</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Ajustes 1</a>
                            <a class="dropdown-item" href="#">Ajustes 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Documento</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Correo Electronico</th>
                                        <th>Usuario</th>
                                        <th>Telefono</th>
                                        <th>Rol</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $value):?>
                                    <tr>
                                        <td><?php echo $value['tipoDoc'];?></td>
                                        <td><?php echo $value['Documento'];?></td>
                                        <td><?php echo $value['Nombres'];?></td>
                                        <td><?php echo $value['Apellidos'];?></td>
                                        <td><?php echo $value['Email'];?></td>
                                        <td><?php echo $value['Usuario'];?></td>
                                        <td><?php echo $value['Telefono'];?></td>
                                        <td><?php echo $value['rol'];?></td>
                                        <td>

                                            <!-- //Para que quede el boton de estado o inactivo como un boton -->
                                            <?php if($value['Estado'] == 1):?>
                                            <label class="badge bagde-pill badge-success">Activo</label>
                                            <?php else: ?>
                                            <label class="badge bagde-pill badge-danger">Inactivo</label>
                                            <?php endif;?>
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                                data-target="#modal-edit" title="Editar"
                                                onclick="dataUser('<?php echo $value['idUsuario'];?>')"><i
                                                    class="fa fa-edit"></i></button>

                                            <button type="button" class="btn btn-warning btn-xs" title="Actualizar"
                                                onclick="changeStatus('<?php echo $value['idUsuario'];?>')"><i
                                                    class="fa fa-refresh"></i></button>

                                            <button type="button" class="btn btn-danger btn-xs" title="Eliminar"
                                                onclick="deleteUser('<?php echo $value['idUsuario'];?>')"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-example-modal-lg" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Productos</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" name="txtIdUser" id="txtIdUser">

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
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary " name="btnUpdate">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>