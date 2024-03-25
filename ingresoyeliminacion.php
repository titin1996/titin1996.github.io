<?php include("template/cabecera.php") ?>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
        Ingreso y Eliminacion
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
                    <label for="autoclave">Motivo</label>
                    <select class="form-control" name="autoclave" id="autoclave">
                        <option value="ingreso">Ingreso</option>
                        <option value="eliminación">Eliminación</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" class="form-control" name="material" id="material" placeholder="material">
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="cantidad">
                </div>
                

                <div class="form-group">
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
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
                <th>Motivo</th>
                <th>Material</th>
                <th>Cantidad</th>
                <th>Imagen</th>
                <th>Observaciones</th>
            </tr>
        </thead>

        <tr>
            <td>1</td>
            <td>24/04/2024</td>
            <td>Ingreso</td>
            <td>Carpule</td>
            <td>1</td>
            <td>Imagen</td>
            <td>lalalala</td>
            <td> <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                <a href=""><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    </table>

</div>


<?php include("template/pie.php") ?>