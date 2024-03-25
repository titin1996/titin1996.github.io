document.getElementById("buscador").addEventListener("keyup", function() {
    var input, filter, cuotaItems, i, txtValue;
    input = document.getElementById('buscador');
    filter = input.value.toUpperCase();
    cuotaItems = document.querySelectorAll(".custom-scrollbar .col-md-12");
    for (i = 0; i < cuotaItems.length; i++) {
        h4 = cuotaItems[i].getElementsByTagName("h4")[0];
        txtValue = h4.textContent || h4.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            cuotaItems[i].style.display = "";
        } else {
            cuotaItems[i].style.display = "none";
        }
    }
});