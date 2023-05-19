<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body {
            background-color: #ffffff; /* Белый фон */
        }
    @keyframes walking {
    0% {
    background-position: 0 0;
    }
    100% {
        background-position: -240px 0;
    }
    }

    .tourist {
    width: 240px; /* Ширина изображения туриста */
    height: 320px; /* Высота изображения туриста */
    background-image: url(/tour/images/man.png);
    animation: walking 1s steps(10) infinite;
    }
    .man{
        display: flex;
        justify-content: center;
        margin-top: 250px;
    }
    </style>
    <script>
        window.onload = function() {
            // Задержка в секундах перед редиректом
            var delaySeconds = 0;
            // URL для редиректа
            var redirectTo = "{{ $redirectTo }}";

            // Ожидание указанной задержки и выполнение редиректа
            setTimeout(function() {
                window.location.href = redirectTo;
            }, delaySeconds * 1000);
        };
    </script>
    <div class="man">
        <div class="tourist"></div>
    </div>
</body>
</html>