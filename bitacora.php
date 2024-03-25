<?php include("template/cabecera.php") ?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            BITACORA
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="fecha">FECHA</label>
                    <input type="date" class="form-control" id="fecha" placeholder="fecha">
                </div>

                <div class="form-group">
                    <label for="motivo">Motivo</label>
                    <input type="text" class="form-control" name="motivo" id="motivo" placeholder="motivo">
                </div>

                <div class="form-group custom-textarea">
                    <label for="nuevo_campo">Observiones:</label>
                    <textarea class="form-control" id="nuevo_campo" placeholder="Observiones"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                </div>

                <div class="btn-group" role-"group"aria-label-"">
                    <button type="button" class="btn btn-success">Agregar</button>
                </div>
            </form>
        </div>

    </div>

</div>



<div class="col-md-7">
    <div class="card-header">
        HISTORIAL
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>FECHA</th>
                <th>MOTIVO</th>
                <th>DESARROLLO</th>
            </tr>
        </thead>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td> <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                <a href=""><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    </table>

</div>


<?php include("template/pie.php") ?>