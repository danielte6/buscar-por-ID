<?php
require_once '../conn/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Tus encabezados aquí -->
</head>
<body>
    <!-- Tu código HTML aquí -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <!-- ... (resto de tu código) ... -->
    </div>
    <!-- Full Screen Search End -->

    <!-- Otros elementos HTML y scripts aquí -->

    <!-- Script de búsqueda -->
    <script>
        function buscarSocio() {
            var cedula = document.getElementById("cedulaInput").value;
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var resultado = JSON.parse(this.responseText);

                    document.getElementById("Nombre").value = resultado.Nombre;
                    document.getElementById("Cedula").value = resultado.Cedula;
                    document.getElementById("Apellido").value = resultado.Apellido;
                    document.getElementById("Correo").value = resultado.CorreoElectronico;
                    document.getElementById("Telefono").value = resultado.NumeroTelefono;
                    document.getElementById("Direccion").value = resultado.Direccion;

                    var modal = new bootstrap.Modal(document.getElementById('searchModal'));
                    modal.show();
                }
            };

            xhr.open("GET", "xampp/fe/afiliados.php?cedula=" + cedula, true);
            xhr.send();
        }
    </script>
</body>
</html>
