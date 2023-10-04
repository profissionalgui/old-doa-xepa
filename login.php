
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <section class="tela3">
        <div class="cad">
            <div class="forimg">
                <img src="assets/imgs/undraw_nature_m5ll.svg" alt="">
            </div>
    
            <div class="form">
                    <div class="input-group">

                        <div class="form-header">
                            <div class="title-2">
                                <h1>Bem vindo de volta!</h1>
                            </div>
    
                            <div class="login-button">
                                <button>
                                    <a href="index.php">Cadastre-se</a>
                                </button>
                            </div>
                        </div>
                        
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu email " required>
                        </div>
    
                        <div class="input-box">
                            <label for="password">Senha</label>
                            <input type="password" id="password" name="password" placeholder="Digite sua senha " required>
                        </div>
                        
                    </div>
                    
                    <div class="forget-pass">
                        <a href="forget.php">Esqueceu sua senha?</a>
                    </div>
    
                    <div class="continue-button" id="btnLogar">
                        <button name='Entrar' type="submit" onclick="logar()">
                            <a>Entrar</a>
                        </button>
                    </div>
            </div>
        </div>
    </section>
</body>

<script src="script/login.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>