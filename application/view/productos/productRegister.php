<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>REGISTRAR PRODUCTOS</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                    enctype="multipart/form-data">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Name">Nombre <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtName" required="required" class="form-control " name="txtName">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="Drescrition">Descripcion <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtDescription" name="txtDescription" required="required"
                                class="form-control">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="Price" class="col-form-label col-md-3 col-sm-3 label-align">Precio <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="txtPrice" class="form-control" type="number" name="txtPrice" required="required">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label for="Image" class="col-form-label col-md-3 col-sm-3 label-align">Imagen <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="btn-group">
                            <input type="file" name="txtImage" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" required="required"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Categoría </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="selCategory" id="selCategory">
                                <option value="">Elija una opción</option>
                                <?php foreach($categorias as $value):?>
                                <option value="<?php echo $value['idCategoria'];?>"><?php echo $value['Nombre'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button">Cancelar</button>
                            <button class="btn btn-primary" type="reset">Resetear</button>
                            <button type="submit" class="btn btn-success" name="btnRegister">Enviar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>