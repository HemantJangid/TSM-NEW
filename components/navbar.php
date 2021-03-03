<!-- HEMANT PUT YOUR CODE HERE  -->

<section id="navbar">
  <div class="bars"></div>
  <div class="menu">
    <div class="navBefore"></div>
    <div class="nav">
      <div class="left">
        <ul class="navigation">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Careers</a></li>
        </ul>
        <span class="copyright">Copyright TSM 2020 | ALL RIGHTS RESERVED</span>
      </div>
      <div class="right">
        <div class="facts">
          <h2 class="fact-heading">Quick facts</h2>
          <p class="fact">
            Updating an old blog with new information can increase the
            effectiveness of your search results by 74%. Yet only 55% of
            marketers use this strategy.
          </p>
        </div>
        <div class="social">
          <a
            class="footer-social mr-3"
            href="https://www.facebook.com/thesimplemarketing02"
            ><i class="fab fa-facebook-square"></i
          ></a>
          <a
            class="footer-social mr-3"
            href="https://www.instagram.com/thesimple.marketing/"
            ><i class="fab fa-instagram-square"></i
          ></a>
          <a
            class="footer-social mr-3"
            href="https://www.linkedin.com/company/the-simple-marketing/"
            ><i class="fab fa-linkedin"></i
          ></a>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script>
  const bars = document.querySelector(".bars");
  const menu = document.querySelector(".menu");

  bars.addEventListener("click", function (e) {
    bars.classList.toggle("active");
    if (bars.classList.contains("active")) {
      gsap.to(".menu", {
        duration: 0.2,
        top: "0",
        display: "flex",
        ease: "power1.inOut",
      });
      gsap.to([".navBefore", ".nav"], {
        duration: 0.6,
        stagger: 0.15,
        delay: 0.2,
        top: "0",
        ease: "power1.inOut",
      });
      gsap.to([".navigation", ".facts", ".copyright", ".social"], {
        duration: 0.8,
        opacity: "1",
        delay: 0.6,
        ease: "power1.inOut",
      });
    } else {
      gsap.to([".navigation", ".facts", ".copyright", ".social"], {
        duration: 0.2,
        opacity: "0",
        ease: "power1.inOut",
      });
      gsap.to([".nav", ".navBefore"], {
        duration: 0.55,
        stagger: 0.15,
        top: "-100vh",
        delay: 0.2,
        ease: "power1.inOut",
      });
      gsap.to(".menu", {
        duration: 0.75,
        top: "-100vh",
        display: "none",
        delay: 0.55,
        ease: "power1.inOut",
      });
    }
  });
</script>
