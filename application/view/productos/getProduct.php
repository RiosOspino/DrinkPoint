<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>LISTA DE USUARIOS</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
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
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Categoría</th>
                                        <th>Imagen</th>
                                        <th>Usuario</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($productos as $value):?>
                                    <tr>
                                        <td><?php echo $value['Nombre'];?></td>
                                        <td><?php echo $value['Descripcion'];?></td>
                                        <td><?php echo $value['Precio'];?></td>
                                        <td><?php echo $value['Categoria'];?></td>
                                        <td><?php
                                            if ($value['Imagen'] != null) {
                                                echo "<img src='data:image/jpeg;base64, " . base64_encode($value['Imagen']) . "'/>";
                                            }else {
                                                echo "<img src='" . URL . "img/Image-not-found.png'/>";                                                
                                            }
                                            
                                        ?></td>                                        
                                        <td><?php echo $value['Usuario'];?></td>
                                        <td><?php echo $value['Estado'];?></td>
                                        

                                        <td>
                                            <!-- //Para que quede el boton de estado o inactivo como un boton  -->
                                            <?php if($value['Estado'] == 1):?>
                                            <label class="badge bagde-pill badge-success">Activo</label>
                                            <?php else: ?>
                                            <label class="badge bagde-pill badge-danger">Inactivo</label>
                                            <?php endif;?>
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                                data-target="#modal-edit" title="Editar"
                                                onclick="dataProduct('<?php echo $value['idProducto'];?>')"><i
                                                    class="fa fa-edit"></i></button>

                                            <button type="button" class="btn btn-warning btn-xs" title="Actualizar"
                                                onclick="changeStatus('<?php echo $value['idProducto'];?>')"><i
                                                    class="fa fa-refresh"></i></button>

                                            <button type="button" class="btn btn-danger btn-xs" title="Eliminar"
                                                onclick="deleteProduct('<?php echo $value['idProducto'];?>')"><i
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
                <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" name="txtIdProduct" id="txtIdProduct">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Document">Nombre <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtName" required="required" class="form-control" name="txtName">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Names">Descripcion <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtDescription" required="required" class="form-control " name=txtDescription>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Lastname">Precio <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="txtPrice" name="txtPrice" required="required"
                                class="form-control">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="Email" class="col-form-label col-md-3 col-sm-3 label-align">Imagen <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="txtImage" class="form-control" type="text" name="txtImage" required="required">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Categoría</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="selCategory" id="selCategory">
                                <option>Elija una opción</option>
                                <?php foreach($documentType as $value):?>
                                <option value="<?php echo $value['idCategoria'];?>"><?php echo $value['doc'];?>
                                </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <!-- <div class="item form-group">
                        <label for="Phone" class="col-form-label col-md-3 col-sm-3 label-align">Teléfono <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="txtPhone" class="form-control" type="number" name="txtPhone" required="required">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="Address" class="col-form-label col-md-3 col-sm-3 label-align">Dirección <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="txtAddress" class="form-control" type="text" name="txtAddress"
                                required="required">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="Username" class="col-form-label col-md-3 col-sm-3 label-align">Usuario <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="txtUser" class="form-control" type="text" name="txtUser" required="required">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="Password" class="col-form-label col-md-3 col-sm-3 label-align">Contraseña <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="txtPassword" class="form-control" type="password" name="txtPassword"
                                required="required">
                        </div>
                    </div> -->
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary " name="btnUpdate">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>