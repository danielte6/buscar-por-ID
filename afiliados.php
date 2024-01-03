<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Federacion Nacional de Contadores del Ecuador</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

     <!-- Favicon -->
     <link href="img/ico.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->
    <?php
        include "Topbar.php"
        ?>

    <!-- Navbar Start -->
    <?php
        include "Navbar.php"
        ?>
    <!-- Navbar End -->
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Afiliados</h1>
                    <a href="index.php" class="h5 text-white">Inicio</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="afiliados.php" class="h5 text-white">Afiliados</a>
                </div>
            </div>
        </div>

  <!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-light" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center bg-light">

                <div class="container-fluid py-5">
                    <div class="container py-5">
                        <script>
                            function buscarSocio() {
                                // Obtener el valor de la cédula desde el campo de entrada
                                var cedula = document.getElementById("cedulaInput").value;

                                // Realizar la solicitud AJAX
                                var xhr = new XMLHttpRequest();
                                xhr.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        // Manejar la respuesta del servidor
                                        var resultado = JSON.parse(this.responseText);

                                        // Actualizar los campos en el modal con la información obtenida
                                        document.getElementById("Nombre").value = resultado.Nombre;
                                        document.getElementById("Cedula").value = resultado.Cedula;
                                        document.getElementById("Apellido").value = resultado.Apellido;
                                        document.getElementById("Correo").value = resultado.CorreoElectronico;
                                        document.getElementById("Telefono").value = resultado.NumeroTelefono;
                                        document.getElementById("Direccion").value = resultado.Direccion;

                                        // Mostrar el modal
                                        var modal = new bootstrap.Modal(document.getElementById('searchModal'));
                                        modal.show();
                                    }
                                };
                                // Configurar la solicitud AJAX
                                xhr.open("GET", "xammm/fe/afiliados.php?cedula=" + cedula, true);
                                xhr.send();
                            }
                        </script>
                        <div id="resultado_busqueda"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


    <!-- About Start -->
   
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">

        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"> <h5 class="fw-bold text-primary text-uppercase">Afiliados</h5></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <h5 class="fw-bold text-primary text-uppercase">Auditores</h5></button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
               
                <h1 class="mb-0">Consulta nuestro registro oficial</h1>
                <h1 class="mb-0" >Federacion de Contadores del Ecuador</h1>
            </div>
            <div class="row g-5">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <div class="input-group" style="max-width: 800px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Ingresa tu numero de ruc">
                        <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#searchModal" ><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
  </div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

  <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
              
                <h1 class="mb-0">Consulta nuestro registro oficial</h1>
                <h1 class="mb-0" >Federacion de Contadores del Ecuador</h1>
            </div>
            <div class="row g-5">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <div class="input-group" style="max-width: 800px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Ingresa tu numero de ruc">
                        <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#searchModal2" ><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
  </div>
 
</div>




       
        </div>
    </div>
    <!-- Team End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Convenios</h5>
                <h1 class="mb-0">Colegios de contadores del Ecuador</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                <a href="#" data-bs-toggle="modal" data-bs-target="#ColegioCarchi"><img src="img/1.png" alt=""> </a>    
                <a href="" data-bs-toggle="modal" data-bs-target="#ColegioBolivar"><img src="img/2.png" alt=""> </a>    
                <a href="" data-bs-toggle="modal" data-bs-target="#ColegioChimborazo" ><img src="img/3.png" alt=""> </a>    
                <a href="" data-bs-toggle="modal" data-bs-target="#ColegioCotopaxi"><img src="img/4.png" alt=""> </a>    
                <a href=""><img src="img/5.png" alt=""> </a>    
                <a href=""><img src="img/6.png" alt=""> </a>    
                <a href=""><img src="img/7.png" alt=""> </a>    
                <a href=""><img src="img/8.png" alt=""> </a>    
                <a href=""><img src="img/9.png" alt=""> </a>    
                <a href=""><img src="img/10.png" alt=""> </a>    
                <a href=""><img src="img/11.png" alt=""> </a>    
                <a href=""><img src="img/12.png" alt=""> </a>    
                <a href=""><img src="img/13.png" alt=""> </a>    
                <a href=""><img src="img/14.png" alt=""> </a>    
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    <?php
        include "Footer.php"
        ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
