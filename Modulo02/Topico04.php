<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
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

                        <h2 class="Titulo">Modelos de Ética</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar exemplos de modelos de ética nos planos internacional, latino-americano e nacional.</p>

                        <p class="SubTitulo"> Modelos de ética multinacionais: A OCDE</p>
                        <hr>

                        <p>A confiança no Governo é vital em qualquer sociedade democrática, sobretudo, quando os cidadãos esperam que seus representantes sirvam a pluralidade de interesses com equidade e administrem os recursos de forma correta. Assim, a ética se transforma num suporte indispensável para garantir esta confiança. Entretanto, nos países membros da OCDE manifestou-se, a partir da década de noventa, um certo declive na credibilidade dos governos, com as correspondentes consequências negativas em sua legitimidade e na de suas instituições.</p>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Atualmente, os países componentes da OCDE são: Alemanha, Austrália, Áustria, Bélgica, Canadá, Chile, Coreia, Dinamarca, Espanha, Estados Unidos, Eslovênia, Estônia, Finlândia, França, Grécia, Hungria, Irlanda, Islândia, Israel, Itália, Japão, Letônia, Luxemburgo, México, Noruega, Nova Zelândia, Países Baixos, Polônia, Portugal, Reino Unido, República Checa, Suécia, Suíça e Turquia. O Brasil está categorizado como país-chave em termos de colaboração global (<a href="http://www.oecd.org/" target="_blank">www.oecd.org</a>).</p>
                            </div>
                        </div>

                        <p>O conselho da OCDE percebeu a gravidade desse problema e reagiu analisando as possíveis causas que provocavam essa desconfiança. Em abril de 1998, a Junta do Conselho solicitou que fosse elaborado um informativo nos países membros sobre a conduta ética no serviço público e a prevenção da corrupção. O órgão encarregado de cumprir essa tarefa foi o Comitê de Gestão Pública da OCDE (em inglês, PUMA). Dois anos depois, nos dias 26 e 27 de junho de 2000, foi apresentado o relatório final da Junta do Conselho da OCDE.</p>
                        <p>Assim, o PUMA começou a trabalhar e a colaborar com os governos dos países membros na supervisão do ambiente no setor público com a finalidade de conservar marcos efetivos para fomentar a integridade e prevenir a corrupção entre os servidores públicos.</p>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>Obtenha mais informações com a leitura do documento OECD,<em> Trust in Government: ethics measures in OECD countries</em>, Washington: OECD, 2000.</p>
                            </div>
                        </div>

                        <p>A ética tornou-se, assim, um importante assunto de interesse público que refletiu na variedade de tentativas de “limpar” a vida pública, incluindo a revisão dos sistemas de gestão e comportamento dos funcionários. Tal processo de limpeza, naturalmente, exige uma combinação de diversos mecanismos e agentes desse processo, que precisam estar inter-relacionados, a fim de garantir o seu êxito. Ou seja, o PUMA reconhece que a prevenção da corrupção é tão complexa quanto a própria corrupção. De forma que se faz necessário tanto identificar o corrupto como também “os mecanismos e as estruturas de ação que conduzem à corrupção”.</p>
                        <p>A proposta de infraestrutura ética da OCDE integra oito componentes: o compromisso político, o marco legal, os mecanismos de responsabilidade, os códigos de conduta, a socialização profissional, as condições do serviço público, os órgãos de coordenação e participação e votações públicas. Por sua vez, estes componentes são agrupados em outras três funções principais: Controle, Orientação e Gestão.</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Controle</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> O Controle é possível de ser alcançado mediante algumas iniciativas como, por exemplo, os seguintes componentes:</p>
                                           <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  <strong>Um marco legal que permita a investigação e acusação independentes:</strong> um marco legal está relacionado com a garantia de que a ética seja vigente e, em caso de não haver ainda sido criado, buscar fazê-lo, como alguns países têm procedido.</p>

                                        <!-- Exemplo -->
                                        <div class="ExemploCaixa">
                                            <p class="ExemploTitulo"> Exemplo</p>
                                            <div class="ExemploTexto">
                                                <p>No Japão, a lei sobre a ética dos servidores públicos (1999) exige que o gabinete estabeleça um novo código de conduta para proibir que os servidores públicos recebam presentes por parte de companhias privadas que estejam sob sua jurisdição. Por seu turno, a Polônia adotou uma lei que exige que todos os funcionários públicos declarem seus ativos financeiros, propriedades e capital de negócios.</p>
                                            </div>
                                        </div>


                                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Mecanismos adequados de responsabilidade e participação:</strong> Os mecanismos de prestação de contas devem estar alertas, a fim de evitar ações antiéticas e cortar o seu fluxo de ação. Entre os mecanismos, para além do procedimento legal, podemos citar: o procedimento administrativo, as auditorias, as avaliações de desempenho. Outros mecanismos podem ser externos à organização como, por exemplo, a vigilância de comitês parlamentares. Um outro fator importante e imprescindível é a participação cidadã. As denúncias da população são a melhor garantia de que existe uma vigilância e acompanhamento da conduta dos funcionários.</p>

                                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Votações públicas:</strong> a participação e a votação pública são poderosos fatores desanimadores da corrupção e das condutas indevidas no setor público. Entretanto, estes dependem, em grande medida, de que o marco legal permita o acesso à informação.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Orientação</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Os seguintes elementos podem auxiliar na boa consecução da orientação:</p>

                                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Compromisso bem articulado dos líderes políticos:</strong> os esforços para fomentar a ética no serviço público podem ser totalmente em vão e inútil sem o apoio e compromisso político firme. As tentativas para melhorar a ética no setor público nos países da OCDE emanam dos níveis políticos mais altos. As lideranças políticas desempenham papéis muito importantes nessa questão e deveriam ser um exemplo positivo.</p>

                                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Códigos de conduta que determinem que os valores e normas sejam aplicáveis:</strong> os códigos de conduta possuem um papel vital no estabelecimento das normas de comportamento esperadas, particularmente, nos governos (mais em particular ainda essa força normativa está presente nos países componentes da OCDE). Alguns países aplicam um código de conduta geral para o serviço público e, em outros casos, os códigos são estabelecidos para cada organismo.</p>

                                        <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Mecanismos ou atividades de socialização profissionais tais como a educação e formação:</strong> o conteúdo dos códigos de conduta pode tornar-se incipiente caso não se comunique e seja introspectivo de maneira adequada. Tal capacitação será chave para que os servidores aprimorem sua consciência no desenvolvimento dos dilemas éticos.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Gestão </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Sobre gestão, podemos citar o seguinte:</p>

                                        <p>A nova gestão pública resgata e introduz uma série de novos valores. Não se pode mais considerar a administração apenas como umas simples estrutura e instrumento executor de ordens políticas, mas se reorienta a atividade administrativa para a consecução de resultados, em direção a uma cultura com qualidade de serviço, a maiores níveis de autonomia e de responsabilidade dos gestores e servidores. Essa nova situação apresenta o papel da cultura organizacional e da ética pública como instrumentos de controle das burocracias políticas.</p>

                                        <p>Em certo sentido, a administração pública repousa, por um lado, nos princípios do modelo racional weberiano (burocracia), ou seja, é dentro do “paradigma weberiano que a discussão da ética se efetiva, uma discussão própria à racionalidade da vida moderna”. E, por outro, na incorporação de novos valores representados pela realização prática de ações eficazes e eficientes que possam responder às necessidades sociais de forma satisfatória, com a qualidade adequada e, ainda, com o menor custo possível.</p>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <!-- Accordion 03 -->
                        <!-- FIM Accordion -->



                        

                                    </div>
                                </div>
                                <!-- FIM do Tópico 3 -->
                            </div>
                        </div>

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
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.2.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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