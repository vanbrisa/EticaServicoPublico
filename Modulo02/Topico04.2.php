<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.2';
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

                        <p class="SubTitulo"> Ferramentas Estratégicas</p>
                        <hr>


                        <p>Como ferramenta estratégica, o Conselho da OCDE aprovou seis medidas para a condução da ética no serviço público. São elas:</p>

                        <ul class="none">
                            <li><i class="fa fa-check CorVerdeClaroEstado"></i> Desenvolver e inspecionar regularmente políticas, procedimentos, práticas e instituições que exerçam alguma influência sobre a conduta no serviço público.</li>
                            <li><i class="fa fa-check CorVerdeClaroEstado"></i> Fomentar a ação governamental para manter altos padrões de conduta e enfrentar a corrupção no setor público.</li>
                            <li><i class="fa fa-check CorVerdeClaroEstado"></i> Incorporar o aspecto ético aos marcos de referências administrativas para garantir práticas de administração congruentes com os valores e princípios do serviço público.</li>
                            <li><i class="fa fa-check CorVerdeClaroEstado"></i> Combinar, criteriosamente, os aspectos ideais e regulamentares dos sistemas de condução da ética.</li>
                            <li><i class="fa fa-check CorVerdeClaroEstado"></i> Avaliar os efeitos das reformas da administração pública na conduta ética do serviço civil.</li>
                            <li><i class="fa fa-check CorVerdeClaroEstado"></i> Utilizar os princípios de condução da ética no serviço público para garantir altos padrões de conduta.</li>
                        </ul>

                        <p>Afirmamos, portanto, que “uma vez que as relações de governos se formalizam por meio de acordos e convenções, e são os servidores públicos os agentes desse processo, a necessidade de assegurar um padrão de conduta ético para o servidor torna-se condição para o desenvolvimento”.</p>






        <br><br>

        <!-- SCRIPT LIGHTBOX -->
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
        <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a href="Topico04.3.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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