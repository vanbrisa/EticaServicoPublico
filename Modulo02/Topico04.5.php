<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04.5';
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

                        <p class="SubTitulo"> Padrão Britânico de Conduta na Vida Pública</p>
                        <hr>

                        <p>Buscaremos expor, agora, um breve apanhado sobre a experiência britânica. No ano de 1995, no mês de maio, deu-se a criação e a elaboração de um código de conduta, que incorporou os assim chamados “sete princípios da vida pública” propugnados pelo então primeiro-ministro o juiz Michael Patrick Nolan (1928-2007), conhecido como Lord Nolan. Ele presidiu o Comitê sobre normas de conduta na vida pública no Reino Unido. Tal código, por meio de uma formação continuada e da sujeição ao seu cumprimento a uma análise externa, constituiu-se um grande e importante avanço nos princípios democráticos que deveriam reger o Instituto e garantiu que fatos tão indesejáveis de corrupção financeira e política ocorridos no passado não tivessem oportunidade de se repetir.</p>

                        <!-- Exemplo -->
                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p>Havia pagamento de propina para fazer determinadas perguntas na Câmara, a contratação de ex-ministros por parte de empresas que eles mesmos haviam privatizado, conexão entre doações política e nomeações. Ainda, venda de armas para o Iraque, corrupção de corporações locais, rejeição dos ministros em admitir seus erros, entre outros escândalos e abusos.</p>
                            </div>
                        </div>



                        <p>O Relatório Nolan, como ficou conhecido, é um documento sóbrio que surge em um contexto de deterioração da confiança pública na probidade financeira dos deputados. Apresenta as funções de detectar e discutir problemas em seu serviço público e fruto do trabalho de uma comissão parlamentar destinada a examinar as preocupações a respeito dos padrões de conduta de todos os ocupantes de cargos públicos, inclusive procedimentos relacionados com atividades financeiras e comerciais. Além disso, é utilizado para fazer recomendações com respeito a mudanças nos procedimentos, que possam vir a ser necessárias para garantir altos padrões de decência na vida pública.</p>

                        <p>O relatório sob o ponto de vista da Câmara, o órgão máximo do Estado, estabelece, pela sua própria metodologia, que o exemplo deve vir de cima. Relativamente à Câmara dos Comuns, a Comissão preocupou-se com certas relações que possam interferir no exercício da função parlamentar, de vez que o dever básico do deputado é para com seus eleitores e para com o país. Exemplo disso, é a proibição de qualquer venda de serviços parlamentares a empresas que façam <em>lobby</em> em nome de clientes e a exigência de um maior rigor no que diz respeito ao Registro de Interesses dos Membros do Parlamento.</p>

                        <p>Para que a atividade dos deputados seja mais claramente normatizada, a Comissão propõe que se estabeleça um código de ética, a ser revisto em cada legislatura. O fiel cumprimento do código deverá ser acompanhado por uma pessoa independente, com certa estabilidade e não pertencente aos quadros funcionais da própria Câmara. Esta última, como órgão maior do Estado, escolherá tal pessoa encarregada de zelar pelo cumprimento do código, dando-lhe poderes de investigar e relatar eventuais desvios. Deputados novatos terão a oportunidade de submeter-se a treinamento em assuntos éticos. Mais uma vez, o público deverá estar sempre informado sobre todos esses assuntos.</p>

                        <p>Assim, o Relatório Nolan repete, no seu estudo sobre a Câmara dos Comuns, dos ministérios e dos servidores e das mencionadas entidades semiautônomas, o mesmo procedimento analítico: detecta problemas, propõe códigos de conduta, exige registros e fiscalização independente para o cumprimento das respectivas normas e, por fim, sugere processos de educação e de formação rotineira, de modo que cada um conheça suas obrigações e aprenda a cumpri-las bem.</p>

                        <p>No entanto, todos esses elementos devem se realizar sob o amparo do que ficou conhecido como Sete Princípios da Vida Pública, os quais listamos a seguir.</p>


                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Interesse Público</strong></th>
                                    <td>
                                        <p>Os ocupantes de cargos públicos deverão tomar decisões baseadas unicamente no interesse público. Não deverão decidir com o objetivo de obter benefícios financeiros ou materiais para si, sua família ou seus amigos.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Integridade</strong></th>
                                    <td>
                                        <p>Os ocupantes de cargos públicos não deverão colocar-se em situação de obrigação financeira ou de outra ordem, para com indivíduos ou organizações externas, que possa influenciá-los no cumprimento de seus deveres oficiais.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Objetividade</strong></th>
                                    <td>
                                        <p>No desempenho das atividades públicas, inclusive nomeações, concessão de contratos ou recomendação de pessoas para recompensas e benefícios, os ocupantes de cargos públicos deverão decidir apenas com base no mérito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Accountability (Prestação de contas)</strong></th>
                                    <td>
                                        <p>Os ocupantes de cargos públicos são responsáveis perante o público por suas decisões ou ações e devem submeter-se a qualquer fiscalização apropriada ao seu cargo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Transparência</strong></th>
                                    <td>
                                        <p>Os ocupantes de cargos públicos devem conferir às suas decisões, às suas ações a maior transparência possível. Eles devem justificar suas decisões e restringir o acesso à informação somente se o interesse maior do público assim o exigir.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Honestidade</strong></th>
                                    <td>
                                        <p>Os ocupantes de cargos públicos têm o dever de: declarar quaisquer interesses particulares que tenham relação com seus deveres públicos; e de tomar medidas para resolver quaisquer conflitos que possam surgir, de forma a proteger o interesse público.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="CorVerdeClaroEstado textmiddle"><strong>Liderança</strong></th>
                                    <td>
                                        <p>Os ocupantes de cargos públicos devem promover e apoiar esses princípios, através da liderança e do exemplo.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p>Esses princípios aplicam-se a todos os aspectos da vida pública. A Comissão relacionou-os para o uso de todos que de alguma forma prestem serviço ao público. Todas essas ideias representam um esforço no sentido de transportar valores e princípios éticos para o nível das instituições nacionais. Estas não podem admitir interferências privadas ilegítimas e nem tampouco interesses corporativos sob máscaras sociais. Um deputado, um administrador urbano, um médico ou um carteiro devem estar em condições de trabalhar beneficiando o cidadão, que os mantém com os seus impostos.</p>
                        <p>Por esse motivo, o relatório, no tocante ao controle interno, dispõe que a Câmara deve nomear uma pessoa independente como comissário parlamentar das normas. Essa pessoa tem a responsabilidade de:</p>

                        <ul class="none">
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> fazer o registro de interesses dos membros do Parlamento;</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> conselhar e orientar os deputados sobre o Código de Conduta;</li>
                            <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> investigar e relatar ações de má conduta.</li>
                        </ul>

                        <p>Desse modo, o Relatório Nolan nos lembra: “ter uma função pública imparcial e incorrupta é um presente que não tem preço”.</p>
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
        <a href="Topico04.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a href="Topico04.6.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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