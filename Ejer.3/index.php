<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votacion 2024</title>

    <!-- Swiper css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">


    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="header-container">
            <h1>La mejor pareja que pudo encontrar Shinji es: </h1>
        </div>
    </header>
    <div class="container">


        <!--PHP -->
        <?php
        session_start();

        if (!isset($_SESSION['mujer1'])) {
            $_SESSION['mujer1'] = 0;
        }
        if (!isset($_SESSION['mujer2'])) {
            $_SESSION['mujer2'] = 0;
        }
        if (!isset($_SESSION['mujer3'])) {
            $_SESSION['mujer3'] = 0;
        }
        if (!isset($_SESSION['mujer4'])) {
            $_SESSION['mujer4'] = 0;
        }


        $_SESSION['total'] = $_SESSION['mujer1'] + $_SESSION['mujer2'] +
            $_SESSION['mujer3'] + $_SESSION['mujer4'];

        // Calcular porcentajes
        $total = $_SESSION['total'];
        if ($total > 0) {
            $pmujer1 = ($_SESSION['mujer1'] * 100) / $total;
            $pmujer2 = ($_SESSION['mujer2'] * 100) / $total;
            $pmujer3 = ($_SESSION['mujer3'] * 100) / $total;
            $pmujer4 = ($_SESSION['mujer4'] * 100) / $total;

        } else {
            $pmujer1 = $pmujer2 = $pmujer3 = $pmujer4 = 0;
        }
        ?>





        <form name="frmVotacion" method="POST" action="conteo.php">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/mari_y_shinji.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Mari</h2>
                                <input class="button" type="submit" value="Votar" name="btnBoton1" /><br>
                                <p class="description">Total de votos: <?php echo $_SESSION['mujer1']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($pmujer1, 2); ?> </p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/misato_shinji.jpg" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Misato</h2>


                                <input class="button" type="submit" value="Votar" name="btnBoton2" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['mujer2']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($pmujer2, 2); ?></p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/rei_y_shinji.webp" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Rei</h2>


                                <input class="button" type="submit" value="Votar" name="btnBoton3" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['mujer3']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($pmujer3, 2); ?> </p>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="img/Shinji_y_Asuka.webp" alt="" class="card-img">
                                </div>
                            </div>

                            <div class="card-content">
                                <h2 class="name">Azuka</h2>

                                <input class="button" type="submit" value="Votar" name="btnBoton4" /><br>


                                <p class="description">Total de votos: <?php echo $_SESSION['mujer4']; ?> </p>
                                <p class="description">Porcentaje de votos: <?php echo round($pmujer4, 2); ?></p>
                            </div>
                        </div>


                        <!--  -->
                    </div>
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>


            </div>
        </form>

        <!--PHP -->
        <!-- Mascota con Mayor Voto -->
        <?php
        $arreglo = array(
            'Mari' => $_SESSION['mujer1'],
            'Misato' => $_SESSION['mujer2'],
            'Rei' => $_SESSION['mujer3'],
            'Azuka' => $_SESSION['mujer4']
        );

        arsort($arreglo);
        $mujer = array_key_first($arreglo);
        $puntaje = current($arreglo);


        ?>

        <div class="resultado">
            <p><?php echo "La pareja con mayor puntaje es $mujer con un puntaje de $puntaje."; ?></p>
        </div>
    </div>



</body>

<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="js/script.js"></script>

</html>