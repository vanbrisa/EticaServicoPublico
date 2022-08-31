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

                        <p class="Titulo"> Visão Contemporânea</p>
                        <hr>

                        <p><strong>Objetivo:</strong> Abordar o debate atual sobre ética.</p>

                        <p>Antes de entrar, mais propriamente, na questão da ética no serviço público, convém destacar algumas visões do estudo da ética na contemporaneidade, como forma de apresentar alternativas ou visões novas para o paradigma clássico e moderno da axiologia. Várias são as correntes e pensadores atuais. Em particular, para fins deste estudo, destacamos:</p>


                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Max Scheler (1874 - 1928)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        Um dos principais axiólogos do século XX. Sua principal obra se intitula Ética. Nela, Scheler descreve que o dever não é o que fundamenta o valor, mas, ao contrário, que o valor é que fundamenta o dever. Ou seja, ele defende que existe uma materialidade e objetividade nos valores, o que vai na contrariedade do formalismo kantiano. Segundo Scheler, os valores são conhecidos mediante a intuição, não sendo acessíveis à razão. Desse modo, temos que os valores, para Scheler: são qualidades ideais, isto é, não são reais; são objetivos, ou seja, dão-se independentemente de serem conhecidos; são transcendentes e materiais.

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura"><strong>Figura 03: </strong>Max Scheler</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 03 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Google</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 03 - End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Thomas Nagel (1937-) </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura"><strong>Figura 04: </strong>Thomas Nagel</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 04 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Google</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 04 - End -->


                                    </div>
                                    <!-- fim imagem --> Esse filósofo americano, à diferença das teses precedentes, não busca justificar a ação moral, mas procura explicar porque justificações tipicamente morais são, segundo seus termos, “capazes de nos seduzir”. O cético moral nega-se a ser persuadido por argumentos ou razões morais. Para ele, não basta produzir a crença de que certas proposições são verdadeiras. Uma possível estratégia seja demonstrar que
                                    <div class="col-md-12">
                                        <!-- ********** Citações *************--> <br />
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"tal ceticismo está em radical conflito com as intuições práticas às quais cada um está sujeito e que são suscetíveis de sistematização."</p>
                                            <footer class="blockquote-footer text-end">(NAGEL, 1970, p. 144.)</footer>
                                        </blockquote>
                                    </div>
                                    <!-- Fim Citações -->
                                    <p>Esse autor sustenta que, assim como existem as exigências racionais para o pensamento, também existem as exigências para a ação, sendo o altruísmo uma delas. Nagel entende altruísmo como</p>
                                    <div class="col-md-12">
                                        <!-- ********** Citações *************--> <br />
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"a vontade de agir em consideração do interesse de outras pessoas, sem necessidade de outros motivos ulteriores."</p>
                                            <footer class="blockquote-footer text-end">(NAGEL, 1970, p. 79.)</footer>
                                        </blockquote>
                                    </div>
                                    <!-- Fim Citações -->
                                    <p>Posto que, para Nagel, o altruísmo é uma condição da racionalidade, ele estaria subjacente à ética, não como meramente um sentimento, senão que dependente do reconhecimento dos outros e dependente de ver a si mesmo como um simples indivíduo entre muitos.</p>
                                    <p>De certa forma, Nagel se une à tese de Kant do seu imperativo categórico, no sentido em que procura descobrir exigências para a ação que se aplique ao ser humano, sem nenhuma condição sobre o que quer ou sente, ou seja, sem envolver sentimento ou vontade, mas, apenas, racionalidade. Finalmente, Thomas Nagel sustenta em favor do altruísmo argumentando que os interesses e a felicidade humana têm valor como fins e que tal valor deve ser concebido como algo objetivo, pois assim</p>
                                    
                                        <!-- ********** Citações *************--> <br />
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"significará que os fins são objetos racionais de atenção comum a todos."</p>
                                            <footer class="blockquote-footer text-end">(NAGEL, 1970, p. 97.)</footer>
                                        </blockquote>
                                    
                                    <!-- Fim Citações -->
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Jürgen Habermas (1929 -)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="200" class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura"><strong>Figura 05: </strong>Jürgen Habermas</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 05 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Google</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 05 - End -->

                                        <p>Por seu turno, o filósofo alemão Habermas pretende, também, uma justificação das normas morais, de ordem objetivas e universais. Entretanto, diferentemente de Kant, ele pensa que as argumentações morais devem sair do âmbito da subjetividade e da individualidade, para se instalarem no espaço intersubjetivo, a partir do qual possam abordar a tarefa da justificação da universalidade e da objetividade da moral. Segundo ele, não é suficiente elaborar um ponto de vista moral que assegure a imparcialidade e que as pessoas aceitem adotá-lo enquanto seres livres e iguais.</p>
                                        <p>As argumentações morais, conforme ele, somente são possíveis de serem resolvidas, através do diálogo, como resultado da cooperação. Habermas defende o pluralismo cultural, ou seja, existe uma multiplicidade de perspectivas interpretativas, sendo essa a razão pela qual o significado do princípio de universalização não fica suficientemente esgotado por nenhuma reflexão monológica (pensamento individual). Assim, para universalizar as normas de um modo adequado, não basta uma reflexão pessoal, em que tentamos imaginar um ponto de vista em que todos compartilhariam.</p>
                                        <p>Habermas ensaia fundamentar sua ética através da lógica da argumentação moral. Com isso, a fundamentação da ética só é possível se pudermos observar, previamente, que se produzem de fato argumentações morais – o que ele chama de mundo da vida –, isto é, na vida corrente, cotidiana. Dessa maneira, antes de iniciar a fundamentação, é preciso constatar que os fenômenos morais são produzidos na vida dos seres humanos, que em suas ações comunicativas manifestam pretensões de validade das normas morais. Resumindo, a ética habermasiana é concebida como uma explicação de um certo tipo de fenômeno: a validade das normas e das pretensões de validade que realizamos quando falamos sobre as normas.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion 03 -->








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