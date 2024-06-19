<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> getTech | Procurando tecnologia, é aqui! </title>
    <link rel="stylesheet" href="view/css/style.css">
    <!-- MATERIALIZE-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body class="#01579b light-blue darken-4">
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="view/login.php">Login / Cadastrar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main >
        <!-- Slide-->
        <div class="row" id="Photo">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="view/image/teclado.jpg">
                        <div class="caption center-align">
                            <h3 class="light yellow-text">O melhor lugar para achar periféricos</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="view/image/teclado.jpg">
                        <div class="caption center-align">
                            <h3 class="light yellow-text">O melhor lugar para achar periféricos</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="view/image/teclado.jpg">
                        <div class="caption center-align">
                            <h3 class="light yellow-text">O melhor lugar para achar periféricos</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!--Fim Slide -->

        
        <!-- GALERIA DE PRODUTOS-->

        <section class="produtos">
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-image">
                            <img src="view/image/produtos/produto02.jpeg">
                        </div>
                        <div class="card-content">
                            <p>
                            <h4>Produto</h4>
                            </p>
                            <p>Descricão: Um produto ótimo estado com algumas marcas de uso.</p>
                            <br>
                            <p>Preço: R$ 40.00</p>
                            <!-- Outras informações do produto -->
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn">favoritar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-image">
                            <img src="view/image/produtos/produto02.jpeg">
                        </div>
                        <div class="card-content">
                            <p>
                            <h4>Produto</h4>
                            </p>
                            <p>Descricão: Um produto ótimo estado com algumas marcas de uso.</p>
                            <br>
                            <p>Preço: R$ 40.00</p>
                            <!-- Outras informações do produto -->
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn">favoritar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-image">
                            <img src="view/image/produtos/produto02.jpeg">
                        </div>
                        <div class="card-content">
                            <p>
                            <h4>Produto</h4>
                            </p>
                            <p>Descricão: Um produto ótimo estado com algumas marcas de uso.</p>
                            <br>
                            <p>Preço: R$ 40.00</p>
                            <!-- Outras informações do produto -->
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn">favoritar</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-image">
                            <img src="view/image/produtos/produto02.jpeg">
                        </div>
                        <div class="card-content">
                            <p>
                            <h4>Produto</h4>
                            </p>
                            <p>Descricão: Um produto ótimo estado com algumas marcas de uso.</p>
                            <br>
                            <p>Preço: R$ 40.00</p>
                            <!-- Outras informações do produto -->
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn">favoritar</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var options = {
                indicators: true,
                height: 400,
                duration: 500,
                interval: 3000
            };
            var instances = M.Slider.init(elems, options);
        });
    </script>

    <script type="text/javascript" src="js/materialize.js"></script>

</body>

</html>