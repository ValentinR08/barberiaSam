<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script></script>
    <title>Barberia</title>
</head>
<body>
    <header>
        <div class="name">
            <img src="{{asset('img/barber5.png')}}" alt="">
        </div>
        <nav>
            <ul class="menu">
                <li><a href="{{route('formulario.index')}}">Home</a> </li>
                <li><a href="{{route('formulario.nosotros')}}">Nosotros</a> </li>
                <li><a href="{{route('formulario.servicios')}}">Servicios</a> </li> 
                <li><a href="{{route('formulario.create')}}">Contactanos</a> </li>
                <li><a href="{{route('logout')}}">Cerrar Sesión</a> </li>
            </ul>
        </nav>
    </header>
    <main>

    </main>
    <artticle class="centar">
        <h2>Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.29530337254636!2d-99.2397767325409!3d19.33774219999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d200816253bc55%3A0x92483ad5766e1add!2sAv%20Toluca%201151%2C%20San%20Jos%C3%A9%20del%20Olivar%2C%20Olivar%20de%20los%20Padres%2C%20%C3%81lvaro%20Obreg%C3%B3n%2C%2001780%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1726518070601!5m2!1ses-419!2smx" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </artticle>
    <footer id="contacto">
        <div>
            <h4>Contacto</h4>
            <p>hola@mrbarbershop.mx</p>
            <p><img src="{{asset('img/telefono.png')}}" alt="" srcset="">Tel. 55 5801 2459</p>
            <p><img src="{{asset('img/telefono.png')}}" alt="" srcset="">Tel. 55 8848 7449</p>
            <p><img src="{{asset('img/whatsapp.png')}}" alt=""> 55 8794 0893</p>
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