let sterilizationTime;
let dryingTime;
let sterilizationSeconds;
let dryingSeconds;
let sterilizationInterval;
let dryingInterval;
let sterilizationTimerElement = document.getElementById('sterilization-timer');
let dryingTimerElement = document.getElementById('drying-timer');
let sterilizationFinishTimeElement = document.getElementById('sterilization-finish-time');
let dryingFinishTimeElement = document.getElementById('drying-finish-time');
let alarmSound = new Audio('sonido/alarma.mp3');

function startSterilization() {
    resetTimers();
    sterilizationTime = parseInt(document.getElementById('sterilization-time').value);
    sterilizationSeconds = sterilizationTime * 60;
    sterilizationInterval = setInterval(updateSterilizationTimer, 1000);
}

function startDrying() {
    resetTimers();
    dryingTime = parseInt(document.getElementById('drying-time').value);
    dryingSeconds = dryingTime * 60;
    dryingInterval = setInterval(updateDryingTimer, 1000);
}

function resetTimers() {
    clearInterval(sterilizationInterval);
    clearInterval(dryingInterval);
    sterilizationTimerElement.textContent = '';
    dryingTimerElement.textContent = '';
    sterilizationFinishTimeElement.textContent = '';
    dryingFinishTimeElement.textContent = '';
}

function updateSterilizationTimer() {
    sterilizationSeconds--;
    sterilizationTimerElement.textContent = formatTime(sterilizationSeconds);
    if (sterilizationSeconds <= 0) {
        clearInterval(sterilizationInterval);
        alarmSound.play(); // Reproducir alarma cuando el tiempo de esterilización haya terminado
    }
    updateSterilizationFinishTime();
}


function updateDryingTimer() {
    dryingSeconds--;
    dryingTimerElement.textContent = formatTime(dryingSeconds);
    if (dryingSeconds <= 0) {
        clearInterval(dryingInterval);
        alarmSound.play(); // Reproducir alarma cuando el tiempo de secado haya terminado
    }
    updateDryingFinishTime();
}

function updateSterilizationFinishTime() {
    let currentTime = new Date();
    let finishTime = new Date(currentTime.getTime() + sterilizationSeconds * 1000);
    sterilizationFinishTimeElement.textContent = `Hora estimada de finalización: ${finishTime.toLocaleTimeString()}`;
}

function updateDryingFinishTime() {
    let currentTime = new Date();
    let finishTime = new Date(currentTime.getTime() + dryingSeconds * 1000);
    dryingFinishTimeElement.textContent = `Hora estimada de finalización: ${finishTime.toLocaleTimeString()}`;
}

function formatTime(seconds) {
    let mins = Math.floor(seconds / 60);
    let secs = seconds % 60;
    return `${mins < 10 ? '0' : ''}${mins}:${secs < 10 ? '0' : ''}${secs}`;
}

