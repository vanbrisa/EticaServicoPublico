<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo"> Conceitos Básicos</h2>
                        <hr>

                        <p><strong>Objetivos:</strong> apresentar uma breve etimologia do termo ética; expor definição de ética e moral; demonstrar sua relação com a vida prática do ser humano.</p>

                        <p><strong>Ética</strong> é derivada da palavra grega <em>ethos</em> (έθος), que pode assumir uma diversidade de sentidos. O modo mais usual de emprego desse termo tem sido para indicar “modo de ser”, “caráter”. De modo que caráter pretende significar o conjunto de qualidades e disposições que definem uma pessoa e, ao mesmo tempo, a diferencia das demais. O caráter é adquirido pelo hábito. O hábito, por sua vez, nasce da repetição de atos iguais. Assim, pode-se dizer que das ações passam-se aos hábitos e dos hábitos à vida real. Desse modo, surge o <strong><i>ethos, </i>o modo de ser e agir</strong>, que é definido pelas características que os hábitos deixaram marcados no ser. O ser humano, constantemente, está construindo seu próprio modo de ser e agir, seu caráter, que vai se transformando no <em>ethos</em>, na <strong>morada</strong> habitual do ser.</p>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p><strong>“Morada”</strong> é uma outra possível tradução da palavra <em>ethos</em>.</p>
                            </div>
                        </div>


                        <p>Já a palavra <strong>moral</strong> é proveniente do latim <em>moralis</em>, ou ainda, <em>mor-moris</em>, que quer dizer “costume”, “maneira”, “comportamento próprio”. Ela está relacionada com o ethos no sentido de que é um modo de ser que pode ser adquirido gradualmente, que tem diversas fases de desenvolvimento. Resumidamente, podemos dizer que <em>moris</em> significa, a exemplo do <em>ethos</em>, o modo de ser ou o caráter. No entanto, ao passo que o caráter é adquirido pelo hábito (portanto, no ato de viver), o costume se adquire por repetições não necessariamente intencionais. Desse modo, que a ética tem a ver com o campo de investigação do agir humano, enquanto a moral está relacionada ao objeto dessa investigação. Conforme Adela Cortina (1995),</p>

                        <!-- citações -->
                        <blockquote class="bd-callout bd-callout-success">
                            <p class="mb-0">"a moral está ligada imediatamente à ação e prescreve a conduta, enquanto que a ética (filosofia moral) se pronuncia canonicamente, isto é, conforme as regras."</p>
                            <footer class="blockquote-footer text-end">(CORTINA, 1995, p. 29.)</footer>
                        </blockquote>

                        <p>Portanto, a moral é objeto de estudo da ética.</p>
                        <p>Vejamos, a seguir, um breve quadro de conteúdos da ética e da moral:</p>



                        <table class="table table-striped">
                            <thead>
                                <tr style="background: #44833d;" class="text-white">
                                    <th colspan="2" style="text-align: center;">QUADRO DE CONTEÚDOS</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr style="background: #44833d;" class="text-white text-center">
                                    <th scope="col">ÉTICA</th>
                                    <th scope="col">MORAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Pensamento filosófico;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ciência;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> É teórica, contemplativa, abstrata;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Busca a universalidade.</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Objeto de estudo do pensamento filosófico (deontologia ou teoria dos deveres);</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Objeto de estudo da ciência ética;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Conjunto de normas, princípios e valores com os quais se regula a conduta humana.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Busca descrições e explicações gerais para os problemas morais.</td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> É prática;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Executa-se;</li>
                                            <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Exerce-se.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Reflexão teórica.</td>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Modifica a própria vida.</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Conjunto de teorias acerca das obrigações normativas baseadas na observação dos atos reais da conduta.</td>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Conjunto de deveres, normas e valores.</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Seu caráter prático ou normativo é derivado de seu objeto de estudo, ou seja, da moral.</td>
                                    <td><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>Possui caráter eminentemente normativo e prático.</td>
                                </tr>
                                <tr style="background: #44833d;" class="text-white text-center">
                                    <th colspan="2" style="text-align: center;">AMBAS REALIDADES SÃO CONCOMITANTES</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- fim tabela-->

                    <br>
                    <p>Qualquer tentativa de definição do que venha a ser ética, assim como qualquer outra ciência, é resultado de uma investigação do pensamento sobre um objeto específico. Por isso, a ética é uma ciência normativa da atividade humana ordenada ao bem. Mais que isso, ao bem comum. Ela é uma ciência prática e normativa. Isso quer dizer que se dedica ao estudo dos atos, porém, não no sentido daquilo que estes são, mas como deveriam ser. Por esse motivo, o estudo da ética não ficou restrito ao campo da filosofia, mas dialoga e se faz presente em tantas outras ciências e áreas do saber. Por exemplo, a metafísica, a psicologia, a sociologia, a teologia, a religião e o direito são algumas das ciências e campos do saber afins que se relacionam com a ética, pois cada um desses saberes, a seu modo, refere-se às leis que regem o comportamento humano.</p>

                    <p>Portanto, existe um caráter estritamente antropológico no estudo da ética, uma vez que ela é uma ciência humana, isto é, fundamenta-se no ser humano. Quando se fala em ser humano, é preciso compreender que este é uma totalidade, ou seja, o sujeito da ação moral ou ética é o indivíduo como um todo e não apenas uma parte dele.</p>

                    <!-- Exemplo -->
                    <div class="ExemploCaixa">
                        <p class="ExemploTitulo"> Exemplo</p>
                        <div class="ExemploTexto">
                            <p>Assim, quando alguém comete um roubo ou assassinato, não foi apenas sua mão que praticou tal ato, mas a pessoa em sua integralidade. Isso significa dizer que tantos elementos estão ali presentes: sua vontade, desejo, pensamento, emoções, intencionalidade, motivação, influências, conhecimento e assim por diante.</p>
                        </div>
                    </div>


                    <p>A conduta é uma expressão da pessoa humana em sua integralidade. Desse modo, quando se julga um ato, é preciso valorá-lo em sua profundidade expressa na pessoa. Ao mesmo tempo, a ética considera o sujeito enquanto indivíduo e enquanto membro de uma sociedade com outros indivíduos.</p>

                    <p>Nesse sentido, as estruturas que caracterizam o homem em seu aspecto individual e social entram no jogo das relações sociais. A pessoa humana é, por um lado, um indivíduo, entendido no sentido pleno. Em outras palavras: não dividido, não diluído. Entretanto, é, também, uma realidade que se “auto-possui”, mas que está aberta ao outro, às demais pessoas, formando, assim, um laço de relações comunitárias com o “nós”. Por isso, a ética – ou as teorias éticas – compreendem que a pessoa é complementada, realizada, com a estrutura da comunidade em que está inserida. Em outras palavras, a relação humana se dá a partir de um “eu” que se abre ao “outro eu”, a um “tu”, que se transforma em um “nós”.</p>



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
            <a href="Topico01.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
            <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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