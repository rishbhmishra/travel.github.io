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
    <link rel="stylesheet" href="about.css">
   

</head>
<body class="aag">
    
<header >
    <a href="#" class="brand ">Explore<span class="text-danger">X</span></a>
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
<div class="section">
    <div class="container">
        <div class="content-section">
            <div class="title">
                <h1>
                    About Us
                </h1>
                <div class="content">
                    <h3>The website is created by Rishabh mishra after completion the course which is provided by Putor.ai(IIT ,Kanpur)</h3>
                    <p><pre>
Name : - Rishabh mishra
Roll Number :- 1904850100094
mail id : - mishrarm955964@gamil.com
College Name :- S.R.I.M.T , Lucknow
College Code :-485
                    </pre>
                    </p>
                    
                    <div class="button">
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
        </div><div class="image-section">
                <img src="Img/rishabhprofile.jpeg" alt="owner">
            </div>
    </div>
</div>
<script type="text/javascript">
    // Javascript for responsive Nav Bar
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    });
    </script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>