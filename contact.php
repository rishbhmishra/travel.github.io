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
    <link rel="stylesheet" href="lucknow.css">
    <link rel="stylesheet" href="agra.css">
    <link rel="stylesheet" href="banars.css">
    <link rel="stylesheet" href="contact.css">
   
   

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
                <a href="index.php">Explore</a>
                <a href="#">Gallary</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
</header>
    <div class="container">
        <div style="text-align:center">
          <h2>Get In Touch</h2>
          <p>Write your valuable feedback</p>
        </div>
        <div class="row">
          <div class="column">
            <img src="Img/explo.png" style="width:100%">
          </div>
          <div class="column">
            <form action="feedback.php" method="post">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name.." autocomplete="off"  required>
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name.." autocomplete="off" required>
            <label for="num">Email</label>
        
            <input type="email" id="ema" name="conemail" placeholder="Enter Your E-Mail" autocomplete="off" required>
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
              <input type="submit" value="Submit">
            </form>
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
</body>
</html>