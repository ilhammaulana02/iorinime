<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IORINIME | Daftar Anime</title>
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
            <a href="/" style="color: #fff; font-size:30px">IORINIME</a>
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
            <p>Website yang berisi semua hal yang berbau 'anime'. Mulai dari berita seputar anime, daftar anime,<br>
                berita
                anime terbaru, dan bahkan juga ada deretan lagu atau ost anime.</p>
            <a href="https://www.youtube.com/channel/UCb9k6URHsLGE5w55FTSTLAg" class="hero-btn">Subscribe Ilham Maulana Ch.</a>
        </div>
    </section>

    {{-- Berita --}}

    <section class="berita">
        <h1>Daftar Anime</h1>
        <p>Genre dari anime yang sedang hangat dibicarakan dan ditonton banyak orang.</p>

        <div class="row">
            <div class="berita-col">
                <h3>Genre Action</h3>
                <p style="font-size: 15px">Anime dengan genre action menghadirkan cerita dengan balutan aksi perkelahian
                    atau pertempuran, baik
                    yang menggunakan senjata maupun tidak.</p>
                <img src="910288.jpg" width="330px">
            </div>
            <div class="berita-col">
                <h3>Genre Slice of Life</h3>
                <p style="font-size: 13px">Ringkasnya, genre ini mengisahkan cerita kehidupan sehari-sehari yang dialami
                    manusia. Namun, biasanya ada nilai-nilai kehidupan di dalamnya.</p>
                <img src="sol.jpg" width="330px">
            </div>
            <div class="berita-col">
                <h3>Genre Komedi</h3>
                <p style="font-size: 13px">Anime dengan genre komedi pasti menampilkan kisah yang mengundang gelak tawa
                    dan menghibur. Umumnya, kisah yang ditampilkan berakhir bahagia dan jarang ada ketegangan.</p>
                <img src="komedi.jpeg" width="330px">
            </div>
            <div class="berita-col">
                <h3>Genre Isekai</h3>
                <p style="font-size: 13px">Genre isekai adalah salah satu genre anime, manga, light novel, atau game
                    yang mengisahkan tentang tokoh utama yang masuk ke dalam dunia paralel atau dimensi lain.</p>
                <img src="isekai.jpg" width="330px">
            </div>
            <div class="berita-col">
                <h3>Genre Adventure</h3>
                <p style="font-size: 13px">Genre adventure merupakan genre yang menggambarkan perjalanan, penjelajahan,
                    dan petualangan seseorang di suatu tempat. Karakter yang ada dalam genre ini umumnya memiliki tujuan
                    untuk mencapai misi yang ada di tempat tersebut.</p>
                <img src="adv.jpg" width="330px">
            </div>
            <div class="berita-col">
                <h3>Genre School</h3>
                <p style="font-size: 13px">Anime genre ini mengambil setting dan latar belakang sekolah. Kisahnya pun
                    mengangkat kehidupan di sekolah, misalnya, konflik antarsiswa atau siswa dengan gurunya.</p>
                <img src="school.jpg" width="330px">
            </div>
        </div>
    </section>

    <section class="footer">
        <h4>Tentang</h4>
        <p>Ilham Maulana merupakan seorang mahasiswa Program Studi Teknik Informatika <br>dan saat ini berada di
            Semester 4, berkuliah di Politeknik Negeri Lhokseumawe</p>
        <div class="icons">
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Ilham Maulana</p>
    </section>

    {{-- JavaScript for Toggle Menu --}}
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>
