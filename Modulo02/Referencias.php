<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>
<?php
$page = 'Referencias';
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
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <div class="bd-callout bd-callout-success">

                            <h2 class="Titulo">REFERÊNCIAS</h2>


                            <p class="Texto">BRASIL. <strong>Constituição da República Federativa do Brasil</strong> (1988). Brasília: Edições Câmara, 2012. </p>
                            <p class="Texto">MENDES, Annhia Valléria Calmon. <strong>Ética na Administração Pública Federal: a implementação de comissões de ética setoriais:</strong> entre o desafio e a oportunidade de mudar o modelo de gestão. Brasília: FUNAG, 2010. </p>
                            <p class="Texto">NOLAN Lord. <strong>Normas de conduta para a vida pública</strong>. Cadernos ENAP, Brasília, n.12, 1997. </p>
                            <p class="Texto">OCDE. <strong>La ética en el servicio público:</strong> cuestiones y prácticas atuales. Madrid: MAP, 1997. </p>
                            <p class="Texto">OECD. <strong>Trust in Government</strong>: ethics measures in OECD countries. Washington: OECD, 2000. </p>
                            <p class="Texto">WEBER, Max. <strong>A ética protestante e o espírito do capitalismo</strong>. São Paulo: Companhia das Letras, 2004. </p>
                            <p class="Texto">WEBER, Max. <strong>Ciência e política</strong>: duas vocações. São Paulo: Cultrix, 2011.</p>






                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico04.8.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=730" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 02 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->

            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>

        </div> <!-- DIV MAIN FIM -->

        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>


        <!-- BOTÃO BACK TO TOP -->
        <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>