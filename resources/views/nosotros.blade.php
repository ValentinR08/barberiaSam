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
        <h2>Nosotros</h2>
        <div class="gap4">
            <img class="fto-nos" src="{{asset('img/barber 3.jpg')}}" alt="">
            <p class="texto-nos">
                Somos un espacio de cuidado personal y estético sanitizado y termonebulizado; contamos con protocolos y medidas de sanidad que harán mucho más segura tu visita. Somos una barbería cercana a ti. Contamos con personal y barberos expertos y capacitados para brindarte un excelente servicio.
                Nuestros peluqueros te podrán realizar cortes de cabello para caballero clásicos, cortes de cabello para caballero tradicionales, cortes de cabello para caballero modernos y cortes de cabello para caballero en tendencia. 
                Contamos con servicios de barbería y peluquería en salón y terraza; en nuestro bar ofrecemos tragos y bebidas de cortesía a nuestros clientes para hacer mucho más placentera tu visita.La 
                mesa de billar y zona de videojuegos, te harán pasar un mejor momento y estamos seguros que hasta encontrarás con quien echar una buena partida; mientras esperas o disfrutas tu servicio, nuestro lustrador de zapatos o mejor llamado “bolero” podrá bolear tu calzado; o, si lo deseas, puedes sentarte en la estación del bolero que literal… es un “Trono de rey”. 
                MR. Barber Shop también cuenta con un SALÓN DE MASAJES Y FACIALES así como con un SALÓN DE MANICURA, PEDICURA Y UÑAS, TOTALMENTE abiertos para MUJERES y HOMBRES, en ellos encontrarás servicios de masajes, faciales, exfoliaciones, depilaciones, manicura, pedicura y colocación de uñas ofrecidos por expertos en la materia.
            </p>
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
            <img src="{{asset('img/logotipo-de-instagram.png')}}" alt="">
            <img src="{{asset('img/facebook.png')}}" alt="">
            <img src="{{asset('img/tik-tok.png')}}" alt="">
            <p>© 2021 MR. Barber Shop - Derechos Reservados México</p>
        </div>
    </footer>
</body>
</html>