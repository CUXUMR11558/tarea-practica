<?php
include("header.php");
?>
<link rel="stylesheet" href="../CSS/coti.css">

<div class="row">
    <div class="col-6">
        <div class="container-fluid p-5" id="div01">
            <h1 class="text-center">REALIZA TU COTIZACION DEL PROGRAMA QUE NESECITAS</h1>

            <p class="p-5">"¿Estás buscando llevar tu visión al siguiente nivel digital? En Galaxy Empire, entendemos la importancia de una aplicación que no solo sea funcional, sino también cautivadora y adaptable a tus necesidades únicas. Desde aplicaciones móviles innovadoras hasta soluciones web personalizadas, nuestro equipo experto está listo para convertir tus ideas en una realidad digital vibrante. ¡Solicita tu cotización hoy y comienza a dar vida a tu proyecto con la excelencia y la creatividad de Galaxy Empire!"</p>

        </div>

    </div>
    <div class="col-6">
        <div class="container-fluid p-5">
            <div class="container">
                <h1 class="mb-4">Formulario de Cotización</h1>
                <form action="procesar_formulario.php" method="POST" class="p-5 text-white">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="direccion">Dirección de la Empresa</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción de la Aplicación</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Cotización</button>
                </form>
            </div>
        </div>

    </div>





</div>

<hr>
<br>
<div class="row p-5 ">

    <div class="col text-center">
        <img src="../IMAGES/apli1.webp" alt="" class="rounded-circle img-fluid" id="img">

    </div>

    <div class="col text-center">
        <img src="../IMAGES/apli2.jpeg" alt="" class="rounded-circle img-fluid" id="img">

    </div>

    <div class="col text-center">
        <img src="../IMAGES/apli3.jpeg" alt="" class="rounded-circle img-fluid" id="img">

    </div>
</div>

<br><br><br><br><br>









<?php
include("footer.php");
?>