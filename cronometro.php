<?php include("template/cabecera.php") ?>


<div class="container">
    <h1 class="mt-4 mb-4">Calculadora de Ciclos de Esterilización</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="sterilization-time">Tiempo de Esterilización (minutos):</label>
                <input type="number" class="form-control" id="sterilization-time" min="1" value="10">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="drying-time">Tiempo de Secado (minutos):</label>
                <input type="number" class="form-control" id="drying-time" min="1" value="5">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button class="btn btn-primary" onclick="startSterilization()">Comenzar Esterilización</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button class="btn btn-primary" onclick="startDrying()">Comenzar Secado</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button class="btn btn-secondary" onclick="resetTimers()">Resetear Cronómetros</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Esterilización</h5>
                    <div id="sterilization-timer" class="timer mb-3"></div>
                    <div id="sterilization-finish-time" class="finish-time"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Secado</h5>
                    <div id="drying-timer" class="timer mb-3"></div>
                    <div id="drying-finish-time" class="finish-time"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<audio id="alarm" src="sonido/alarma.mp3"></audio>
<script src="js/cronometro.js"></script>








<?php include("template/pie.php") ?>