<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IORINIME | Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #E5D9B6">
    <section class="header">
        <nav>
            <a href="/" style="color: #fff; font-size:30px" >IORINIME</a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="daftaranime">Daftar Anime</a></li>
                    <li><a href="rekanime">Rek.Anime</a></li>
                    <li><a href="ost">Lagu/OST</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>IORINIME</h1>
            <p>Website yang berisi semua hal yang berbau 'anime'. Mulai dari berita seputar anime, daftar anime,<br> berita
                anime terbaru, dan bahkan juga ada deretan lagu atau ost anime.</p>
            <a href="https://www.youtube.com/channel/UCb9k6URHsLGE5w55FTSTLAg" class="hero-btn">Subscribe Ilham Maulana Ch.</a>
        </div>
    </section>

    {{-- Berita --}}

    <section class="berita">
        <h1>Berita Seputar Anime</h1>
        <p>Berita terupdate dari dunia anime, mulai dari anime populer, anime terbaru, dan anime upcoming</p>

        <div class="row">
            <div class="berita-col">
                <h3>Anime Populer</h3>
                <p>BLEACH</p>
                <img src="logo2.jpg" width="250px">
            </div>
            <div class="berita-col">
                <h3>Anime Terbaru</h3>
                <p>Jujutsu Kaisen Season 2</p>
                <img src="logo3.png" width="330px">
            </div>
            <div class="berita-col">
                <h3>Anime Upcoming</h3>
                <p>No Game No LiFe S2?</p>
                <img src="logo4.jpg" width="330px">
            </div>
        </div>
    </section>

    <section class="footer">
        <h4>Tentang</h4>
        <p>Ilham Maulana merupakan seorang mahasiswa Program Studi Teknik Informatika <br>dan saat ini berada di Semester 4, berkuliah di Politeknik Negeri Lhokseumawe</p>
        <div class="icons">
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Ilham Maulana</p>
    </section>

{{-- JavaScript for Toggle Menu --}}
    <script>
        
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
</body>

</html>
