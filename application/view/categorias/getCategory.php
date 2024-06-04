<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>LISTA DE CATEGORIAS</h2>
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
                                        <!-- <th>ID Categoria</th> -->
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($Categorias as $value):?>
                                    <tr>
                                        
                                        <td><?php echo $value['Nombre'];?></td>
                                        
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
                                                onclick="dataCategory('<?php echo $value['idCategoria'];?>')"><i
                                                    class="fa fa-edit"></i></button>

                                            <button type="button" class="btn btn-warning btn-xs" title="Actualizar"
                                                onclick="changeStatus('<?php echo $value['idCategoria'];?>')"><i
                                                    class="fa fa-refresh"></i></button>

                                            <button type="button" class="btn btn-danger btn-xs" title="Eliminar"
                                                onclick="deleteCategory('<?php echo $value['idCategoria'];?>')"><i
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
                <h4 class="modal-title" id="myModalLabel">Editar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" name="txtIdCategory" id="txtIdCategory">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Document">Nombre <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtName" required="required" class="form-control" name="txtName">
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