<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social</title>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '772770207724320');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=772770207724320&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
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