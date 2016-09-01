<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--[if IE]>
        <link rel="shortcut icon" href="img/#">
    <![endif]-->
    <link rel="icon" href="img/#">

    <link rel="stylesheet" href="_assets/_css/style.css">
    <link rel="stylesheet" href="_assets/_css/fonts.css">


    <!--    Validar Formulario-->
    <script>
        < script >
            function valida() {
                if (document.cadastro3.cpf.validity.patternMismatch) {
                    alert("O CPF está incorreto");
                } else {
                    alert("O CPF está correto");
                }
                return false;
            }
    </script>

    <!--    Validar Formulario-->

    <title>E-commerce</title>
</head>

<body>
    <main>
        <header class="container">
            <div class="header-top">
                <div class="row">
                    <div class="col col-3">
                        <h1 class="logo">Portland</h1>
                    </div>
                    <div class="col col-3">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="#0">Home</a></li>
                                <li><a href="#1">Devices</a></li>
                                <li><a href="#2">Delivery & Payment</a></li>
                                <li><a href="#3">About You</a></li>
                                <li><a href="#4">About Us</a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col col-3">
                        <div class="nav-assets">
                            <span class="entypo-basket"><p>Cart</p></span>
                            <a href="cadastro.php">Cadastro / Login</a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--row-->
            </div>
        </header>
        <!--       Fim do cabeçalho-->
        <section class="interface-form">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <header class="header-Form">
                            <a href="./">Voltar para a Loja</a>
                            <h1>Identificação</h1>
                        </header>
                        <div class="col col-2">
                            <form action="" method="" name="" class="login">
                                <fieldset>
                                    <legend>Já Sou Cliente Portland</legend>
                                    <p>Para acessar sua conta, por favor, preencha os campos abaixo:</p>
                                    <label for="email">Informe seu Email:</label>
                                    <input type="email" id="email" class="email" name="email" required />
                                    <label for="senha">Informe sua Senha</label>
                                    <input type="password" id="senha" class="senha" name="senha" required />
                                    <input type="submit" class="enviar" value="Continuar" />
                                </fieldset>
                            </form>
                        </div>
                        <div class="col col-2">
                            <form action="" method="" name="" class="new-account" onsubmit="return valida()">
                                <fieldset>
                                    <legend>Quero ser Cliente Portland</legend>
                                    <!--
                                    <input type="radio" class="radio" id="radio" name="pessoa"/>
                                    <label for="radio">Pessoa Fisica</label>
                                    <input type="radio" class="radio" id="radio" name="pessoa"/>
                                    <label for="radio">Pessoa Juridica</label>
-->
                                    <p>Seus Dados Pessoais:</p>
                                    <label for="nome">Nome <span style="color:#ff0000">*</span>:</label>
                                    <input type="text" class="nome" id="nome" name="nome" required/>
                                    <label for="sobrenome">Sobrenome <span style="color:#ff0000">*</span>:</label>
                                    <input type="text" class="sobrenome" id="sobrenome" name="sobrenome" required/>
                                    <label for="cpf">CPF <span style="color:#ff0000">*</span>:</label>
                                    <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx" required/>
                                    <label for="data">Data de nascimento <span style="color:#ff0000">*</span>:</label>
                                    <input type="date" class="data" id="data" name="data" required/>
                                    <input type="radio" class="radio" id="radio" name="sexo"/>
                                    <label for="radio">Masculino</label>
                                    <input type="radio" class="radio" id="radio" name="sexo"/>
                                    <label for="radio">Feminino</label>
                                    <label for="nome">CEP <span style="color:#ff0000">*</span>:</label>
                                    <input type="text" name="cep" id="cep" class="cep" required pattern= "[0-9]{5}-[0-9]{3}"/>
                                    <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm" target="_blank">Não sei o CEP</a>

                                    <p>Dados de acesso na Portland:</p>
                                    <label for="email">Email <span style="color:#ff0000">*</span>:</label>
                                    <input type="email" class="email" id="email" name="email" required/>
                                    <label for="c_email">Confirmar Email <span style="color:#ff0000">*</span>:</label>
                                    <input type="email" class="email" id="c_email" name="c_email" required/>

                                    <label for="senha">Senha <span style="color:#ff0000">*</span>:</label>
                                    <input type="password" class="senha" id="senha" name="senha" required/>
                                    <label for="c_senha">Confirmar Senha <span style="color:#ff0000">*</span>:</label>
                                    <input type="password" class="senha" id="c_senha" name="c_senha" required/>

                                    <input type="submit" class="enviar" value="Salvar"/>

                                </fieldset>
                            </form>
                        </div>



                    </div>
                    <!--/col-->
                </div>
                <!--/row-->
            </div>
            <!-- /container-->
        </section>
        <!--       Fim do conteudo Principal-->

        <div class="">
            <div class="row">
                <div class="col">
                    <footer class="footer-main">
                        <footer class="bottom-footer">
                            <div class="block">
                                <div class="col col-3">
                                    <h1 class="logo">Portland</h1>
                                </div>
                                <div class="col col-3">
                                    <nav class="nav-footer-menu">
                                        <ul>
                                            <li><a href="#1">Home</a></li>
                                            <li><a href="#2">Shop</a></li>
                                            <li><a href="#3">About Us</a></li>
                                            <li><a href="#4">Contacts</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col col-3">
                                    <section class="social">
                                        <a href="https://github.com/DavidMuniz/Projeto_e-commerce" title="GitHub deste projeto" target="_blank"><span class="fontawesome-github-sign"></span></a>
                                        <a href="" title="Conheça nossa paragina no Facebook"><span class="fontawesome-facebook"></span></a>
                                        <a href="" title="Conheça nosso Twitter"><span class="fontawesome-twitter"></span></a>
                                    </section>
                                </div>
                            </div>
                            <div class="terms">
                                <p>&copy 2016, All Right Reserved</p>
                            </div>
                        </footer>
                    </footer>
                    <!--Fim do Rodapé-->
                </div>
                <!--/coluna-->
            </div>
            <!--/linha-->
        </div>
        <!--/container-->
    </main>
</body>

</html>
