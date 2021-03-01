<!-- HEMANT PUT YOUR CODE HERE  -->

<section id="navbar">
  <div class="bars"></div>
  <div class="menu">
    <div class="navBefore"></div>
    <div class="nav">
      <div class="left">
        <ul class="navigation">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../about.php">About us</a></li>
          <li><a href="../services.php">Services</a></li>
          <li><a href="../portfolio.php">Portfolio</a></li>
          <li><a href="../contact.php">Careers</a></li>
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
          <a href="https://www.facebook.com/thesimplemarketing02">
            <svg
              class="facebook"
              width="20"
              height="20"
              viewBox="0 0 13 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12.429 0H9.0393C7.54095 0 6.10396 0.605571 5.04446 1.68349C3.98496 2.76142 3.38974 4.22339 3.38974 5.74781V9.19649H0V13.7947H3.38974V22.9912H7.90939V13.7947H11.2991L12.429 9.19649H7.90939V5.74781C7.90939 5.44293 8.02843 5.15053 8.24033 4.93495C8.45223 4.71936 8.73963 4.59825 9.0393 4.59825H12.429V0Z"
              />
            </svg>
          </a>

          <a href="https://www.instagram.com/thesimple.marketing/">
            <svg
              width="29"
              height="29"
              viewBox="0 0 29 29"
              class="instagram"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M19.9487 3H8.64957C5.5294 3 3 5.57338 3 8.74781V20.2434C3 23.4179 5.5294 25.9912 8.64957 25.9912H19.9487C23.0689 25.9912 25.5983 23.4179 25.5983 20.2434V8.74781C25.5983 5.57338 23.0689 3 19.9487 3Z"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M18.819 13.7715C18.9585 14.7282 18.7979 15.7053 18.36 16.5638C17.9222 17.4223 17.2294 18.1184 16.3803 18.5533C15.5311 18.9881 14.5688 19.1395 13.6302 18.9858C12.6917 18.8322 11.8246 18.3813 11.1524 17.6974C10.4802 17.0135 10.037 16.1314 9.88602 15.1765C9.73499 14.2216 9.88376 13.2426 10.3112 12.3786C10.7386 11.5147 11.4228 10.8099 12.2667 10.3645C13.1105 9.919 14.0709 9.75559 15.0112 9.89746C15.9704 10.0422 16.8585 10.4969 17.5441 11.1945C18.2298 11.8921 18.6768 12.7956 18.819 13.7715Z"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M20.5129 8.17291H20.5206"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </a>

          <a href="https://www.linkedin.com/company/the-simple-marketing/">
            <svg
              class="linkedin"
              width="20"
              height="20"
              viewBox="0 0 24 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M16.6512 7.26038C18.5438 7.26038 20.359 8.02531 21.6973 9.38689C23.0356 10.7485 23.7875 12.5952 23.7875 14.5208V22.9912H19.03V14.5208C19.03 13.8789 18.7793 13.2633 18.3332 12.8095C17.8871 12.3556 17.2821 12.1006 16.6512 12.1006C16.0203 12.1006 15.4153 12.3556 14.9691 12.8095C14.523 13.2633 14.2724 13.8789 14.2724 14.5208V22.9912H9.51489V14.5208C9.51489 12.5952 10.2668 10.7485 11.6051 9.38689C12.9434 8.02531 14.7585 7.26038 16.6512 7.26038Z"
              />
              <path d="M4.75753 8.4704H0V22.9912H4.75753V8.4704Z" />
              <path
                d="M2.37876 4.84026C3.69252 4.84026 4.75753 3.75673 4.75753 2.42013C4.75753 1.08353 3.69252 0 2.37876 0C1.06501 0 0 1.08353 0 2.42013C0 3.75673 1.06501 4.84026 2.37876 4.84026Z"
              />
            </svg>
          </a>
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
        display: "none",
        delay: 0.55,
        ease: "power1.inOut",
      });
    }
  });
</script>
