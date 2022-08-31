<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.6';
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

                        <p class="subTitulo"> Outras Experiências Estrangeiras</p>
                        <hr>

                        <p>Em maio de 1997, em documento preparado pela Secretaria para o 13º encontro do Grupo de Especialistas do Programa das Nações Unidas para Administração Pública e Finanças, a ONU estabeleceu uma série de princípios diretores para a ética no serviço público. O documento privilegia sobretudo a ideia de profissionalização do serviço público e sugere que o comportamento ético do servidor aumenta proporcionalmente, à medida que também aumenta o profissionalismo. Isso se reflete imediatamente nos princípios propostos, que visam sempre à incorporação dos valores éticos ao comportamento profissional do servidor público. Destaquemos alguns dos princípios propostos pela ONU:</p>

                        <ul class="none">
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Educação ética:</strong> A permanente educação ética, conforme o documento, é necessária para a internalização de valores, como o respeito pelos outros, a proteção de direitos individuais etc. </li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Integridade pessoal e profissional:</strong> Os valores profissionais devem prevalecer sobre os organizacionais e sobre ordens superiores questionáveis. O servidor deve procurar desenvolver sua autonomia.</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Espírito público:</strong> Os interesses privados devem estar sempre subordinados ao interesse público. Da mesma forma, a promoção do bem comum deve ser o objetivo maior do servidor público.</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Liderança:</strong> Os ocupantes de cargos públicos devem promover e apoiar estes princípios, através da liderança e do exemplo.</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Valorizar os cidadãos como seres humanos:</strong> Os cidadãos não são meros clientes ou consumidores em um mercado.</li>
                        </ul>


                        <br><p class="SubSubTitulo"> O Caso Australiano</p>
                        <hr>

                        <p>Os servidores públicos australianos contam com uma série de documentos oficiais que estabelecem os padrões de conduta ética no serviço. Os valores éticos fundamentais que devem ser afirmados pelos servidores públicos australianos são: pronto atendimento às necessidades do governo; concentração nos resultados; mérito como base para o emprego; altos padrões de probidade, integridade e conduta; forte compromisso com a responsabilidade e a prestação de contas; melhoria contínua das equipes e dos indivíduos.</p>

                        <br><p class="SubSubTitulo"> O Caso Holandês</p>
                        <hr>

                        <p>Na Holanda, o problema da ética no serviço público impôs-se a partir de uma preocupação com a integridade (ou seja, incorruptibilidade, correção e confiabilidade) da administração pública, após uma série de incidentes que envolviam vazamento de informações, transações duvidosas e rumores na imprensa. Essa preocupação com a integridade do serviço público está diretamente ligada ao receio de perda de confiança por parte dos cidadãos, sem a qual a democracia não poderia funcionar. Não por acaso, a questão principal para o governo holandês não é tanto a fraude ou a corrupção em si mesmas, mas o abuso de poder implicado por essas e outras práticas antiéticas e ilegais. Para garantir a integridade de seu serviço público, o governo holandês conta com uma infraestrutura que engloba instrumentos legais, órgãos especiais responsáveis pela ética no serviço público como um todo, mecanismos de prestação de contas e controle interno, códigos de conduta e processos de educação e formação.</p>


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
                <a href="Topico04.5.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.7.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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