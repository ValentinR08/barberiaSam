<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <header
        <div class="name ">
            <img src="{{asset('img/barber5.png')}}" alt="" srcset="">
        </div>
        <nav>
            <ul class="menu">
                <li><a  href="{{route('formulario.index')}}">Home</a> </li>
                <li><a href="{{route('formulario.nosotros')}}">Nosotros</a> </li>
                <li><a href="{{route('formulario.servicios')}}">Servicios</a> </li>
                <li><a href="{{route('formulario.create')}}">Contactanos</a> </li>
            </ul>
        </nav>
    </header>
    
    <article class="centrar">
        <h2>Servicios</h2>
        <div class="contenido centrar">
            <img src="{{asset('img/barber4.jpg')}}" alt="">
            <ul>
                <li>Afeitado de cabeza _______________$400</li>
                <li>Corte de cabello __________________$400</li>
                <li>Grecas desde______________________$100</li>
                <li>Afeitado de barba_________________$400</li>
                <li>Arreglo de barba__________________$400</li>
                <li>SPA de barba _____________________$400</li>
                <li>Teñido de barba o cabello__________$550</li>
                <li>Teñido de barba y limpieza facial___$750</li>
                <li>Limpieza de ceja  ___________________$100</li>
                <li>Limpieza de nariz y oídos __________$180</li>
                <li>Arreglo o corte de bigote __________$100</li>
                <li>Exfoliación de rostro_______________$200</li>
                <li>Mascarilla negra __________________$200</li>
                <li>Mascarilla negra con colágeno _____$300</li>
                <li>Alta frecuencia (barba y cabello)____$300</li>
            </ul>
        </div>
    </article>
    <footer  id="contacto">
        <div>
            <h4>Contacto</h4>
            <p>hola@mrbarbershop.mx</p>
            <p>Tel. 55 5801 2459</p>
            <p>Tel. 55 8848 7449</p>
            <p>Whastapp  55 8794 0893</p> 
        </div>
        <a href="#"><img src="{{asset('img/barber5.png')}}" alt="" srcset=""></a>
        <div>
            <h4>Siguenos</h4>

            <img src="{{asset('img/instagram.png')}}" alt="">
            <img src="{{asset('img/facebook.png')}}" alt="">
            <img src="{{asset('img/tik-tok.png')}}" alt="">
            <p>© 2021 MR. Barber Shop - Derechos Reservados México</p>
        </div>
    </footer>
</body>
</html>