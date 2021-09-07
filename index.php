<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("./espacio.jpg");
            background-size: cover;
            overflow-y: hidden;
            overflow-x: hidden;
            font-family: 'Share Tech Mono', monospace;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 25px;
            border: 1px;
            font-family: 'Share Tech Mono', monospace;
            border-radius: 10px;
        }

        button:hover {
            transform: translate(10px, -10px);
            transform: scale3d(100px, 100px, 100px);
            cursor: pointer;
        }

        #abajo {
            background-color: white;
            width: 50%;
            height: 10rem;
            border-radius: 10px;
        }
        #oculto{
            opacity: 0;
        }
    </style>
</head>

<body>
    <div id="oculto" style="display: none;">
        <img src="https://lh3.googleusercontent.com/proxy/s7DKZlf0sqWHZtuglysoq-lMKddWITQXPmFoTjyQN9y4TBtGjKm5uQXAnGsbdrjkVXL3SToEBw-xtfj7G8kmbCFwehD-0dE" style="position: absolute; width: 12rem;" id="dialog">
        <label for="dialogo" style="padding: 3.5rem 1.2rem;position: absolute;z-index: 2;font-size: 1.3rem;">¡Hola Mundo!</label>
        <img src="./astronauta.png">
    </div>

    <?php
    echo "<div id='abajo'><button onclick='mostrar(this)' style='font-size: 4rem;'>Presioná acá</button></div>";
    ?>
    <script>
        function mostrar(boton) {
            document.getElementById("abajo").style.display ="none";
            setInterval(10,unfade(document.getElementById("oculto")));
        }

        function fade(element) {
            var op = 1; // initial opacity
            var timer = setInterval(function() {
                if (op <= 0.1) {
                    clearInterval(timer);
                    element.style.display = 'none';
                }
                element.style.opacity = op;
                element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op -= op * 0.1;
            }, 5);
        }

        function unfade(element) {
            var op = 0.1; // initial opacity
            element.style.display = 'block';
            var timer = setInterval(function() {
                if (op >= 1) {
                    clearInterval(timer);
                }
                element.style.opacity = op;
                element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op += op * 0.1;
            }, 100);
        }
    </script>
</body>

</html>