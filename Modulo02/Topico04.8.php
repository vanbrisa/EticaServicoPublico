<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.8';
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <style>
        .BCorEad {
            Background: #4885AE;
        }

        .textmiddle {
            vertical-align: middle !important;
            text-align: center !important;
        }
    </style>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <p class="SubTitulo"> Exemplos de Códigos de Ética</p>
                        <hr>

                        <p>Indicamos, a seguir, um modelo de código de ética. Para tanto, destacamos o Código de Ética Profissional do Servidor Público Federal (1994) e o Sistema de Gestão de Ética do Poder Executivo Federal (2008).</p>
                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Código de Ética Profissional do Servidor Público Civil do Poder Executivo Federal: <a href="https://unilab.edu.br/wp-content/uploads/2018/01/C%C3%B3digo-de-%C3%89tica-do-Servidor-P%C3%BAblico-Federal.pdf" target="_blank">https://unilab.edu.br/wp-content/uploads/2018/01/C%C3%B3digo-de-%C3%89tica-do-Servidor-P%C3%BAblico-Federal.pdf</a></p>
                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> DECRETO Nº 1.171, DE 22 DE JUNHO DE 1994: <a href="http://www.planalto.gov.br/ccivil_03/decreto/d1171.htm" target="_blank">http://www.planalto.gov.br/ccivil_03/decreto/d1171.htm</a></p>
                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> DECRETO Nº 6.029, DE 1º DE FEVEREIRO DE 2007: <a href="http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2007/decreto/d6029.htm" target="_blank">http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2007/decreto/d6029.htm</a></p>
                   

        <br><br><!-- SCRIPT LIGHTBOX -->
        <script>
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

    </div> <!-- CLASS PAGE TITLE FIM -->
    </div> <!-- End col-md-10 -->

    <div class="col-md-1"></div>
    </div> <!-- End row -->

    <!-- Botões de navegação -->
    <div class="text-center">
        <a href="Topico04.7.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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