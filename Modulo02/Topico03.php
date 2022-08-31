<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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

                        <h2 class="Titulo"> Antecedentes da Ética no Serviço Público</h2>
                        <hr>

                        <p><strong>Objetivos:</strong> -Expor a importância dos códigos de ética no serviço público;</p>
                        <p>- apresentar um histórico do surgimento e a necessidade dos códigos e institutos voltados para o fomento da ética no serviço público.</p>

                        <p>Pode-se afirmar que ética pública já existe desde a antiguidade, com o intuito de formar a conduta das pessoas de governo. Ela estava vinculada aos assuntos de governo, tanto na formação dos governantes quanto na prática política, de modo a fomentar as ações acompanhadas de valores que pudessem beneficiar os governados.</p>
                        <p>Apesar de um certo descuido a que tem sido submetido nas últimas décadas, o tema da ética pública tem reaparecido com força e se tornado um tema de fundamental análise entre os principais estudiosos de governo e administração pública. Se pudermos delimitar um marco histórico, podemos dizer que o compromisso da ética no âmbito público recobra importância por volta dos anos setenta, nos Estados Unidos, na raiz do famoso e, possivelmente, o maior escândalo político americano conhecido como “Watergate”, que, por tamanha crise institucional, terminou com a renúncia do Presidente Richard Nixon. Esse fato demonstrou ao público que alguns governantes e funcionários praticavam condutas imorais e antiéticas. Foi, então, que se criaram mecanismos para o fomento da ética no setor público como, por exemplo, a <a href="#" data-toggle="tooltip" data-placement="top" title="Office pf Government Ethics - Em tradução aproximada, algo como Escritório de Ética no Governo">OGE<i class="fa fa-search-plus"></i></a>.</p>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Para maiores informações, sugerimos o site deste organismo: <a href="https://www.oge.gov/" target="_blank">www.oge.gov</a>, que foi instituída pela lei de Ética no Governo (Ethics in Government Act., EGA), em 1978.</p>
                            </div>
                        </div>


                        <p>No Brasil, também temos alguns atos do poder público que visam orientar o exercício ético do servidor público.</p>

                        <!-- Exemplo -->
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>No ano 2000, tem-se a proposta do “Código de Conduta da Alta Administração Federal”. Em 2003, a criação da “Comissão de Ética Pública”. Além disso, temos o Sistema de Gestão Ética do Poder Executivo Federal, instituído em 2007, embora desde 1994 o tema “ética” esteja na agenda do governo brasileiro, visto que já se nota a presença de Comissões de Ética Setoriais em cada um dos órgãos federais, cuja função precípua é dar publicidade ao Código de Ética Profissional do Servidor Público.</p>
                            </div>
                        </div>



                        <p>No entanto, uma verdadeira mudança na cultura das organizações públicas não se reduz apenas a uma simples criação ou modificação das normas e leis, mas é preciso considerar, também, o papel da transmissão e da assimilação dos valores éticos. A gestão ética no serviço público não se obtém apenas pelo controle institucional – embora esse elemento também esteja presente, no sentido de ajustar o trabalho do servidor e o papel da vigilância dos mais diferentes níveis de autoridade, a fim de alcançar o respeito às normas e, se necessária, a aplicação de sanções por seu não cumprimento –, mas é preciso promover a integridade e a conduta ética do serviço público, a fim de que cada pessoa possa desenvolver seu trabalho sobre bases de regras claras de operação e de comportamento.</p>
                        <p>Desse modo, a codificação de uma ética pública deverá cumprir uma dupla missão, como forma de expressar as aspirações da sociedade no que diz respeito à ação pública e, por sua vez, como meio de controle da adequação das condutas aos princípios do serviço público. Daí a importância dos chamados códigos de ética. Entre outras coisas, eles servem para:</p>

                        <ul class="none">
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Enunciar os valores que presidem a atividade de uma instituição (no nosso caso, da coisa pública);</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Determinar o grau de responsabilidade que o cumprimento desses valores representa para os servidores públicos;</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Definir os meios para alertar a administração pública e os cidadãos sobre o surgimento de condutas não éticas, a fim de poder corrigi-las.</li>
                        </ul>

                        <p>Com isso, a nova gestão pública resgata e introduz uma série de novos valores. Já não se considera a administração como um simples instrumento executor das ordens políticas. A atividade administrativa está reorientada para a consecução de resultados, para uma cultura da qualidade do serviço e para maiores níveis de autonomia e responsabilidade dos gestores e servidores.</p>
                        <p>De forma que a ética tem sua importância por si mesma, não está situada no foco de atenção dos investigadores e estudiosos dos assuntos públicos, por conta de se partir da crença de que aqueles que ocupam cargos públicos ou algum tipo de representação popular são pessoas respeitáveis per se, ou seja, que a ética seja algo inerente a esses agentes públicos.</p>
                    
                    
                        <!-- mouse over -->
                        <p>Apesar disso, no ano de 1976, um grupo de trabalho sobre ética que pertencia à <a href="#" data-toggle="tooltip" data-placement="top" title="IASIA - International Association of Schools and Institutes of Administration iasia.iias-iisa.org.">Associação Internacional de Escolas e Institutos de Administração Pública<i class="fa fa-search-plus"></i></a>, organismo que reúne diretores de escolas e institutos de administração pública das mais diversas partes do mundo, acordou entre si solicitar a vários centros acadêmicos que incluíssem a ética como assinatura essencial para a formação dos gestores públicos. No ano de 1979, essa mesma associação concluiu um estudo que visava conhecer o que estava sendo realizado nas variadas instituições responsáveis pela formação e pelo aperfeiçoamento de funcionários públicos. Um ano depois, os resultados desse estudo indicaram que a ética e os valores, como área de conhecimento, não estavam inseridos nas escolas e institutos de administração pública. Em seguida, em 1981, a IASIA convocou uma reunião para tratar amplamente do comportamento ético e da responsabilidade no serviço público. Nessa reunião, ficou acertado que seriam desenvolvidos programas de ética para funcionários públicos e se insistiu na necessidade de reforçar os códigos de éticas e as medidas anticorrupção.</p>
                    
                        <!-- mouse over -->
                        <p>Assim, no ano de 1983, foi celebrado em Washington (EUA), o primeiro Congresso Internacional de Ética Pública, organizado pelo Escritório de Ética Pública e pela então existente <a href="#" data-toggle="tooltip" data-placement="top" title="United States Information Agency – USIA">Agência de Informação dos Estados Unidos<i class="fa fa-search-plus"></i></a>, que, em 1999, foi reestruturada e passou a ser chamada de <i>Under Secretary for Public Diplomacy and Public Affairs</i>. Esse congresso foi o primeiro de alcance mundial, reunindo mais de oitenta participantes de cinquenta e cinco países dos cinco continentes.</p>
                    
                        <!-- mouse over -->
                        <p>Mais adiante, em 1987, também nos Estados Unidos, a <a href="#" data-toggle="tooltip" data-placement="top" title="NASPAA – National Association of Schools of Public Affairs and Administration">Associação Nacional de Escolas de Administração Pública<i class="fa fa-search-plus"></i></a> determinou que os programas de formação das escolas e institutos de administração pública promovessem os valores, os conhecimentos e as capacidades dos servidores públicos em prol de uma atenção administrativa ética e eficaz. Um ano depois, os diretores de um grupo de trabalho da NASPAA, dedicado ao ensino de ética na administração pública, elaboraram um informativo em que foi solicitado que os programas universitários de preparação para a função pública incluíssem, para todos os alunos, conteúdos de ética e que a ética pública fosse uma disciplina obrigatória e autônoma que se projetasse, além disso, sobre outras matérias também obrigatórias.</p>
                    
                        <!-- mouse over -->
                        <p>A partir dessas e de outras iniciativas, diversos Estados começaram a criar seus códigos de condutas, normas éticas e mecanismos de controle. Ao final dos anos noventa, o escritório de gestão pública da <a href="#" data-toggle="tooltip" data-placement="top" title="Organisation for Economic Cooperation and Development – Organização para a Cooperação e Desenvolvimento Econômico">OCDE<i class="fa fa-search-plus"></i></a> elaborou um estudo sobre a situação ética em alguns países. A informação recebida permitiu elaborar um desenho de uma “estrutura ética”, na qual se propôs um modelo para a gestão pública.</p>
                    
                        <p>Durante a década de noventa, foram realizadas conferências internacionais sobre ética no governo, sempre em caráter bianual. Em 1997, aconteceu, em Lima (Peru), a Oitava Conferência Internacional de Ética no Governo. Em 1999, foi realizada, em Durban (África do Sul), a Nona Conferência. Em 2001, a Décima, na cidade de Praga (República Checa), enquanto que no ano de 2003, realizou-se, em Seul (Coreia do Sul), a Décima Primeira Conferência.</p>
                        <p>Para além desse movimento, surgido nos Estados Unidos, também outras nações do mundo começaram a criar organismos responsáveis para o fomento da ética. A Austrália criou o Conselho Assessor de Gestão e a Comissão de Proteção de Mérito no Serviço Público Nova Zelândia, a Comissão de Serviços do Estado. Na Finlândia, foi criado um grupo de trabalho para estimular a ética, ligado ao Ministério da Fazenda.</p>
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
        <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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