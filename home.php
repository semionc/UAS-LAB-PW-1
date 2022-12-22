<?php

session_start();

$title = 'SDN 043950';
include 'layout/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN 043950</title>
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
            background-color: #bbb;
        }
        
        .banner h1 {
            color: rgb(6, 7, 7);
            z-index: 1;
            padding: 20px 25px;
            border: 5px solid rgb(6, 7, 7);
        }

        .container {
            padding: 80px 0 0 0;
        }
        
        /* Slideshow container */
        .content-slide {
            max-width: 1200px;
            max-height: 1000px;
            position: relative;
            margin: auto;
        }
        
        .imgslide {
            display: none;
        }
        
        img {
            vertical-align: middle;
            width:100%;height: 400px;
        }
        
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            color: rgb(255, 254, 224);
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.8); 
        }
        
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        
        .pre:hover,
        .next:hover {
            background-color: rgba(255, 255, 255, 0.8);
            color: rgb(0, 0, 0);
        }
        
        .text {
            color: #fafafa;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        
        .content-slide .numberslide {
            color: #ffffff;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        
        /* resposive */
        
        @media screen and (max-width: 800px) {
        
            .content-slide {
                padding: 8px 50px 12px 50px;
            }
        
            .next {
                right: 50px;
                border-radius: 3px 0 0 3px;
            }
            
        }
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4;
            }
        
            to {
                opacity: 1;
            }
        }
        
        @keyframes fade {
            from {
                opacity: .4;
            }    
            to {
                opacity: 1;
            }
        }
        
        .container .page {
            text-align: center;
            padding-top: 20px;
        }
        
        .page .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            display: inline-block;
            transition: background-color 0.6s ease;
            border-radius: 50%;
        }
        
        .page .active,
        .page .dot:hover {
            background-color: #ce0000;
        }

        section {
            margin: 75px 200px;
        }

        section h2 {
            text-align: center;
            color: rgb(15, 15, 16);
            margin-bottom: 20px;
        }

        .about p {
            color:#080808;
            word-spacing: 2px;
            line-height: 25px;
        }

       
    </style>
</head>

<body>
  
    <section class="banner">
    <center><h1>SD NEGERI 043950 SIGARANG - GARANG</h1></center>
    </section>

    <div class="container">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="img/carousel1.jpg" alt="">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="img/carousel2.jpg" alt="">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="img/carousel3.jpg" alt="">
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
        }
    </script>

    <!--Tentang Sekolah-->
    <section class="about">
        <div class ="container">
            <h2>Tentang Sekolah</h2>
            <p>SD NEGERI 043950 SIGARANG-GARANG adalah salah satu satuan pendidikan dengan jenjang SD di DESA SIGARANG-GARANG, Kec. Naman Teran, Kab. Karo, Sumatera Utara. Dalam menjalankan kegiatannya, SD NEGERI 043950 SIGARANG-GARANG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. Dengan akreditasi C, berdasarkan sertifikat 860/BANSM/PROVSU/LL/XII/2018.</p>
            <p>SD NEGERI 043950 SIGARANG-GARANG menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SD NEGERI 043950 SIGARANG-GARANG berasal dari PLN. SD NEGERI 043950 SIGARANG-GARANG menyediakan akses internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan SD NEGERI 043950 SIGARANG-GARANG untuk sambungan internetnya adalah Telkomsel Flash.</p>
            <h2>VISI</h2>
            <center><p>Unggul dalam bidang akademik dan non akademik, beriman, berbudaya dan berbudi pekerti luhur dalam perilaku.</p></center>
            <h2>MISI</h2>
            <p>1. Memacu siswa untuk berprestasi dalam bidang akademik dan non akademik minimal sampai tingkat kabupaten.</p>
            <p>2. Mewujudkan prestasi sekolah di bidang akademik dan non akademik sampai pada tingkat nasional dan internasional.</p>
            <p>3. Mewujudkan standar kelulusan dengan nilai minimal 75 sesuai dengan SNP.</p>
            <p>4. Mewujudkan proses pembelajaran paikem, inovatif, dan kontekstual.</p>
            <p>5. Mewujudkan sumber daya pendidik dan kependidikan yang profesional.</p>
            <p>6. Meningkatkan kemampuan guru, pegawai, dan siswa dalam penggunaan bahasa asing (Bahasa Inggris).</p>
            <p>7. Mewujudkan sarana dan prasarana belajar yang lengkap dan memadai sesuai dengan kebutuhan.</p>
            <p>8. Mewujudkan manajemen sekolah yang transparan dan accuntabel.</p>
            <p>9. Mewujudkan sistem penilaian yang berkualitas dan akurat.</p>
            <p>10. Membiasakan warga sekolah untuk melaksanakan 5 S (Senyum, Salam, Sapa, Sopan dan Santun).</p>
            <p>11. Menciptakan suasana kerja yang harmonis berdasarkan indikator budaya sekolah yaitu kedisiplinan, partisipasi, tanggung jawab, kebersamaan, kejujuran, kekeluargaan, semangat hidup dan semangat belajar.</p>
            <p>12. Menanamkan sikap saling menghormati di antara warga sekolah.</p>
            <p>13. Membiasakan peserta didik menjaga kebersihan lingkungan untuk mendukung program clean and green.</p>
        
        </div>
    </section>
</body>

</html>


    
<?php

include 'layout/footer.php';

?>