<?php include("template/cabecera.php") ?>


<div class="container">
    <h1>Herramientas de Evaluación de Riesgos</h1>
    <div class="risk-assessment">
        <h2>Evaluación de Riesgos</h2>
        <div class="form-group">
            <label for="risk-description">Descripción del Riesgo:</label>
            <input type="text" id="risk-description" class="form-control">
        </div>
        <div class="form-group">
            <label for="risk-probability">Probabilidad (1-10):</label>
            <input type="number" id="risk-probability" class="form-control" min="1" max="10">
        </div>
        <div class="form-group">
            <label for="risk-severity">Severidad (1-10):</label>
            <input type="number" id="risk-severity" class="form-control" min="1" max="10">
        </div>
        <button class="btn btn-primary" onclick="calculateRisk()">Calcular Riesgo</button>
        <div id="risk-result" class="mt-3"></div>
    </div>
</div>
<script src="js/riesgo.js"></script>


<?php include("template/pie.php") ?>