<?php include("template/cabecera.php") ?>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            REGISTRO BOWIE DICK
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" placeholder="fecha">
                </div>

                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input type="time" class="form-control" name="hora" id="hora">
                </div>

                <div class="form-group">
                    <label for="autoclave">Autoclave tuttnauer</label>
                    <select class="form-control" name="autoclave" id="autoclave">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="motivo">Responsable (iniciales)</label>
                    <input type="text" class="form-control" name="Responsable" id="Responsable" placeholder="Responsable">
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <video id="camera" autoplay playsinline style="width: 100%; height: auto;"></video>
                        <div id="capturedImageContainer" style="display: none;">
                            <img id="capturedImage" style="max-width: 100%; height: auto;">
                            <button id="retakeButton" type="button">Tomar otra foto</button>
                        </div>
                        <button id="captureButton" type="button">Tomar Foto</button>
                        <input type="file" accept="image/*" id="fileInput">
                    </div>
                    <script src="js/camera.js"></script>
                </div>

                <div class="form-group">
                    <label for="motivo">Resultado</label>
                    <select class="form-control" name="motivo" id="motivo">
                        <option value="opcion1">BUENO</option>
                        <option value="opcion2">MALO</option>
                        <option value="opcion3">ERRONEO</option>
                    </select>
                </div>
                <div class="form-group custom-textarea">
                    <label for="nuevo_campo">Observiones:</label>
                    <textarea class="form-control" id="nuevo_campo" placeholder="Observiones"></textarea>
                </div>

                <div class="btn-group" role-"group"aria-label-"">
                    <button type="button" class="btn btn-success">Agregar</button>
                </div>
            </form>
        </div>

    </div>

</div>





<div class="col-md-8">
    <div class="card-header">
        HISTORIAL
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Autoclave</th>
                <th>Responsable</th>
                <th>Bowie Dick</th>
                <th>Resultado</th>
                <th>Observaciones</th>
            </tr>
        </thead>

        <tr>
            <td>1</td>
            <td>25/03/24</td>
            <td>14:45</td>
            <td>tuttnauer 1</td>
            <td>H.H</td>
            <td>IMAGEN</td>
            <td>BUENO</td>
            <td>Todo OK.</td>
            <td> <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                <a href=""><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    </table>

</div>

<?php include("template/pie.php") ?>