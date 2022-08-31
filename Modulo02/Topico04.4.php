<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.4';
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

                        <p class="SubTitulo"> Governança Corporativa</p>
                        <hr>

                        <p>Os códigos de Bom Governo surgiram a partir do conceito de <em>Corporate Governance</em> – Governança Corporativa, que tem como objetivo fundamental melhorar o funcionamento das empresas, tanto interna quanto externamente, buscando eficácia, transparência e responsabilidade perante a sociedade e seus integrantes. O conceito de Governança Corporativa está visivelmente dominado pelas experiências vividas pelos contextos Americanos e Ingleses, concentrando-se, de modo particular, nas empresas que atuam nas bolsas de valores.</p>

                        <p>Podemos dizer que existem diversas vertentes ou maneiras de conceber o Governo Corporativo, seja enquanto</p>

                        <ul class="none">
                            <li><i class="fa fa-chevron-circle-right CorVerdeClaroEstado"></i> A sua organização: que considera essa matéria a partir de sua estrutura orgânica interna das entidades; ou</li>
                            <li><i class="fa fa-chevron-circle-right CorVerdeClaroEstado"></i> A partir de controles societários externos: que são refletidos basicamente no mercado de controle societário.</li>
                        </ul>

                        <p>De uma forma ou de outra, o que se entende por uma boa governança está assentado na maneira como são dirigidas as organizações, a fim de melhorar seu funcionamento externo e interno, na constante busca de eficiência, integridade e transparência, a fim de responder, de maneira cada vez mais adequada, à sociedade, assegurando um comportamento ético organizacional integral.</p>

                        <p>Um dos principais objetivos do governo corporativo é evitar a manipulação de informação como consequência de uma má condução da ética dentro da organização, bem como também o progresso organizacional que vise alcançar as metas e objetivos almejados. Desse modo, que a reforma da governança não é um fim em si mesma, senão um meio para conseguir resultados de políticas públicas eficientes e efetivas, tanto para os cidadãos quanto para as empresas. A boa governança se refere a construir um melhor entorno socioeconômico, onde as pessoas possam viver, aprender e trabalhar; onde os empreendedores possam inovar e comercializar os resultados de sua criatividade e onde as empresas possam investir. <strong>A boa governança tende a se traduzir em um maior bem-estar, qualidade e padrões de vida para todos.</strong></p>








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
                <a href="Topico04.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.5.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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