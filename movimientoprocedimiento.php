<?php include("template/cabecera.php") ?>


<div class="container mt-4">
    <div class="row mt-n4">
        <div class="col-md-12 text-center">
            <h1 class="display-3 text-primary font-weight-bold">Procedimiento</h1>
            <p class="lead">Box TENS. Lorena Aguero</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 border-right">
            <div>
                <h2>Entrega Diaria</h2>
                <input type="text" id="buscador" class="form-control mb-3" placeholder="Buscar...">

                <div class="custom-scrollbar">

                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-2">Riñon</h4>
                            <div class="row align-items-center">
                                <img src="img/bandeja.png" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group col-md-10 d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4 class="mb-2">Caja de curación</h4>
                            <div class="row align-items-center">
                                <img src="img/caja_curacion.png" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group col-md-10 d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4 class="mb-2">Apósito Grande</h4>
                            <div class="row align-items-center">
                                <img src="img/apositogrande.jpg" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group col-md-10 d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <h4 class="mb-2">Apósito Chico</h4>
                            <div class="row align-items-center">
                                <img src="img/apositochico.jpg" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group col-md-10 d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 class="mb-2">Gasas Grande</h4>
                            <div class="row align-items-center">
                                <img src="img/gasas.jpeg" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group col-md-10 d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4 class="mb-2">Gasas Chica</h4>
                            <div class="row align-items-center">
                                <img src="img/gasas.jpeg" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4 class="mb-2">Saca Corchete</h4>
                            <div class="row align-items-center">
                                <img src="img/gasas.jpeg" class="img-fluid col-md-2" alt="Imagen">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <input type="number" class="form-control" value="0" min="0">
                                </li>
                            </div>
                        </div>
                    </div>
                    <script src="js/buscadormovimiento.js"></script>


                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Información General</h2>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" placeholder="Nombre">
            </div>

            <div class="form-group">
                <label for="quien_retiro">Quien Retiró:</label>
                <input type="text" class="form-control" id="quien_retiro" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="quien_entrego">Quien Entregó:</label>
                <input type="text" class="form-control" id="quien_entrego" placeholder="Nombre">
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
            </div>
        </div>
    </div>


</div>


<?php include("template/pie.php") ?>