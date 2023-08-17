<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Prestige Institute of Management & Research, Gwalior</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,400&family=Roboto:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
  <section class="sub-header">
    <nav>
      <a href="index.html"><img src="img/helloooo.jpg"></a>
      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>

        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="course.php">COURSE</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </div>
      <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>OUR COURSES</h1>
  </section>
  <!--   Courses -->
  <section class="course">
    <h1>Courses We Offer</h1>
    <div class="row">
      <div class="course-col">
        <h3>Management Programs</h3>
        <p>As a generalist degree, an MBA program gives you fundamental management knowledge, meaning you'll get a
          holistic view of business across areas like marketing, finance, and accounting, all while developing those
          vital soft skills and leadership skills.</p>
      </div>
      <div class="course-col">
        <h3>Computer Application Programs</h3>
        <p>The BCA course is a full time three years (six semesters) Bachelor's Degree in Computer Application. The
          basic objective of BCA Course is to provide young men and women with the required knowledge and necessary
          skills to get rewarding careers into the changing world of Information Technology.</p>
      </div>
      <div class="course-col">
        <h3>Commerce Programs</h3>
        <p>B Com stands for Bachelor of Commerce which is a three year undergraduate program. B Com subjects impart
          Analytical skills, Financial Literacy, Business Acumen, Business Laws, Taxation knowledge etc, with aim to
          make the student job ready in the field of Banking, Accounting, Insurance and Finance</p>
      </div>
    </div>
  </section>

  <!--   Facilities -->


  <section class="campus">
    <h1>Our Facilities</h1>

    <div class="row">
      <div class="campus-col">
        <img src="img/3.jpg" alt="Rishabh Mangal">
        <div class="layer">
          <h3>Library</h3>
        </div>
      </div>
      <div class="campus-col">
        <img src="img/1000.jpg" alt="Raushan BCA">
        <div class="layer">
          <h3>Play Ground</h3>
        </div>
      </div>
      <div class="campus-col">
        <img src="img/199.jpg" alt="Surya Pratap Singh">
        <div class="layer">
          <h3>Ground</h3>
        </div>
      </div>
    </div>


  </section>


  <!-- About Us -->

  <section class="surya">
    <h2>About Us</h2>
    <p>
      WE BUILD UPDATE THIS WEB WITH THE DIRECTION OF<br>SHRUTI DUBEY MAM
    </p>
    <div class="icons">
      <i class="fa-brands fa-youtube"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-linkedin"></i>

    </div>
    <p> Made By <i class="fa-regular fa-heart"></i> Atul Pavaiya</p>

  </section>
  <!--   javascript -->
  <script>
    var naLinks = document.getElementById("navLinks");
    function showMenu() {
      navLinks.style.right = "0";
    }
    function hideMenu() {
      navLinks.style.right = "-200px";
    }
  </script>
  <script src="script.js"></script>

  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>