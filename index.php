<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SCROLLREVEAL LİNK -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- <script>
        ScrollReveal({
            reset: true
        });
    </script> -->
    <!-- FAVOİCON -->
    <link rel="icon" href="img/favicon2.png" type="image/x-icon" />

    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Yazılımcı ve Sporcu</title>
</head>

<body>
    <?php include("particals/_projeler.php") ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" class="w-50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hakkımda">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Portfolyom">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#İletişim">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Giriş Ekranı -->
    <div class="baslik ">
        <h1>ÖMER DÜNDAR</h1>
        <h1>Front End Web Developer</h3>
    </div>
    <!-- HAKKIMDA -->
    <div class="container-about " id="hakkımda">
        <div class="content-about ab1">
            <div class="about-text">
                <h1>WHO AM I?</h1>
                <p>Hello, I'm Ömer, a 21-year-old first-year student studying Computer Programming at Uşak University.
                    I have been interested in software development and programming since I was 19.
                    I started with <span class="h">HTML5</span> and <span class="h">CSS3</span> and then continued to improve my skills by learning <span class="j">JAVASCRIPT</span>, <span class="b">REACT</span> and <span class="w">PHP</span>.
                    I have a website called <span class="link"><a href="https://dundaromer.com/">dundaromer.com</a></span> where you can find all my projects.</p>
                <p>Besides my passion for programming. I also enjoy doing sports. I have a 12-year background as a licensed basketball player and continue my basketball career as a hobby at Ankaura Sports Club and Atılım University Sports Club.</p>
            </div>
            <div class="about-img">
                <div class="img"></div>
            </div>
        </div>
    </div>
    <!-- YETENEKLERİM -->
    <?php include('particals/_yetkinlik.php') ?>
    <div class="container-ability ">
        <div class="container">
            <h2>BECERİLERİM <i class="fa-solid fa-book-open"></i></h2>
            <div class="row align-items-center" style="letter-spacing: 3px;">
                <div class="col-md-6 text-light">
                    <?php foreach ($beceriler as $beceri) : ?>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between ">
                                <h6 class="font-weight-bold"><?php echo $beceri['name'] ?></h6>
                                <h6 class="font-weight-bold"><?php echo $beceri["yüzde"] ?>%</h6>
                            </div>
                            <div class="progress scrl">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $beceri["yüzde"] ?>%;"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-6 text-light">
                    <?php foreach ($beceriler2 as $beceri) : ?>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between ">
                                <h6 class="font-weight-bold"><?php echo $beceri['name'] ?></h6>
                                <h6 class="font-weight-bold"><?php echo $beceri["yüzde"] ?>%</h6>
                            </div>
                            <div class="progress scrl">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $beceri['yüzde']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $beceri['yüzde']; ?>%;"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- PROJECTS -->
    <section class="container-project p-2 " id="Portfolyom">
        <h2>Projelerim <i class="fa-solid fa-folder"></i></h2>
        <div class="projects">
            <?php foreach ($projeler as $proje) : ?>
                <div class="card scrl" style="width: 18rem; height: 19rem;">
                    <img src="<?php echo $proje["proje_img"] ?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $proje["proje_name"] ?></h5>
                        <p class="card-text"><?php echo $proje["proje_aciklama"] ?></p>
                        <a href="<?php echo $proje["proje_url"] ?>" class="btn btn-success float-end">İncele</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- CONTACT -->
    <div class="container-contact " id="İletişim">
        <div class="contact">
            <div class="contact-text">
                <div class="text">
                    <h1><i class="fa-solid fa-address-book"></i> Benimle İletişime Geç </h1>
                    <br>
                    <form action="particals/_iletişim.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">İletişime Geçme Nedeniniz</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" placeholder="Merhaba..." required></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mb-3 ">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-icon">
                <i class="fa-solid fa-message"></i>
            </div>
            <?php if(isset($_GET['success'])):?>
                <div class="alert alert-success">Mesajınız Başarıyla İletildi.</div>
            <?php endif;?>
        </div>

    </div>

    <footer class="d-flex justify-content-evenly align-items-center">
        <div class="footer-text">
            <h1>İletişime Geç</h1>
            <p>İletişime geçmek isterseniz, mesaj atabilirsiniz.</p>
            <ul>
                <li>
                    <span class="link"><a href="https://www.linkedin.com/in/%C3%B6mer-d%C3%BCndar-366535192/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></span>
                </li>
                <li>
                    <span class="link"><a href="https://www.linkedin.com/in/%C3%B6mer-d%C3%BCndar-366535192/" target="_blank"><i class="fa-solid fa-envelope"></i></a></span>
                </li>
                <li>
                    <span class="link"><a href="https://www.instagram.com/tcomerdundar"><i class="fa-brands fa-instagram"></i></a></span>
                </li>
                <li>
                    <span class="link"><a href="#"><i class="fa-brands fa-twitter"></i></a></span>
                </li>
            </ul>
            <p> &copy; Copyright <strong><span>dundaromer</span></strong>. All Rights Reserved</p>
        </div>
        <div class="footer-right d-md-flex ">
            <div class="footer-box">
                <span class="link"><i class="fa-regular fa-envelope"></i></span>
                <br>
                <p>omerdundar2011@gmail.com</p>
            </div>
            <div class="footer-box">
                <span class="link"><i class="fa-solid fa-code"></i></span>
                <br>
                <p>dundaromer.com</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JS SCROLLREVEAL -->
    <script>
        ScrollReveal().reveal('.scrl', {
            delay: 500
        });
        ScrollReveal().reveal('.ab1', {
            delay: 250
        });
    </script>
</body>
</html>