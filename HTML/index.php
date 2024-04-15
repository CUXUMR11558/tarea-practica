<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="ruta/a/bootstrap.min.css">
</head>


<body class="p-3 container-fluid bg-imagen h-50" style=" background-image: url(../IMAGES/fondo23.jpg); background-size: cover;">




    <!-- div pricipal 2 -->

    <div class="row">

        <!-- formulario  -->

        <div class="col-6">

            <!-- imagen 1 -->
            <div class="row mb-3">

                <div class="col-4 text-center">
                    <button type="button">
                        <img src="../images/guardar.png" alt="imagen de boton" width="45" height="45">
                    </button>

                </div>



                <!-- imagen 2 -->
                <div class="col-4 text-center">
                    <button type="button">
                        <img src="../images/editar.webp" alt="imagen de boton" width="45" height="45">
                    </button>

                </div>



                <!-- imagen 3 -->
                <div class="col-4 text-center">
                    <button type="button">
                        <img src="../images/eliminar.png" alt="imagen de boton" width="45" height="45">
                    </button>

                </div>

            </div>


            <form method="get" id="formulario" class=" bg-dark bg-opacity-75 border border-5 border-dark text-center text-white p-3">
                <fieldset>
                    <div class="row mb-2">
                        <div class="col-2"></div>
                        <div class="col bg-primary text-white border border-dark border-5 rounded-5">
                            <legend>
                                <h1>INFORMACION PERSONAL</h1>
                            </legend>
                        </div>
                        <div class="col-2"></div>

                    </div>


                    <!-- primera linea del formulario -->

                    <div class="row">


                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">CATALOGO</label>
                                <input type="number" name="cat" class="form-control" placeholder="cat.">
                            </div>

                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">PRIMER NOMBRE</label>
                                <input type="text" name="nom1" class="form-control" placeholder="nombre1">
                            </div>

                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">SEGUNDO NOMBRE</label>
                                <input type="text" id="disabledTextInput" name="nom2" class="form-control" placeholder="nombre2">
                            </div>

                        </div>
                    </div>



                    <!-- segunda linea del formulario -->

                    <div class="row">


                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">PRIMER APELLIDO</label>
                                <input type="text" id="disabledTextInput" name="ape1" class="form-control" placeholder="nombre2">

                            </div>

                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">SEGUNDO APELLIDO</label>
                                <input type="text" id="disabledTextInput" name="ape2" class="form-control" placeholder="apellido2">
                            </div>

                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">CORREO ELECTRONICO</label>
                                <input type="email" id="disabledTextInput" name="correo" class="form-control" placeholder="correo">
                            </div>

                        </div>
                    </div>



                    <!-- tercera linea del formulario -->

                    <div class="row">


                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Edad</label>
                                <input type="number" id="disabledTextInput" name="edad" class="form-control rounded-20" placeholder="edad">
                            </div>

                        </div>



                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">GENERO</label>
                                <select id="disabledSelect" name="genero" class="form-select">
                                    <option>HOMBRE</option>
                                    <option>MUJER</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">GRADO</label>
                                <input type="text" id="disabledTextInput" name="grado" class="form-control" placeholder="grado">
                            </div>

                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">ARMA</label>
                                <input type="email" id="disabledTextInput" class="form-control" placeholder="arma">
                            </div>

                        </div>
                    </div>

                    <!--  cuarta linea del formulario -->

                    <div class="row">

                        <div class="col">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">ANETRIOR DEPENDENCIA MILITAR</label>
                                <select id="disabledSelect" class="form-select">
                                    <option></option>
                                    <option>Primera Brigada de Interia</option>
                                    <option>Segunda Brigada de Interia</option>
                                    <option>Tercera Brigada de Interia</option>
                                    <option>Cuarta Brigada de Interia</option>
                                    <option>Quinta Brigada de Interia</option>
                                    <option>Sexta Brigada de Interia</option>
                                    <option>Septima Brigada de Interia</option>
                                    <option>otros</option>



                                </select>
                            </div>
                        </div>


                        <div class="col-6 mt-3">

                            <div class="row">
                                <div class="col">CURSOS</div>
                                <div class="col"></div>

                            </div>

                            <div class="row">
                                <div class="col">

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">K</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">I</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">P</label>
                                    </div>

                                </div>

                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                            </div>



                        </div>
                    </div>

                </fieldset>

            </form>


        </div>




        <!-- carrocel  -->

        <div class="col-6 bg-dark bg-opacity-75 border border-5 border-dark text-center">
            <div class="row mt-3">
                <div class="col-2"></div>
                <div class="col bg-primary border border-dark border-5 rounded-5 text-white ">
                    <h1>DEPENDENCIAS MILITARES</h1>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">

                <!-- carrusel -->

                <div class="col-6 mt-5">

                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active contenedor-imagen">
                                <img src="../images/primbri.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item contenedor-imagen">
                                <img src="../images/segunbri.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item contenedor-imagen">
                                <img src="../images/terbri.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>

                            <div class="carousel-item contenedor-imagen">
                                <img src="../images/cuartabri.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>

                            <div class="carousel-item contenedor-imagen">
                                <img src="../images/quintabri.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>


                <!-- acordio -->

                <div class="col-6 mt-5">


                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    PRIMERA BRIGADA DE INFANTERIA
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body text-justify">
                                    Misión: La primera brigada de infantería suele ser una unidad de combate
                                    fundamental dentro de una fuerza militar. Su misión principal es realizar
                                    operaciones de combate en tierra, incluyendo ataques, defensas y maniobras
                                    tácticas.
                                    Estructura: La estructura de la primera brigada de infantería varía según las
                                    necesidades y capacidades de la fuerza militar. Por lo general, incluye varios
                                    batallones de infantería, unidades de apoyo logístico, unidades de artillería y
                                    otros elementos de combate y apoyo.
                                    Entrenamiento: Los soldados y oficiales de la primera brigada de infantería
                                    reciben un entrenamiento intensivo en tácticas de combate, armamento, técnicas
                                    de supervivencia, comunicaciones y primeros auxilios, entre otros aspectos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    SEGUNDA BRIGADA DE INFANTERIA
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Misión: La segunda brigada de infantería suele tener una
                                    misión similar a la primera, centrándose en operaciones terrestres y combate a
                                    nivel táctico.
                                    Estructura: Al igual que la primera brigada, la segunda brigada está compuesta
                                    por unidades de infantería, apoyo logístico, artillería y otros elementos
                                    necesarios para llevar a cabo sus operaciones.
                                    Entrenamiento: Los soldados y oficiales de la segunda brigada reciben un
                                    entrenamiento riguroso en tácticas de combate, manejo de armas y equipos,
                                    trabajo en equipo y otras habilidades necesarias para el cumplimiento de su
                                    misión.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    TERCERA BRIGADA DE INFAANTERIA
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Misión: La tercera brigada de infantería también se
                                    dedica a operaciones terrestres y tácticas de combate, pudiendo tener
                                    responsabilidades específicas según la estrategia militar de la fuerza a la que
                                    pertenezca.
                                    Estructura: Al igual que las brigadas anteriores, la tercera brigada está
                                    organizada en batallones de infantería, unidades de apoyo y otras unidades
                                    especializadas.
                                    Entrenamiento: El entrenamiento de la tercera brigada sigue los estándares de
                                    las fuerzas militares, enfocándose en habilidades de combate, liderazgo,
                                    logística y coordinación con otras unidades.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    CUARTA BRIGADA DE INFANTERIA
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Misión: La cuarta brigada de infantería tiene misiones
                                    similares a las anteriores, pudiendo estar especializada en ciertos tipos de
                                    operaciones terrestres dependiendo de la estructura de la fuerza militar.
                                    Estructura: La estructura interna de la cuarta brigada incluye unidades de
                                    infantería, unidades de apoyo y elementos especializados según las necesidades
                                    operativas.
                                    Entrenamiento: Los soldados y oficiales de la cuarta brigada reciben
                                    entrenamiento en tácticas de combate, manejo de armamento, comunicaciones y
                                    otras habilidades esenciales para su desempeño en el campo de batalla.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    QUINTA BRIGADA DE INFANTERIA
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Misión: La quinta brigada de infantería desempeña roles
                                    similares a las otras brigadas, siendo capaz de realizar operaciones de combate
                                    y maniobras tácticas en terrenos diversos.
                                    Estructura: Al igual que las anteriores, la quinta brigada está organizada en
                                    unidades de infantería, apoyo logístico y elementos especializados como
                                    artillería, ingenieros de combate, etc.
                                    Entrenamiento: El entrenamiento de la quinta brigada se centra en habilidades de
                                    combate, tácticas de supervivencia, mantenimiento de equipo y otros aspectos
                                    fundamentales para su desempeño en el campo de batalla.</div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>


    </div>




    <!-- div pricipal 3 -->

    <div class="row">

        <div class="col-6 mt-3">

            <div class="bg-dark bg-opacity-75 border border-5 border-dark rounded-5 p-3">


                <div class=" row mb-3">
                    <div class="col-2"></div>
                    <div class="col text-center border border-5 border-white rounded-5 text-white bg-primary">
                        <h1>IFORMACION PERSONAL</h1>
                    </div>
                    <div class="col-2"></div>
                </div>

                <?php


                $cat = $_GET["cat"];
                $nom1 = $_GET["nom1"];
                $nom2 = $_GET["nom2"];
                $ape1 = $_GET["ape1"];
                $ape2 = $_GET["ape2"];
                $correo = $_GET["correo"];
                $edad = $_GET["edad"];
                $genero = $_GET["genero"];
                $grado = $_GET["grado"];



                ?>

                <div class="row table-responsive text-center">

                    <table class="table table-bordered border-dark ">
                        <thead>
                            <tr>
                                <th scope="col">N0.</th>
                                <th scope="col">CATALOGO</th>
                                <th scope="col">NOMBRES</th>
                                <th scope="col">APELLIDOS</th>
                                <th scope="col">CORREO</th>
                                <th scope="col">EDAD</th>
                                <th scope="col">GENERO</th>
                                <th scope="col">GRADO</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo "$cat";  ?> </td>
                                <td><?php echo "$nom1 " . "$nom2";  ?></td>
                                <td><?php echo "$ape1 " . "$ape2";  ?></td>
                                <td><?php echo "$correo";  ?></td>
                                <td><?php echo "$edad";  ?></td>
                                <td><?php echo "$genero";  ?></td>
                                <td><?php echo "$grado";  ?></td>


                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>65346</td>
                                <td>Fred</td>
                                <td>Torres</td>
                                <td>Fred45@gmail.com</td>
                                <td>22</td>
                                <td>Hombre</td>
                                <td>teniente</td>




                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>225343</td>
                                <td>Luis</td>
                                <td>Maldonado</td>
                                <td>mal@gmail.com</td>
                                <td>25</td>
                                <td>hombre</td>
                                <td>Subteniente</td>




                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>453234</td>
                                <td>Daniel</td>
                                <td>Cruz</td>
                                <td>dancr@gmail.com</td>
                                <td>21</td>
                                <td>Hombre</td>
                                <td>Subteniente</td>




                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>876544</td>
                                <td>Cindy</td>
                                <td>Hernandez</td>
                                <td>cyn@gmail.com</td>
                                <td>19</td>
                                <td>Mujer</td>
                                <td>Especialista</td>
                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td>453454</td>
                                <td>Otto</td>
                                <td>Castillo</td>
                                <td>otto@gmail.com</td>
                                <td>23</td>
                                <td>Hombre</td>
                                <td>Subteniente</td>




                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>65346</td>
                                <td>Fred</td>
                                <td>Torres</td>
                                <td>Fred45@gmail.com</td>
                                <td>22</td>
                                <td>Hombre</td>
                                <td>teniente</td>




                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>225343</td>
                                <td>Luis</td>
                                <td>Maldonado</td>
                                <td>mal@gmail.com</td>
                                <td>25</td>
                                <td>hombre</td>
                                <td>Subteniente</td>




                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>453234</td>
                                <td>Daniel</td>
                                <td>Cruz</td>
                                <td>dancr@gmail.com</td>
                                <td>21</td>
                                <td>Hombre</td>
                                <td>Subteniente</td>




                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>876544</td>
                                <td>Cindy</td>
                                <td>Hernandez</td>
                                <td>cyn@gmail.com</td>
                                <td>19</td>
                                <td>Mujer</td>
                                <td>Especialista</td>
                            </tr>


                        </tbody>
                    </table>



                </div>
            </div>

        </div>

        

            <div class="col-6 bg-dark bg-opacity-50 text-white border border-5 border-dark rounded-5 mt-3">
                <div class="row mt-3 text-center">

                    <div class="col-2"></div>
                    <div class="col border border-5 border-white text-white rounded-5 bg-primary">
                        <h1>MEMORIAS DE VALOR</h1>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row mt-3">

                    <div class="col">
                        <img src="../images/gal1.webp" class="img-fluid w-70 h-70 border border-5 border-white rounded-5" alt="...">
                    </div>
                    <div class="col">
                        <img src="../images/gal2.jpg" class="img-fluid w-70 h-70 border border-5 border-white rounded-5" alt="...">
                    </div>
                    <div class="col">
                        <img src="../images/gal3.jpg" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                    </div>

                </div>

                <div class="row mt-3">

                    <div class="col">
                        <img src="../images/gal4.jpg" class="img-fluid w-100 h-100 border border-5 border-white rounded-5" alt="...">
                    </div>
                    <div class="col">
                        <img src="../images/gal5.avif" class="img-fluid w-100 h-100 border border-5 border-white rounded-5" alt="...">
                    </div>
                    <div class="col">
                        <img src="../images/gal6.jpg" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                    </div>

                </div>

                <div class="row mt-3 mb-3">

                    <div class="col">
                        <img src="../images/gal7.jpg" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                    </div>
                    <div class="col">
                        <img src="../images/gal8.avif" class="img-fluid border border-5 border-white rounded-5" alt="...">
                    </div>
                    <div class="col">
                        <img src="../images/gal9.jpg" class="img-fluid h-100 border border-5 border-white rounded-5" alt="...">
                    </div>

                </div>

            </div>
       

    </div>




    </div>








    <script src="ruta/a/jquery.min.js"></script>
<script src="ruta/a/bootstrap.min.js"></script>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>