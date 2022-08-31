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

                        <h2 class="Titulo"> Concepções Éticas</h2>
                        <hr>

                        <p><strong>Objetivo:</strong> Apresentar alguns sistemas éticos e seus principais teóricos.</p>

                        <p>Ao longo da história, foram formulados diversos sistemas éticos. Os primeiros filósofos da Grécia Antiga se colocavam a pergunta, antes de tudo, pelo ser de todas as coisas, ou seja, pela sua “verdadeira realidade” ou sua “autêntica natureza”, uma vez que muitas vezes as “aparências enganam”. De modo que alguns deles não demoraram a impor-se a pergunta:</p>

                        <!-- Dúvida  -->
                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <div class="DuvidaTexto">
                                <p>Em que consiste a virtude (areté) do homem e qual a verdadeira noção do bem? </p>
                            </div>
                        </div>


                        <p>Vejamos, brevemente, alguns dos sistemas éticos.</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Sócrates</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura"><strong>Figura 01: </strong>Estátua do Filósofo grego, Sócrates</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 01 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <!-- Figura 01 - End -->

                                        <p>Ainda que esse filósofo não tenha deixado nada escrito, os testemunhos de vários escritores da época nos permitem reconstruir algumas das principais contribuições que a ele são atribuídas. Uma delas é a ideia de que a excelência humana é caracterizada, antes de tudo, como uma atitude de busca constante pelo verdadeiro bem. Isso porque somente quem chega a conhecer tal bem é quem pode colocá-lo em prática. Assim, o primeiro passo para se alcançar a perfeição moral é o abandono de atitudes dogmáticas e céticas e a consequente adoção de uma atitude crítica que somente se deixa convencer pelo melhor argumento [racional].</p>

                                        <p>É por nós conhecida a famosa frase “conhece-te a ti mesmo”, adotada por Sócrates, em sua juventude, ao lê-la na fachada no oráculo de Delfos. Podemos dizer, ainda, que, para Sócrates, o objetivo último da busca da verdade não está na mera satisfação da curiosidade, mas na assimilação de conhecimentos para poder agir bem e para o bem, alcançando, desse modo, a excelência humana. Por esse motivo, sua ética é considerada como uma ética racionalista.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Platão </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s"  class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura"><strong>Figura 02: </strong>Platão</p>
                                            </a>
                                        </div>
                                        <!-- Imagem 02 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <p class="TituloFigura"><strong>Fonte: </strong>Google</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Figura 02 - End -->

                                        <p>Discípulo e herdeiro do pensamento socrático, Platão sustenta que a verdadeira moral é um conhecimento que deve conduzir, ao mesmo tempo, a vida do indivíduo e a vida da comunidade, ou seja, a vida do cidadão e da pólis (“cidade” em grego).</p>
                                        <p>Ele propõe um modelo ideal, uma utopia, um desenho perfeito elaborado pela razão, destinado a servir de ponto de referência para todos aqueles que pretendam reformar os costumes e as instituições com o objetivo de melhorar a vida humana individual e social. Tal descrição está exposta em sua obra intitulada <em>A República</em>, na qual pretende demonstrar sua visão de justiça. Para ele, a virtude da justiça se apresenta como virtude que acolhe e harmoniza todo o conjunto da cidade e todos os elementos que conformam o indivíduo. Platão afirma que aqueles que se encontrarem de cheio com o <em>bem</em> em si, adquirirão um tipo de conhecimento superior, uma ciência do bem, que os capacitará de tal forma a governar com retidão e justiça nos assuntos da <em>pólis</em>-cidade. Talvez uma das frases mais marcantes da obra platônica aqui citada seja esta:</p>

                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"Ora, a maior punição no caso de alguém que não deseja governar é ser governado por alguém pior do que ele próprio."</p>
                                            <footer class="blockquote-footer text-end">(PLATÃO, 2005, p. 63.)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->
                                        
                                        <p>Daí a importância defendida por Platão de que o verdadeiro cidadão é aquele que se interessa e cuida dos interesses da cidade, da coletividade, e não apenas de seus próprios interesses e necessidades. Como o indivíduo não consegue, por si mesmo, aproximar-se da perfeição, ele precisaria do Estado – ou Comunidade Política – para construir-se e desenvolver-se. Em outras palavras, “o homem é bom enquanto bom cidadão”.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Eudemonismo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Eudemonismo do grego antigo <em>εὐδαιμονισμός</em>. Trata-se de uma doutrina filosófica que assume a felicidade (<em>eudaimonia</em>, em grego) como fundamento e princípio para uma vida moral. Nesse sistema, a felicidade ocupa o lugar central e influencia diretamente todo agir humano. Esse sistema compreende a felicidade como uma “satisfação espiritual duradoura”, que seria uma espécie de estado permanente de calma e de contentamento. Como adiantamos, o filósofo grego Aristóteles sustentava essa tese e chegava a asseverar que o comportamento ideal estava assentado nas práticas que conduziam o indivíduo ao objetivo final, que seria esse alto nível de felicidade ou bem-estar. A felicidade não seria, em Aristóteles, um estado subjetivo, mas um modo de vida, em que se exercem determinadas virtudes.</p>
                                        <p>Com base nessa sua concepção, ele considera que a moral do cidadão individual se realiza da melhor maneira, à medida que ele busca – enquanto realiza seus interesses – os interesses do Estado. Isso quer dizer que a moral da pólis, da cidade, e a moral individual não podem ser concebidas de modo separado, isto é, a moral individual não se dá à margem da defesa da promoção dos interesses do coletivo. A ética, nesse sentido, não pode estar desvinculada da política e o mais alto bem individual, a felicidade, só é possível em uma pólis cujas leis são justas.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion 03 -->

                            <!-- Accordion 04 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>hedonismo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Etimologicamente, esta palavra pode significar “sistema de prazer”. Nesse sistema, o prazer é o valor supremo ao qual todos os outros valores estão subordinados. Estipula que existe apenas um bem para o ser humano, que é o prazer e apenas um mal que é a dor. Portanto, de modo muito resumido, o hedonismo pauta a conduta humana, visando à satisfação do prazer e à fuga da dor. Esta seria, consequentemente, a noção de vida feliz para esse sistema ético. No entanto, não se trata de um prazer pelo prazer, como uma proposta defensora de um tipo de libertinagem. Na realidade, o hedonismo propõe que se evitem os excessos, sofrimentos e desgastes. Para o hedonismo, a virtude está na disposição da alma em amadurecer os desejos a ponto de saber escolher os que mais lhe conferirão o maior gozo, alegria, a fim de obter o máximo de prazer.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 04 -->

                            <!-- Accordion 05 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Estoicismo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A ética estoica traz em si o mesmo ponto de partida das demais escolas gregas clássicas: a busca da felicidade. Esta escola leva esse nome por ter se originado nos pórticos (<em>stoá, </em> em grego) de Atenas e tem por fundador Zenão de Cítio (333 a 263 a.C.).</p>

                                        <p>A ética estoica pode ser resumida na seguinte expressão: “suporta e abstém”. Para o estoicismo, o bem supremo consiste em agir conforme a virtude e esta, por sua vez, é racional, portanto, trata-se de buscar agir de acordo com a razão. A virtude mais alta e cara ao estoicismo é a chamada ataraxia, que quer dizer, a imperturbabilidade, a ausência de perturbação, tranquilidade. Esse estado de perfeita paz da alma se alcança, conforme propõe o estoicismo, mediante a libertação das paixões. Para os estoicos, essa libertação ocorre com a virtude da justiça (julgar corretamente) e da fortaleza (quando o amor à virtude ajuda a suportar os males e as adversidades). O bem supremo dos estoicos é viver segundo a natureza, ou seja, de acordo com a razão, com a consciência do próprio destino e da função no universo, não se deixando conduzir pelas paixões ou afetos interiores ou, mesmo, por coisas exteriores.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 05 -->

                            <!-- Accordion 06 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>utilitarismo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Esta doutrina defende que a felicidade (ou bem supremo) para a qual deve tender o ser humano deve estar baseada no sentido do “útil”. Em termos práticos, trata-se de uma espécie de maximização da felicidade, que busca obter o maior proveito de todos os atos. Por esse motivo, tal sistema tem sido compreendido como uma forma renovada do hedonismo clássico.</p>
                                        <p>Desse modo, o utilitarismo pode ser sintetizado na sentença: “é bom tudo o que é útil”, pois a utilidade passa a ser o seu princípio moral, a fim de obter a maior felicidade possível. Assim entendida, a conduta humana se dirige para um sentido de aproveitamento imediato de todas as ações. Como asseverou, certa vez, um tratadista de Direito Penal, em seu livro Sobre os <em>delitos</em> e as penas:</p>

                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"A máxima felicidade possível para o maior número possível de pessoas."</p>
                                            <footer class="blockquote-footer text-end">(BECCARIA, 1764, p.183)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->

                                        <p>Assim, uma vez que a ética utilitarista se preocupa com o maior proveito que se possa extrair das suas ações, podemos dizer que se trata, pois, de uma ética do “sentido prático”.</p>
                                        <p>Assim, até mesmo alguma ação que tenha um caráter espiritual, para o utilitarismo, traz em seu bojo um meio de se alcançar alguma outra finalidade mais útil e prática, como um conforto e tranquilidade pessoal. Ou um ato de filantropia e de abnegação que, no seu fim, busca ostentar uma boa figura pública e receber admiração. Nesse sentido, é uma doutrina consequencialista, pois sustenta que as ações têm valor em relação à bondade ou à maldade que trazem. Seria como se se fizesse um cálculo dos benefícios que uma ação acarretará e se estes serão maiores que os malefícios. Caso se confirme essa “aritmética dos prazeres” (Jeremy Bentham), a ação poderá ser tida como útil, boa e aceitável. O utilitarismo é, pois, a corrente filosófica mais ampla do pragmatismo. Seus principais representantes foram Jeremy Bentham (17428-1832) e John Stuart Mill (1806-1873).</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 06 -->

                            <!-- Accordion 07 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong>Sociologismo</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>A moral sociológica, criada por Auguste Comte e desenvolvida por Emile Durkheim, trata de reduzir a moral ao estudo dos costumes, leis e instituições humanas. Nesse sentido, essa escola entende que não existe o bom ou mau propriamente dito, senão que fala mais naquilo que estaria ou não conforme o modo de agir de determinado meio social. Assim, para o sociologismo, é a sociedade que faz o homem.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 07 -->

                            <!-- Accordion 08 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item08">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        <strong>Ética kantiana</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p>Immanuel Kant foi um filósofo alemão que viveu entre os anos 1724 e 1804. Possivelmente, o mais famoso e importante entre os filósofos modernos. Sua teoria consiste em empreender uma refutação das teses que lhes eram anteriores, em particular, da doutrina moral de tipo empirista, como também das baseadas na metafísica ou nas tendências naturais do homem. Visa a demonstrar a necessidade de que a teoria da conduta repousa sobre considerações de ordem racional e validez apriorística, ou seja, anterior à experiência. Kant defende que a ética deve ser válida para todos os seres humanos e que o ser humano, por seu turno, deve se dirigir pela razão. Consequentemente, o nível moral deve estar assentado em um horizonte superior ao dos bens empíricos, num plano racional e a <em>priori</em>.</p>
                                        <p>A ética de Kant é considerada</p>



                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"A mais perfeita expressão da ética moderna."</p>
                                            <footer class="blockquote-footer text-end">(VASQUEZ, 2001, p. 283.)</footer>
                                        </blockquote>

                                        <!-- Fim Citações -->

                                        <p>Para ele, o fundamento da moral e do agir ético é puramente respeito ao dever. Isso quer dizer que uma pessoa adquire valor moral, não tanto por aquilo que faz, mas pela intenção com que faz aquilo que faz. Ou seja, essa tese leva em conta o aspecto interno da atividade do homem, referindo-se ao valor da ação com relação à qualidade dos propósitos. Desse modo, o objeto da moral kantiana é o que chama de <em>boa vontade</em>, que significa, resumidamente, uma reta intenção para agir bem. Kant compreende a boa vontade como “boa em si mesma”.</p>
                                        <p>Dito de outro modo, em Kant tem-se a noção de que não existe o bem em si, mas que cada um o cria mediante a boa vontade (<em>a priori</em>). É boa vontade o agir por puro respeito ao dever, sem razões outras que não seja o cumprimento do dever ou perceber-se sujeito à lei moral (razão, consciência). Por este motivo, Kant compreende a boa vontade como absoluta e universal.</p>

                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"A benevolência é a satisfação com a felicidade (bem-estar) dos outros; a beneficência, porém, é a máxima de fazer a felicidade dos outros o próprio fim, e o dever a este correspondente consiste em ser o sujeito constrangido por sua razão a adorar esta máxima como uma lei universal."</p>
                                            <footer class="blockquote-footer text-end">(KANT, 2008, p. 296.)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->

                                        <p>Existe, ainda, uma expressão propriamente da filosofia kantiana que é o <em>imperativo categórico</em>. Esse é um princípio que entende que a conduta do agir de uma pessoa seja tal que possa ser permitida e realizada por qualquer outra pessoa. Esta é a noção kantiana de igualdade moral. É <em>imperativo</em> porque tem a ver com a ideia de ser um mandato ético ao qual se deve obedecer e <em>categórico</em> porque não está condicionado a nenhum outro princípio. Uma das principais fórmulas sob as quais se apresenta o imperativo categórico kantiano é a seguinte:</p>

                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"Age de tal maneira que a máxima de tua ação possa se converter em lei universal."</p>
                                            <footer class="blockquote-footer text-end">(KANT, 2004, p.31)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->

                                        <p>Ou ainda:</p>


                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"Age de tal modo que possa considerar a ti mesmo e aos demais, como fim, não como meio."</p>
                                            <footer class="blockquote-footer text-end">(KANT, 2004, p.31)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->

                                        <p>Por isso, a ética kantiana não pressupõe ou determina este ou aquele ato ou comportamento, mas estipula, de um modo universal, como deveria ser a conduta.</p>
                                        <p>Um outro aspecto ainda determinante na ética kantiana e seu imperativo categórico é que ele confere ao indivíduo uma autonomia completa. O ser humano deve agir por si mesmo, de acordo com o dever emanado de sua própria razão. Deve construir, por vontade própria, as formas de sua conduta. Como conclui em sua obra <em>Crítica da razão prática</em>:</p>

                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"Duas coisas enchem o ânimo de admiração e veneração sempre novas e crescentes, quanto mais frequentemente e com maior assiduidade delas se ocupa a reflexão: O céu estrelado sobre mim e a lei moral em mim."</p>
                                            <footer class="blockquote-footer text-end">(KANT, 2004, p. 183.)</footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div><br><br>
                            <!-- Fim Accordion 08 -->
                            <!-- FIM Accordion -->






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