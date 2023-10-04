<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>DOA XEPA</title>
</head>
<body>
    <header class="header">
        <nav class="navigation">
            <a href="#" class="logo"><img src="assets/imgs/Logo copiar1.png" alt="Logo-Doa-Xepa" id="logo"></a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#ask">Como funciona?</a></li>
                <li><a href="#cad">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main class="conteudo-1" id="home">

        <div class="texto">
            <div class="title-1">
                <h3>Doar nunca foi tão fácil!</h3>
            </div>
           
            <div class="subtitle">
                <p>O Doa Xepa aproxima empresas de hortifruti que tem alimentos em bom estado de consumo, com instituições que precisam de doações.</p>
            </div>
        </div>

        <div class="fruta">
            <img src="assets/imgs/id-copiar.png" alt="imagem-fruta" id="frut">
        </div>

        
    </main>
    
    <div class="quebra">
        
    </div>

    <section class="tela2" id="ask">
        <div class="esquerda">
            <div class="esquerda-1">
                <div class="text-esquerda" id="esquerda-a">
                    <h3>1. Anúncio</h3>
                    <p>Você pode anunciar alimentos em bom estado de consumo para doação no nosso site, seguindo os seguintes passos:

                        Após realizar o cadastro clique em “Catálogo” e preencha os formulários com informações sobre os alimentos disponíveis para doação, como tipo, quantidade e dados de validade. Quando confirmadas, suas doações serão anunciadas em nosso site e as instituições poderão entrar em contato para retirada dos alimentos.
                    </p>
                </div>
                <div class="imagens-esquerda">
                    <img src="./assets/imgs/undraw_Add_post_re_174w.png" id="img-1">
                </div>
            </div>
                
            <div class="esquerda-2">
                <div class="text-esquerda" id="esquerda-b">
                    <h3>3. Conversa</h3>
                    <p>As instituições podem usar as informações de contato disponíveis no nosso site, fornecidas pela Empresa, como telefone e e-mail, para fazer o contato inicial. Para manter contato, é importante que a instituição articule sua necessidade de doações de forma clara e objetiva e mantenha uma comunicação efetiva com sua empresa. Vocês poderão também, definir um horário semanal ou quinzenal para solicitar doações e confirmar o recebimento de alimentos.</p>
                </div>
                <div class="imagens-esquerda">
                <img src="./assets/imgs/undraw_Personal_opinions_re_qw29.png" id="img-1">
                </div>
            </div>
        </div>    


        <div class="meio">
            <img src="./assets/imgs/meio.png" alt="">
        </div>

        <div class="direita">
            <div class="direita-1">
                <div class="text-direita">
                    <h3>2. Escolha</h3>
                    <p>As instituições acessarão o catálogo que você criou em nosso site e encontrarão os produtos disponíveis para doação. Cada produto tem uma descrição e foto para ajuda-lo a escolher o produto que deseja adquirir. Ele pode preencher a quantidade que desejada, selecioná-la e adicioná-la ao carrinho. Quando terminar, irá clicar em "Concluir pedido" e será direcionado para a página de contato com sua empresa. Lembre-se de atualizar com frequência o catálogo de produtos, pois novos alimentos podem ser adicionados a qualquer momento.</p>
                </div>
                
                <div class="imagens-direito">
                    <img src="./assets/imgs/undraw_Confirm_re_69me.png" id="img-2">
                </div>
            </div>

            <div class="direita-2">
                <div class="text-direita">
                    <h3>4. Entrega</h3>
                    <p>Após confirmação, a instituição recebe data e horário da entrega dos alimentos, devendo ter equipe preparada. Caso haja mudanças, contate a empresa. Confira qualidade e quantidade dos alimentos recebidos e relate divergências. Armazene e distribua os alimentos adequadamente e forneça feedback à empresa doadora.</p>
                </div>
                <div class="imagens-direita">
                    <img src="./assets/imgs/undraw_takeout_boxes_ap54.png" id="img-2">
                </div>
            </div>
        </div>
</section>

    <section class="tela3" id="cad">
        <div class="cad">
            <div class="forimg">
                <img src="assets/imgs/undraw_nature_m5ll.svg" alt="">
            </div>

            <div class="form">
                <form method="post">
                    <div class="form-header">
                        <div class="title-2">
                            <h1>Cadastre-se</h1>
                        </div>

                        <div class="login-button">
                            <button>
                                <a href="login.html">Entrar</a>
                            </button>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Primeiro nome</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Digite seu primeiro nome " required
                            value="<?php echo (isset($_POST['firstname']) && (valida_email($_POST['email']) || !valida_senha($_POST['password'], $_POST['Confirmpassword']))) ? $_POST['firstname'] : ''; ?>">
                        </div>
                        
                        <div class="input-box">
                            <label for="lastname">Ultimo nome</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Digite seu ultimo nome " required
                            value="<?php echo (isset($_POST['lastname']) && (valida_email($_POST['email']) || !valida_senha($_POST['password'], $_POST['Confirmpassword']))) ? $_POST['lastname'] : ''; ?>">
                        </div>

                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu email " required
                            value="<?php echo (isset($_POST['email']) && (valida_email($_POST['email']) || !valida_senha($_POST['password'], $_POST['Confirmpassword']))) ? $_POST['email'] : ''; ?>">
                        </div>

                        <div class="input-box">
                            <label for="number">Celular</label>
                            <input type="tel" id="number" name="number" placeholder="(xx) xxxxx-xxxx" required 
                            value="<?php echo (isset($_POST['number']) && (valida_email($_POST['email']) || !valida_senha($_POST['password'], $_POST['Confirmpassword']))) ? $_POST['number'] : ''; ?>"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11">
                        </div>

                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="password" placeholder="Digite sua senha " required
                            value="<?php echo (isset($_POST['password']) && (valida_email($_POST['email']) || !valida_senha($_POST['password'], $_POST['Confirmpassword']))) ? $_POST['password'] : ''; ?>">
                        </div>

                        <div class="input-box">
                            <label for="Confirmpassword">Confirmar Senha</label>
                            <input type="password" id="Confirmpassword" name="Confirmpassword" placeholder="Confirme sua senha " required
                            value="<?php echo (isset($_POST['Confirmpassword']) && (valida_email($_POST['email']) || !valida_senha($_POST['password'], $_POST['Confirmpassword']))) ? $_POST['Confirmpassword'] : ''; ?>">
                        </div>
                    </div>

                    <div class="continue-button" id="continuar">
                        <button name="continuar" type="submit">
                        Continuar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="tela4" id="contato">
        <main class="conteudo">

            <div class="title">
                <h1>Contato</h1>
            </div>
        
            <div class="input-option">
                <label>Está com alguma dúvida?</label>
                <a href="http://" target="_blank" rel="noopener noreferrer"><button> <link rel="icon" href="./img/solicitar.png"><svg xmlns="http://www.w3.org/2000/svg" x="5px" y="3px"
                    width="68" height="22"
                    viewBox="-10 0 45 48">
                    <path fill="#e0e0e0" d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z"></path><path fill="#d9d9d9" d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z"></path><path fill="#eee" d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z"></path><path fill="#e0e0e0" d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z"></path><path fill="#ca3737" d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z"></path><path fill="#f5f5f5" d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z"></path><path fill="#e84f4b" d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z"></path>
                    </svg> Podemos ajudar! </button></a>
        
                <label>Quer fazer parte da nossa equipe?</label>
                <a href="http://" target="_blank" rel="noopener noreferrer"><button> @contato </button></a>
        
                <label>Grupo de WhatsApp</label>
                <a href="http://" target="_blank" rel="noopener noreferrer"><button> (xx) xxxx-xxxx </button></a>
           </div>
        
            <div class="img">
                <img src="assets/imgs/undraw_term_sheet_re_ju7s (1).png" alt="img">
            </div>
        </main>
    </section>

    <section class="tela5">
        <div class="footer">
            <div class="footer-img">
                <img src="assets/imgs/logo-verde.png" alt="">
            </div>

            <div class="local">
                <h1>Onde estamos?</h1>
                <h4>Rua Padre Inglês, 12 - Boa Vista, Recife - Pernambuco </h4>
            </div>
        </div>

        
    </section>
    <div class="end">
    
    </div>
</body>
<script src="script/catalogo.js"></script>
</html>