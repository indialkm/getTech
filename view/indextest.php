<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <header>
        <!-- Menu-->

        <!--Fim Menu -->
    </header>
    <main>
        <!-- Slide-->
        <div class="row" id="Photo">
            <div class="slider">
                <ul class="slides">
                    <li><img src="../teclado.jpg"></li>
                    <li><img src="../teclado.jpg"></li>
                    <li><img src="../teclado.jpg"></li>
                </ul>
            </div>
        </div>

        <!--Fim Slide -->

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