<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./components/header.php') ?>
</head>

<body>
    <?php include('./components/navbar.php') ?>
    <section id="contact">
        <div class="container">
            <h1 data-aos="fade-up">Interested In working with us?</h1>
            <div class="contact-links">
                <h2 data-aos="fade-up" data-aos-delay="200" class="mb-4">Say hello at <a
                        href="">info@thesimple.marketing</a>.</h2>
                <h2 data-aos="fade-up" data-aos-delay="400" class="mb-4">Or call us on <a href="">+91-8427890955</a>
                    anytime you want.</h2>
                <h2 data-aos="fade-up" data-aos-delay="600" class="mb-4">Start a new Project <a href="">here</a>.</h2>
                <h2 data-aos="fade-up" data-aos-delay="800" class="mb-4">Looking for a job or an internship? Drop your
                    Resume at <a href="">hr@thesimple.marketing</a>.</h2>
            </div>
        </div>
    </section>

    <section id="project">
        <div class="container">
            <h3>Let's start a new project</h3>
            <h1 class="mb-5">Let’s <span class="pri-color">Grow</span> your business together</h1>
            <form action="email.php" method="POST">
                <div class="form-row">
                    <div data-aos="fade-up" data-aos-delay="200" class="col-sm-12 col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" />
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400" class="col-sm-12 col-md-6 form-group">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" />
                    </div>
                </div>
                <div class="form-row">
                    <div data-aos="fade-up" data-aos-delay="600" class="col-sm-12 col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Mobile (+91 9876 543 210)" name="phone" />
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800" class="col-sm-12 col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Website/LinkedIn link" name="web" />
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1000" class="form-group">
                    <h2>What Describes you best?</h2>
                    <input type="radio" class="radiocheck" id="business-owner" name="describe-selector"
                        value="Business Owner" checked />
                    <label for="business-owner">Business Owner</label>
                    <input type="radio" class="radiocheck" id="work-business" name="describe-selector"
                        value="Work for a Business" />
                    <label for="work-business">Work for a Business</label>
                    <input type="radio" class="radiocheck" id="individual-provider" name="describe-selector"
                        value="Individual service provider" />
                    <label for="individual-provider">Individual Service Provider</label>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="form-group">
                    <h2>What help do you need?</h2>
                    <input type="checkbox" class="radiocheck" id="build-brand" name="help-selector" value="Build Brand"
                        checked />
                    <label for="build-brand">Build Brand</label>

                    <input type="checkbox" class="radiocheck" id="increase-sales" name="help-selector"
                        value="Increase sales/Generate More Leads" />
                    <label for="increase-sales">Increase sales/Generate More Leads</label>

                    <input type="checkbox" class="radiocheck" id="linkedIn-help" name="help-selector"
                        value="LinkedIn" />
                    <label for="linkedIn-help">LinkedIn</label>

                    <input type="checkbox" class="radiocheck" id="others" name="help-selector" value="Others" />
                    <label for="others">Other</label>

                </div>
                <div data-aos="fade-up" class="form-group">
                    <input type="text" class="form-control" placeholder="Tell us more about your queries...."
                        name="query" />
                </div>
                <button data-aos="fade-up" class="tsm-btn mt-4" type="submit">
                    <div class="tsm-btn-box center">Submit</div>
                </button>
            </form>
        </div>
    </section>

    <?php include('./components/footer.php') ?>

</body>

</html>