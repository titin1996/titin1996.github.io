document.addEventListener('DOMContentLoaded', function() {
    const cameraView = document.getElementById('camera');
    const captureButton = document.getElementById('captureButton');
    const retakeButton = document.getElementById('retakeButton');
    const fileInput = document.getElementById('fileInput');
    const capturedImage = document.getElementById('capturedImage');
    const capturedImageContainer = document.getElementById('capturedImageContainer');

    // Acceder a la cámara del dispositivo
    async function initCamera() {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ video: true });
            cameraView.srcObject = stream;
        } catch (err) {
            console.error('Error al acceder a la cámara: ', err);
        }
    }

    // Tomar una foto
    captureButton.addEventListener('click', async () => {
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.width = cameraView.videoWidth;
        canvas.height = cameraView.videoHeight;
        context.drawImage(cameraView, 0, 0, canvas.width, canvas.height);
        const imgUrl = canvas.toDataURL('image/jpeg');
        // Mostrar la foto capturada en el área designada
        capturedImage.src = imgUrl;
        capturedImage.style.display = 'block';
        capturedImageContainer.style.display = 'block';
        // Ocultar la vista previa de la cámara
        cameraView.style.display = 'none';
        // Mostrar el botón para retomar la foto
        retakeButton.style.display = 'inline-block';
    });

    // Tomar otra foto
    retakeButton.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar la recarga de la página
        // Mostrar la vista previa de la cámara y ocultar la foto capturada
        capturedImage.style.display = 'none';
        capturedImageContainer.style.display = 'none';
        cameraView.style.display = 'block';
        // Ocultar el botón para retomar la foto
        retakeButton.style.display = 'none';
    });

    // Seleccionar una foto desde el dispositivo
    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = (e) => {
            const imgUrl = e.target.result;
            // Mostrar la foto seleccionada en el área designada
            capturedImage.src = imgUrl;
            capturedImage.style.display = 'block';
            capturedImageContainer.style.display = 'block';
            // Ocultar la vista previa de la cámara
            cameraView.style.display = 'none';
            // Mostrar el botón para retomar la foto
            retakeButton.style.display = 'inline-block';
        };
        reader.readAsDataURL(file);
    });

    // Inicializar la cámara cuando la página se cargue
    initCamera();
});

