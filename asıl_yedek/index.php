<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVOİCON -->
    <link rel="icon" href="img/favicon2.png" type="image/x-icon" />

    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Yazılımcı ve Sporcu</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light">
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

        <div class="baslik">
            <h1>ÖMER DÜNDAR</h1>
            <h1>Front End Web Developer</h1>
        </div>

    <!-- HAKKIMDA -->
    <div class="container-about" id="hakkımda">
        <div class="content-about">
            <div class="about-text">
                <h1>WHO AM I?</h1>
                <p>Hello, I'm Ömer, a 21-year-old first-year student studying Computer Programming at Uşak University.
                     I have been interested in software development and programming since I was 19.
                     I started with <span class="h">HTML5</span> and <span class="h">CSS3</span> and then continued to improve my skills by learning <span class="j">Javascript</span>, <span class="b">Bootstrap</span> and <span class="w">Wordpress</span>.
                     I have a website called <span class="link"><a href="https://dundaromer.com/">dundaromer.com</a></span> where you can find all my projects.</p>
                <p>Besides my passion for programming. I also enjoy doing sports. I have a 12-year background as a licensed basketball player and continue my basketball career as a hobby at Ankaura Sports Club and Atılım University Sports Club.</p>
            </div>
            <div class="about-img">
                <div class="img"></div>
            </div>
        </div>
    </div>
   <!-- YETENEKLERİM -->
   <div class="container-ability">
       <h2>YETKİNLİKLERİM <i class="fa-solid fa-book-open"></i></h2>
       <div class="boxs">
        <div class="box">
            <h3>YETENEKLERİM <i class="fa-solid fa-book-open"></i> </h3>
            <div class="box-list">
                <p>HTML5-CSS3</p>
                <p>JAVASCRİPT</p>
                <p>BOOTSTRAP</p>
                <p>WORDPRESS</p>
            </div>
            <div class="line"></div>
            <div class="line-underline"></div>
            
        </div>

        <div class="box">
            <h3>ÖĞRENİYORUM <i class="fa-solid fa-pen"></i> </h3>
            <div class="box-list">
                <p>PHP</p>
                <p>PYTHON</p>
                <p>PYGAME</p>
            </div>
            <div class="line"></div>
            <div class="line-underline"></div>
            
        </div>
       </div>
       
        
    </div>
<!-- PROJECTS -->
    <div class="container-project" id="Portfolyom">
        <h2>PROJECTS <i class="fa-solid fa-folder"></i></h2>
        <div class="projects">
            <div class="projects-img p1"></div>
            <div class="projects-text">
                <h1><a href="https://dundaromer.com/bio/">Çin Seddi</a> </h1>
                <p>Uzak Doğu mutfağının baskın olduğu bir proje.</p>
            </div>
        </div>
        <div class="projects">
            <div class="projects-img p2"></div>
            <div class="projects-text">
                <h1><a href="https://dundaromer.com/deneme/">E-Ticaret</a> </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita libero officia nam possimus omnis, reiciendis accusamus perspiciatis laborum deleniti sed!</p>
            </div>
        </div>
        <div class="projects">
            <div class="projects-img p3"></div>
            <div class="projects-text">
                <h1><a href="https://dundaromer.com/kahveci/">Kahveci</a> </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita libero officia nam possimus omnis, reiciendis accusamus perspiciatis laborum deleniti sed!</p>
            </div>
        </div>
        <div class="projects">
            <div class="projects-img p4"></div>
            <div class="projects-text">
                <h1><a href="https://dundaromer.com/g%C3%B6rev/">İnşaat Firması</a> </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita libero officia nam possimus omnis, reiciendis accusamus perspiciatis laborum deleniti sed!</p>
            </div>
        </div>
        <div class="projects">
            <div class="projects-img p5"></div>
            <div class="projects-text">
                <h1><a href="https://dundaromer.com/kendi-portfolio/">CV</a> </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita libero officia nam possimus omnis, reiciendis accusamus perspiciatis laborum deleniti sed!</p>
            </div>
        </div>
    </div>
<!-- CONTACT -->
    <div class="container-contact" id="İletişim">
        <div class="contact">
            <div class="contact-text">
                <div class="text">
                    <h1><i class="fa-solid fa-address-book"></i> Benimle İletişime Geç </h1>
                    <br>
                    <br>
                    <br>
                    <h5><i class="fa-solid fa-envelope"></i> Email : <span class="email">omerdundar2011@gmail.com</span></h5>
                    <br>
                    <h5>Websitem : <span class="link" ><a href="https://dundaromer.com/" target="_blank">dundaromer.com</a></span></h5>
                    <h5>Bionluk : <span class="link"><a href="https://bionluk.com/dundaromer" target="_blank">dundaromer</a></span></h5>
                    <h5>Linkedn : <span class="link"><a href="https://www.linkedin.com/in/%C3%B6mer-d%C3%BCndar-366535192/" target="_blank">Ömer DÜNDAR</a></span></h5>
                    <h5>Yetenek Kapısı : <span class="link"><a href="https://www.yetenekkapisi.org/student/profile" target="_blank">Ömer DÜNDAR</a></span></h5>
                </div>
                
            </div>
            <div class="contact-icon">
                <i class="fa-solid fa-message"></i>
            </div>
        </div>
        
    </div>

    <footer>
        <h1>Designed by dundaromer</h1>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>