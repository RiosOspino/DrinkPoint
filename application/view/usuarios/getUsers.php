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
                                            <button type="button" class="btn btn-primary btn-xs" onclick="dataUser('<?php echo $value['idUsuario'];?>')"><i class="fa fa-edit"></i></button>

                                            <button type="button" class="btn btn-warning btn-xs" onclick="changeStatus('<?php echo $value['idUsuario'];?>')"><i class="fa fa-refresh"></i></button>

                                            <button type="button" class="btn btn-danger btn-xs" onclick="deleteUser('<?php echo $value['idUsuario'];?>')"><i class="fa fa-trash"></i></button>
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