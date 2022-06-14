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
                                    <?php
                                    $products = ControllerProducts::Product_List();
                                    foreach($products as $key => $value){
                                    ?>

                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value["product_name"];?></td>
                                        <td><?php echo $value["reference"];?></td>
                                        <td><?php echo $value["price"];?></td>
                                        <td><?php echo $value["weight"];?></td>
                                        <td><?php echo $value["id_categories"];?></td>
                                        <td><?php echo $value["stock"];?></td>
                                        <td><?php echo $value["create_date"];?></td>                                        
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning btn-sm">
                                                    <span class="oi oi-pencil fi-pencil">Editar</span>
                                                </button>

                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fapencil-alt text-white">Eliminar</i>
                                                </button>                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>
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
                <form action="../../controllers/products.controller.php" method="post" enctype="text/plain">

                    <div class="form-group has-feedback">
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <input type="text" name="product_name" class="form-control" placeholder="Nombre del producto" required>
                    </div>

                    <div class="form-group has-feedback">
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <input type="text" name="product_ref" class="form-control" placeholder="Referencia" required>
                    </div>

                    <div class="form-group has-feedback">
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <input type="text" name="product_price" class="form-control" placeholder="Precio" required>
                    </div>

                    <div class="form-group has-feedback">
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <input type="text" name="product_weight" class="form-control" placeholder="Peso" required>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="product_cat">Categoría</label>
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <select name="categorie" class="form-control" required>
                            <option value="Productos">1-Productos</option>
                            <option value="Servicios">2-Servicios</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <input type="text" name="product_stock" class="form-control" placeholder="Cantidad" required>
                    </div>

                    <div class="form-group has-feedback">
                        <!--suppress HtmlFormInputWithoutLabel -->
                        <input type="date" name="create_date" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left">Cerrar</button>
                        <button type="submit" class="btn btn-primary" formaction="">Guardar</button>
                    </div>


                </form>

                <?php
                $data = array();
                if ($_POST){
                    foreach($_POST as $nombre_campo => $valor){
                        $data[$nombre_campo] = $valor;
                    }
                    ControllerProducts::ctrSaveProducts($data);
                }

                ?>
            </div>
        </div>
    </div>
</div>