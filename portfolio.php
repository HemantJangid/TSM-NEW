<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./components/header.php') ?>
</head>

<body>
    <?php include('./components/navbar.php') ?>
    <section id="portfolio">
        <div class="container">
            <h1 class="mb-5">Our Portfolio</h1>
        </div>
        <div class="button-container">
            <button class="portfolio-btn" style="background-color: #ffbd59; color: #000;" data-button="brand">
                Brand Guideline
            </button>
            <button class="portfolio-btn" data-button="socials">Social Media</button>
            <button class="portfolio-btn" data-button="brochure">Brochure</button>
            <button class="portfolio-btn" data-button="case">Case study</button>
            <button class="portfolio-btn" data-button="videos">Videos</button>
            <button class="portfolio-btn" data-button="websites">Websites</button>
        </div>
    </section>

    <section class="dynamic-area brand visible" data-type="brand">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <img src="./img/portfolio/TSMBrand starter kit.jpg" alt="TSMBrand starter kit" class="img-fluid" />
                </div>
                <div class="col-lg-12">
                    <img src="./img/portfolio/EMBrandGuidelinesstarter kit.jpg" alt="EMBrandGuidelinesstarter kit"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="dynamic-area social" data-type="socials">

    </section>

    <section class="dynamic-area brochure" data-type="brochure">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <img src="./img/portfolio/Zencash Brochure mockup.jpg" alt="Zencash Brochure mockup"
                        class="img-fluid" />
                </div>
                <div class="col-lg-12">
                    <img src="./img/portfolio/Karbon brochure mockup.jpg" alt="Karbon brochure mockup"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="dynamic-area case" data-type="case">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <img src="./img/portfolio/harbon365 case study mockup.jpg" alt="harbon365 case study mockup"
                        class="img-fluid" />
                </div>
                <div class="col-lg-12">
                    <img src="./img/portfolio/One menu mockup.jpg" alt="One menu mockup" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <section class="dynamic-area videos" data-type="videos">
        <div class="container">
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/480861990?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/480860579?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/484731619?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/484730822?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490397721?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490655637?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490397402?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490397288?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490396835?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490396694?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490396613?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490396517?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/490396446?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
            <div class="video-portfolio">
                <iframe src="https://player.vimeo.com/video/482114753?color=ffbd59&portrait=0" frameborder="0"
                    allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="dynamic-area websites" data-type="websites">
        <h1>Websites will come here</h1>
    </section>
    <?php include("./components/footer.php") ?>

</body>

</html>