<?php
include("header.php");
?>
<link rel="stylesheet" href="../CSS/regis.css">
<div class="row">

<div class="col"></div>
<div class="col">



    <div class="container-fluid p-5 mt-5" id="div1">

        <div class="container">
            <h1 class="text-center mb-4">Registro en Galaxy Empire</h1>
            <form action="procesar_registro.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                </div><br>
                <button type="submit" class="btn btn-primary btn-block text-center">Registrarse</button>
            </form>
        </div>
    </div>
    </div>

    <div class="col">

    </div>


</div>


<br><br><br><br><br><br>
<?php
include("footer.php");
?>