<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./components/header.php') ?>
</head>

<body>
    <?php include('./components/navbar.php') ?>

    <section id="hero">
        <img src="./img/design/rect.svg" alt="" class="rect">
        <img src="./img/design/tri.svg" alt="" class="tri">

        <div class="container">
            <h3 data-aos="fade-up" data-aos-delay="0" class="mb-4">The Simple Marketing</h3>
            <h1 data-aos="fade-up" data-aos-delay="400" class="mb-3">It's not just about
                having
                the right product or solution</h1>
            <h2 data-aos="fade-up" data-aos-delay="800" class="mb-5">You got to find the
                people
                who need it and pitch it right</h2>
            <a data-aos="fade-up" data-aos-delay="1200" class="tsm-btn" href="portfolio.php">
                <div class="tsm-btn-box center">Our Work</div>
            </a>
        </div>

        <img data-aos="fade-up" data-aos-delay="1600" data-aos-duration="2000" src="img/phones.png" alt="phones"
            class="img-fluid mt-5">
    </section>

    <section id="info">
        <div class="container">
            <div class="owl-carousel owl-carousel-info">
                <div class="info-container">
                    <img src="./img/design_growth.png" alt="">
                    <div class="info-text">
                        <h3>We help you to</h3>
                        <h1>Grow Bigger As a company</h1>
                        <h2>Get more <span class="pri-color">traffic</span>
                            and <span class="pri-color">leads</span></h2>
                        <a class="tsm-btn mb-5 mb-5" href="services.php">
                            <div class="tsm-btn-box center">Our Services</div>
                        </a>
                    </div>
                </div>
                <div class="info-container">
                    <img src="./img/design_success.png" class="img-fluid" alt="">
                    <div class="info-text">
                        <h3>We help you to</h3>
                        <h1>Plan Better for Greater Success</h1>
                        <h2>Get better <span class="pri-color">Sales</span>
                            results and <span class="pri-color">Perceived</span> better</h2>
                        <a class="tsm-btn mb-5 mb-5" href="services.php">
                            <div class="tsm-btn-box center">Our Services</div>
                        </a>
                    </div>
                </div>
                <div class="info-container">
                    <img src="./img/desgin_productivity.png" class="img-fluid" alt="">
                    <div class="info-text">
                        <h3>We help you to</h3>
                        <h1>Strategize Smarter for Productivity</h1>
                        <h2>Get better <span class="pri-color">Sales</span>
                            results and <span class="pri-color">Perceived</span> better</h2>
                        <a class="tsm-btn mb-5 mb-5" href="services.php">
                            <div class="tsm-btn-box center">Our Services</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <h1 data-aos="fade-up">Who are we?</h1>
            <div data-aos="fade-up" data-aos-delay="400" class="team-container">
                <p>We’re all about sipping coffee, putting on earphones, and diving into the
                    world of
                    marketing on our
                    laptops. Bringing
                    the best on the table for you, we have a team of powerful thinkers who are dedicated to transform
                    ideas into messages.</p>
                <a class="tsm-btn" href="about.php">
                    <div class="tsm-btn-box center">Our Team</div>
                </a>
                <img data-aos="fade-down" data-aos-delay="1000" src="./img/design/rectdot.svg" alt="" class="rect-dot">
            </div>
            <img data-aos="fade-down" data-aos-delay="500" src="./img/team.jpg" class="team-img" alt="">
        </div>
    </section>

    <section id="numbers">
        <div class="container">
            <h1 data-aos="fade-up" class="mb-5">Let the numbers speak</h1>
            <div class="numbers-text">
                <h1 data-aos="fade-up" data-aos-delay="400"><span class="pri-color">Hundred +</span></h1>
                <h3>Landing pages curated</h3>
                <h1 data-aos="fade-up" data-aos-delay="600"><span class="pri-color">Five hundred thousand +</span></h1>
                <h3>Traffic directed to websites</h3>
                <h1 data-aos="fade-up" data-aos-delay="900"><span class="pri-color">Four hundred Fifty thousand
                        +</span>
                </h1>
                <h3>Generated in digital Sales</h3>
            </div>
        </div>
    </section>

    <section id="client">
        <div class="container">
            <h1 data-aos="fade-up">Our Clientele</h1>
            <img src="./img/clients/eMotarad.png" class="img-fluid" alt="">
            <img src="./img/clients/harbour.png" class="img-fluid" alt="">
            <img src="./img/clients/zavron.png" class="img-fluid" alt="">
            <img src="./img/clients/one-menu.png" class="img-fluid" alt="">
            <!-- <img src="./img/clients/medicine-buddy.png" class="img-fluid" alt=""> -->
        </div>
    </section>

    <?php include('./components/footer.php') ?>
</body>

</html>