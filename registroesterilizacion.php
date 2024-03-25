<?php include("template/cabecera.php") ?>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
        ESTERILIZACIÓN
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
                    <label for="minutos">Minutos</label>
                    <input type="text" class="form-control" name="minutos" id="minutos" placeholder="minutos" pattern="[0-9]*">
                </div>

                <div class="form-group">
                    <label for="desarrollo">Grados</label>
                    <input type="text" class="form-control" name="Grados" id="Grados" placeholder="Grados" pattern="[0-9]*">
                </div>
                <div class="form-group">
                    <label for="responsable">Responsable (Iniciales)</label>
                    <input type="text" class="form-control" name="responsable" id="responsable" placeholder="responsable">
                </div>

                <div class="form-group">
                <label for="lote">LOTE</label>
                <input type="text" id="lote" name="lote" readonly><br><br>
                </div>
                <script src="js/lote.js"></script>


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
                <th>FECHA</th>
                <th>Hora</th>
                <th>Autoclave</th>
                <th>Minutos</th>
                <th>Grados</th>
                <th>Responsable</th>
            </tr>
        </thead>

        <tr>
            <td>1</td>
            <td>25/03/24</td>
            <td>14:45</td>
            <td>tuttnauer 1</td>
            <td>45</td>
            <td>134</td>
            <td>H.H</td>
            <td> <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                <a href=""><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    </table>

</div>

<?php include("template/pie.php") ?>