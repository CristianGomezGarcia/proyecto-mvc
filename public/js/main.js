const botones = document.querySelectorAll(".btnEliminar");

botones.forEach(boton => {
    boton.addEventListener("click", function () {
        const matricula = this.dataset.matricula;
        const confirm = window.confirm("¿Está seguro que quiere eliminar esta matricula: " + matricula + "?");
        if (confirm) {
            httpRequest("http://localhost/sites/mvc/Query/EliminarAlumno/" + matricula, function () {
                //console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;
                const tbody = document.querySelector("#tbody-alumnos");
                const fila = document.querySelector("#fila-" + matricula);
                tbody.removeChild(fila);
            });
        }
    })
});

function httpRequest(url, callback) {
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback.apply(http)
        }
    }
}