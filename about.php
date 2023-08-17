<!DOCTYPE html>

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
    <h1>About Us</h1>
  </section>
  <!--   Content -->
  <section class="about-us">
    <div class="row">
      <div class="about-col">
        <h1>Prestige Institute of Management & Research, Gwalior</h1>
        <p>"Prestige Institute of Management and Research Gwalior is an Autonomous, UGC NAAC accredited 'A' Grade
          institute and MBA Course is accredited by NBA. It was set up in the year 1997 by Prestige Education Society,
          Indore registered under the Societies Registration Act 1860.The Society was setup by Prestige Group of
          Industries with an objective to meet the widely felt need for globally oriented Management and Information
          Technology education and training for professionals. The Institute has grown to be recognized as a premier
          Institute for higher learning. It is a major learning center in Central India. The Institute has approval of
          All India Council for Technical Education & the State Government and is affiliated to Jiwaji University,
          Gwalior. Institute is also ranked by the National Institutional Ranking Framework (NIRF) in the management
          discipline with a rank band 102-125"

          The Institute offers MBA, MBA(Business analytics), MBA-Integrated (Five years programme in management), BBA,
          BCA, B.Com (Economics/Computer Application), B.Com (Hons), LLM, BBA LLB(Hons.), B.Com LLB(Hons.), and BA
          LLB(Hons.) programmes. Jiwaji University, Gwalior awards the degree for all the programmes offered by the
          Institute. Institute has received UGC NAAC 'A' Grade accreditation and is recognized under section 2(f) &
          12(B) of the UGC Act, 1956. The Institute has permanent affiliation of MBA, BBA & BCA programme with Jiwaji
          university Gwalior. This Institute is a recongnised Research center in Management of Jiwaji university,
          Gwalior.</p>
        <a href="https://www.prestigegwl.org/index.php" class="hero-btn red-btn">EXPLORE NOW</a>
      </div>
      <div class="about-col">
        <img src="img/22.jpg">
        <img src="img/atul.jpg">
      </div>
  </section>

  <!-- About Us -->

  <section class="surya">
    <h2>About Us</h2>
    <p>
      WE WILL BUILD THIS WEB WITH THE DIRECTION OF<br>SHRUTI DUBEY MAM
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