<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styleCadastrar.CSS">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <main class="row col s12">
    
    <div id="caixaEsquerda" class="col s3">
        <a href="../index.html">Voltar</a>
        <img src="image/getTechLogo.svg" class="logo" alt="">
        <img src="image/robozin.svg" class="logo" alt="">
    </div>

    <div id="caixaDireita" class="col s9">
        <div class="row col s12">
            <h1>Cadastrar Administrador</h1>
        </div>
        <div class="row">
            <form method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="cxNome" id="Nome">
                        <label for="nome">Nome:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="cxUsuario" id="Usuario">
                        <label for="usuario">Usuário:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="password" name="cxSenha" id="Senha">
                        <label for="senha">Senha:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" name="cxEmail" id="Senha">
                        <label for="email">Email:</label>
                    </div>
                </div>
                <button class="btn-large #e1f5fe light-blue lighten-5"  style="color:black; border-radius: 200px;" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>

<!-- action="../controller/GravarAdmin.php"-->