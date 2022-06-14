<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestionar Productos</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info card-outline">

                        <div class="card-header">
                            <button class="btn btn-success create-product" style="margin-left: 20px;" data-toggle="modal" data-target="#modal-create-product">
                                Crear Producto
                            </button><br>
                        </div><br>
                        <!-- end card-header -->

                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive product-table">
                                <thead>
                                    <tr>
                                        <th style="width:10px;">#</th>
                                        <th>Nombre del Producto</th>
                                        <th>Referencia</th>
                                        <th>Precio</th>
                                        <th>Peso</th>
                                        <th>Categoría</th>
                                        <th>Stock</th>
                                        <th>Fecha de Creación</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal modal-default fade" id="modal-create-product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-dismissible">Agregar Producto</h4>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group has-feedback" bis_skin_checked="1" required>
                        <input type="text" name="product_name" class="form-control" placeholder="Nombre del producto">
                    </div>

                    <div class="form-group has-feedback" bis_skin_checked="1" required>
                        <input type="text" name="product_ref" class="form-control" placeholder="Referencia">
                    </div>

                    <div class="form-group has-feedback" bis_skin_checked="1" required>
                        <input type="text" name="product_price" class="form-control" placeholder="Precio">
                    </div>

                    <div class="form-group has-feedback" bis_skin_checked="1" required>
                        <input type="text" name="product_weight" class="form-control" placeholder="Peso">
                    </div>

                    <div class="form-group has-feedback" bis_skin_checked="1">
                        <label for="product_cat">Categoría</label>
                        <select name="category" class="form-control" required>
                            <?php
                            $category = array('1' => 'Producto', '2' => 'Servicio');

                            foreach ($category as $key => $value) {
                            ?>
                                <option value=" <?php echo "$value"; ?> "><?php echo "$key - $value" ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group has-feedback" bis_skin_checked="1" required>
                        <input type="text" name="product_stock" class="form-control" placeholder="Cantidad">
                    </div>

                    <div class="form-group has-feedback" bis_skin_checked="1" required>
                        <input type="date" name="create_date" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>