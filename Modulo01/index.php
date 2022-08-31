<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Apresentacao';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>

                        <div class="text-center">
                            <img class="img-fluid wow fadeInLeft" src="imagens/banner.png" alt="Banner">
                        </div><br>

                        <p>Desde tempos imemoráveis, a conduta humana tem sido objeto de estudo. A ética é um dos tantos ramos da filosofia e se dedica, resumidamente, ao estudo da moral em todas as suas manifestações. Ela é uma das mais altas ou mais avançadas maneiras de harmonização e convivência social. Nas décadas recentes, a abordagem sobre ética vem adquirindo cada vez mais espaço, em particular, em virtude da grande extensão de práticas perversas que tem se apresentado em grande partes do mundo, em particular, em diversas instituições públicas e privadas. Assim, algumas questões contemporâneas são postas pela ética, dentre elas: em que consiste a felicidade? O que torna uma ação boa ou má? Justa ou injusta</p>

                        <h2 class="Titulo">Objetivo</h2>
                        <hr>

                        <p><i class="fa fa-bullseye CorVerdeClaroEstado"></i> Apresentar uma sumária conceituação de ética e moral, bem como alguns sistemas éticos e seus teóricos ao longo da história (períodos clássico grego, moderno e contemporâneo).</p>


                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>