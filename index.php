<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreX</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="manual.css">
   

</head>
<body>
    
<header>
    <a href="#" class="brand">Explore<span class="text-danger">X</span></a>
    <div class="menu-btn"></div>
    <div class="navigation">
        <div class="navigation-item">
            <div id="links">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="#">Explore</a>
                <a href="#">Gallary</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
</header>
<section class="home">
    
   
    <video class="video-slide active " src="video/banatas.mp4" autoplay muted loop></video>
    <video class="video-slide " src="video/LKo.mp4" autoplay muted loop></video>
    <video class="video-slide " src="video/Taj.mp4" autoplay muted loop></video>
    <div class="content active">
        <h1>DISCOVER <br> <span>BANARAS</span></h1>
        <p class="res">"Varanasi is a city in the northern Indian state of Uttar Pradesh dating to the 11th century B.C. Regarded as the spiritual capital of India, the city draws Hindu pilgrims who bathe in the Ganges River’s sacred waters and perform funeral rites."</p>
        <a href="banras.php">Explore More</a> 
    </div>
    <div class="content ">
        <h1>DISCOVER <br> <span>LUCKNOW</span></h1>
        <p class="res">Lucknow, a large city in northern India, is the capital of the state of Uttar Pradesh. Toward its center is Rumi Darwaza, a Mughal gateway. Nearby, the 18th-century Bara Imambara shrine has a huge arched hall. Upstairs, Bhool Bhulaiya is a maze of narrow tunnels with city views from its upper balconies. </p>
        <a href="Lucknow.php">Explore More</a> 
    </div>
    <div class="content">
        <h1>DISCOVER <br> <span>AGRA</span></h1>
        <p class="res">Agra is a city on the banks of the Yamuna river in the Indian state of Uttar Pradesh, about 210 kilometres south of the national capital New Delhi and 335km west of the state capital Lucknow. </p>
        <a href="agra.php">Explore More</a>  
    </div>
    <div class="media-icons">
        <a href="#"> <i class="fab fa-facebook-f fac"></i></a>
        <a href="#"> <i class="fab fa-instagram ins"></i></a>
        <a href="#"> <i class="fab fa-twitter twi"></i></a>
    </div>
    <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
    </div>

</section>



<script type="text/javascript">
    // Javascript for responsive Nav Bar
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    });
    //  JS file for video slider
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");
    var sliderNav = function(manual){
        btns.forEach((btn) => {
            btn.classList.remove("active")
        })
        slides.forEach((slide) => {
            slide.classList.remove("active")
        })
        contents.forEach((content) => {
            content.classList.remove("active")
        })
        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
</script>






<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>