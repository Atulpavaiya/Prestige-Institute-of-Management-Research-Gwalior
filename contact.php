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
      <a href="index.html"><img src="helloooo.jpg"></a>
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
    <h1>Contact Us</h1>
  </section>
  <!--   Contact to Manish-->
  <section class="location">

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.029412755359!2d78.21559331430925!3d26.260708794176384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c1273e3c14e9%3A0x17301bfd69162e2a!2sPrestige%20Institute%20of%20Management%20%26%20Research%2C%20Gwalior!5e0!3m2!1sen!2sin!4v1672384341705!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </section>
  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa-solid fa-house"></i>
          <span>
            <h5>Prestige Institute of Management & Research</h5>
            <p>Gwalior Madhya Pradesh</p>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-phone"></i>
          <span>
            <h5> 0751 - 2470724</h5>
            <p>Monday to Saturday, 9AM to 5PM</p>
          </span>
        </div>
        <div>
          <i class="fa-regular fa-envelope"></i>
          <span>
            <h5>info@prestigegwl.org</h5>
            <p>Email us your query</p>
          </span>
        </div>
      </div>
      <div class="contact-col">
        <form action="formhandler.php" method="post">
          <input type="text" name="name" placeholder="Enter your name" required>
          <input type="email" name="email" placeholder="Enter email address" required>
          <input type="text" name="subject" placeholder="Enter your subject" required>
          <textarea row="8 name=" message" placeholder=" Enter your subject" required></textarea>
          <button type="submit" class="hero-btn red-btn">Send Message</button>
        </form>
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