
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/modal.css">
</head>
<body>
        <nav>
          <div class="logo">
            <img src="assets/imgs/doa-xepa-branca.png" alt="Logo">
          </div>

          <ul class="menu">
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </nav>
        
        <div class="spacefor">

          <div class="triangle"></div>

          <div class="avatar">
            <img id="avatar-img" src="" alt="Avatar">
            <label for="avatar-input" class="avatar-label"><i class="fas fa-camera"></i></label>
            <input type="file" id="avatar-input" accept="image/*">
          </div>

          <div class="triangleb"></div>
  
        </div>



      <div class="container">
        <div class="accordion_item">
            <div class="accordion_header">
                <h3>
                    <i class="fa-solid fa-apple-whole" style="color: #ff0000;"></i>
                     Informações Pessoais
                </h3>
                <div class="icon">
                    +
                </div>
            </div>

            <div class="accordion_content">
                <div class="placeholder-for-select">
                        
                        <div id="partea">
                                <label>Nome</label>
                                <div id="space-nomea">

                                </div>

                                <label>Sobrenome</label>
                                <div id="space-nomeb">

                                </div>
                        </div>
                    <div id="parteb">
                        
                        <label for="">Email</label>
                        <div id="space-mail">

                        </div>
                        <label for="">Celular</label>
                        <div id="space-tel">

                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

        <div class="accordion_item">
            <div class="accordion_header">
                
                <h3>
                    <i class="fa-solid fa-apple-whole" style="color: #ff0000;"></i>
                    Meus Produtos
                </h3>
                <div class="icon">
                    +
                </div>
            </div>

            <div class="accordion_content">
                <div class="espaço_reservado">
                    <button id="openModalBtn">Cadastrar</button>

    <div id="myModal" class="modal">
      <div class="modal-content">
        <span id="closeModalBtn" class="close">&times;</span>
        <form>
          <label for="imagem">Imagem:</label>
          <input type="file" id="imagem" name="imagem" accept="image/*">
          
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome">
          
          <label for="quantidade">Quantidade em Estoque:</label>
          <input type="number" id="quantidade" name="quantidade">
          
          <label for="descricao">Descrição:</label>
          <textarea id="descricao" name="descricao"></textarea>
</fieldset> 
<legend>Tipo do produto:</legend>
        <div>        
            <input type="radio" id="fruta" name="fruta" value="fruta" checked>
            <label for="fruta">Fruta</label>
        </div>

        <div>
            <input type="radio" id="verduras" name="verduras" value="verduras">
            <label for="verduras">Verduras</label>
        </div>

        <div>
            <input type="radio" id="per" name="per" value="per">
            <label for="per">Perecíveis</label>
        </div>

        <div>
            <input type="radio" id="not-per" name="not-per" value="not-per">
            <label for="not-per">Não-Perecíveis</label>
        </div>

</fieldset>
          
          <label for="valor">Valor do Produto:</label>
          <input type="number" id="valor" name="valor">
          
          <label for="unidade">Unidade de Medida:</label>
          <input type="text" id="unidade" name="unidade">
          
          <label for="grupo">Grupo:</label>
          <input type="text" id="grupo" name="grupo">
          
          <input type="submit" value="Salvar">
        </form>
      </div>
    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
<script src="script/nav.js"></script>
<script src="script/modal.js"></script>
<script src="script/user.js"></script>
<script src="script/catalogo.js"></script>

<script src="https://kit.fontawesome.com/2234c40753.js" crossorigin="anonymous"></script>
</html>