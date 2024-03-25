function calculateRisk() {
    let riskDescription = document.getElementById('risk-description').value;
    let riskProbability = parseInt(document.getElementById('risk-probability').value);
    let riskSeverity = parseInt(document.getElementById('risk-severity').value);

    let riskValue = riskProbability * riskSeverity;

    let riskResultElement = document.getElementById('risk-result');

    if (isNaN(riskValue)) {
        riskResultElement.textContent = 'Por favor, ingrese valores válidos.';
        riskResultElement.classList.remove('text-success');
        riskResultElement.classList.add('text-danger');
    } else {
        if (riskValue <= 10) {
            riskResultElement.textContent = `Riesgo bajo: ${riskValue}`;
            riskResultElement.classList.remove('text-success', 'text-danger');
            riskResultElement.classList.add('text-success');
        } else if (riskValue <= 50) {
            riskResultElement.textContent = `Riesgo moderado: ${riskValue}`;
            riskResultElement.classList.remove('text-success', 'text-danger');
            riskResultElement.classList.add('text-warning');
        } else {
            riskResultElement.textContent = `Riesgo alto: ${riskValue}`;
            riskResultElement.classList.remove('text-success', 'text-warning');
            riskResultElement.classList.add('text-danger');
        }
    }
}
