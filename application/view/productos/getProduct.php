<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>LISTA DE PRODUCTOS</h2>
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
                                                onclick="product_changeStatus('<?php echo $value['idProducto'];?>')"><i
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

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Producto</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" name="txtIdProducto" id="txtIdProducto">

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

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Categoría</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="selCategory" id="selCategory">
                                <option value="">Elija una opción</option>
                                <?php foreach($categorias as $value):?>
                                <option value="<?php echo $value['idCategoria'];?>"><?php echo $value['Nombre'];?></option>
                                <?php endforeach;?>
                            </select>
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