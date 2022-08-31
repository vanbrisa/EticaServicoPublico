<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

                       
                                
                                    

                                        <!-- Título do Tópico 1 -->
                                        <h2 class="Titulo"> Introdução à Ética</h2>
                                        <hr>

                                        <p><strong>Objetivo:</strong> Contextualizar a ética como parte da história humana.</p>

                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"O homem é um ser que não tem garantido de antemão seu próprio ser, mas deve conquistá-lo por empenho de sua própria liberdade."</p>
                                            <footer class="blockquote-footer text-end">(OLIVEIRA, 1993, p.11)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->

                                        <p>O estudo da ética pertence primariamente à filosofia, mais em particular, ao seu campo de conhecimento denominado “filosofia moral”, “filosofia prática” ou, ainda, “axiologia” (teoria dos valores), pois se ocupa do agir do ser humano, suas escolhas, bem como dos meios utilizados para alcançá-las. Por isso, a ética contempla muitos aspectos do agir humano. Muito provavelmente já utilizamos essa palavra, ou mesmo a tenhamos escutado por outras pessoas. Às vezes, associamos-na a determinados tipos de comportamentos como, por exemplo, aquelas condutas que consideramos corretas e dignas de aprovação, contrastando com outros tipos de comportamentos que reputamos como indignos ou recusáveis. Desse modo, o conteúdo da palavra ética está estreitamente ligado a juízos que constantemente fazemos sobre a correção ou a incorreção das ações humanas, ou sobre a noção de certo e errado. Nesse sentido, a ética pretende conferir ao ser humano conhecimento que lhe permite saber eleger corretamente cada ato que venha a realizar.</p>

                                        <p>A esse respeito, o filósofo grego Aristóteles (384-322 a.C.) escreveu em sua obra Ética a Nicômaco:</p>


                                        <!-- ********** Citações *************-->
                                        <blockquote class="bd-callout bd-callout-success">
                                            <p class="mb-0">"a excelência moral também está ao nosso alcance, da mesma forma que a deficiência moral. Com efeito, onde está ao nosso alcance agir, também está ao nosso alcance não agir, e onde somos capazes de dizer ‘não’, também somos capazes de dizer 'sim'."</p>
                                            <footer class="blockquote-footer text-end">(ARISTÓTELES, 2001, p. 57)</footer>
                                        </blockquote>
                                        <!-- Fim Citações -->

                                        <p>Isso significa que, para esse filósofo, tanto a virtude quanto o vício estão em nosso poder. Fazer ou não fazer o bem e o correto são questões de conhecimento do que sejam o bem e o correto a se fazer, de modo que a posse desse conhecimento trabalha em conjunto com a escolha por agir de uma ou de outra maneira. Aristóteles acreditava, afinal, que o comportamento entendido como ideal era uma prática a ser perseguida, pois conduziria o indivíduo e a sociedade ao seu objetivo final de felicidade.</p>

                                        <p>Esse estudo dos atos humanos indica que tais ações podem ser valoradas de diversos modos, isto é, pode-se atribuir-se a elas algum <a href="#" data-toggle="tooltip" data-placement="top" title="Bem e mal, certo e errado, correto e incorreto, admirável e deplorável">juízo de valor<i class="fa fa-search-plus"></i></a>, se realizadas pela vontade e liberdade da pessoa. O ato humano que não seja realizado por meio de sua vontade, e em que esteja ausente sua liberdade, não entra no estudo do campo da ética, pois não pode ser considerado um exercício consciente do ser humano. Temos, portanto, que a ética está intimamente relacionada ao binômio ação e liberdade. Este, por seu turno, liga-se, ainda, às noções de escolha e de responsabilidade.</p>

                                        <p>De maneira muito sintética, é possível dizer, também, que ética é o estudo sistemático da moralidade. Por sua vez, moralidade é o código (ou códigos) <a href="#" data-toggle="tooltip" data-placement="top" title="Aceitável ou proibido dentro de um grupo e/ou época particular">normativo moral<i class="fa fa-search-plus"></i></a> Tais códigos normativos ou comportamentais são reconhecidos pela comunidade numa época específica. Por exemplo, a lei é um tipo de código, um código legal que representa um mínimo aceitável de comportamento de um grupo particular (sociedade). De forma que, baseados na razão, o homem e as sociedades humanas foram estabelecendo valores fundamentais, sejam eles individuais ou sociais. A partir daí, foram derivados os deveres morais que, em geral, coincidem com os mesmos valores assumidos pelos sistemas jurídicos. Nesse sentido, os valores éticos aparecem consignados no direito, pois, no lugar de estarem situados em lugares diferentes, a ética e o direito estão em conformidade no que diz respeito à busca de uma conduta social desejável.</p>

                                        <!-- Dúvida  -->
                                        <div class="DuvidaCaixa">
                                            <p class="DuvidaTitulo"> Dúvida</p>
                                            <div class="DuvidaTexto">
                                                <p>Por sua etimologia e o modo como são referidas no dia a dia, podem parecer que são a mesma coisa. Em verdade não são, pois suas aplicações e referências trazem diferentes significados. Pode-se complementar dizendo, além disso, que as palavras ética e moral provêm, respectivamente, do grego e do latim.</p>
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



                                    </div> <!-- End page-title -->
                                </div> <!-- End page-title -->

                                <div class="col-md-1"></div>
                            </div> <!-- End row -->

                            <!-- Botões de navegação -->
                            <div class="text-center">
                                <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                            </div>

                        </div> <!-- End main-content -->


                        <!-- FOOTER -->
                        <?php include('layout/footer.php') ?>

                    </div> <!-- DIV MAIN FIM -->

                    <!-- FOOTER JS -->
                    <?php include('layout/js.php') ?>

                    <!-- BOTÃO BACK TO TOP -->
                    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>