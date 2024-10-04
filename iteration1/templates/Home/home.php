<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?= $this->Html->meta('icon') ?>

        <title><?= $this->fetch('title') ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)--> 
        <?= $this->Html->css('styles.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <style>
        .logo {
            width: 300px; /* Adjust this value to your desired width */
            height: auto; /* This will maintain the aspect ratio */
        }
        </style>
        
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?= $this->ContentBlock->text('website-title'); ?></div>
                <div class="masthead-heading text-uppercase">Start Your Event Journey Here</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="<?= $this->Url->build('/venue/venueListing')?>">Browse Venues</a>
            </div>


        </header>
        <!-- venue Grid-->
        <section class="page-section bg-light" id="venue">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" href="<?= $this->Url->build('/Venue')?>">Venue Options</h2>
                    <h3 class="section-subheading text-muted">We provide an array of venues to suit your event needs!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- venue item 1-->
                        <div class="venue-item">
                            <a class="venue-link">
                                <img class="img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/venue/1.jpg" alt="..." />
                            </a>
                            <div class="venue-caption">
                                <div class="venue-caption-heading">Weddings</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- venue item 2-->
                        <div class="venue-item">
                            <a class="venue-link">
                                <img class="img-fluid" src="assets/img/venue/2.jpg" alt="..." />
                            </a>
                            <div class="venue-caption">
                                <div class="venue-caption-heading">Birthdays</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- venue item 3-->
                        <div class="venue-item">
                            <a class="venue-link">
                                <img class="img-fluid" src="assets/img/venue/3.jpg" alt="..." />
                            </a>
                            <div class="venue-caption">
                                <div class="venue-caption-heading">Corporate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-cutlery fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Catering</h4>
                        <p class="text-muted">Indulge in excellence: elevate your event with our exceptional catering services, tailored to your needs.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Photography</h4>
                        <p class="text-muted">Capturing moments, creating memories: let our photography services frame your event with perfection.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-music fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Music</h4>
                        <p class="text-muted">Setting the soundtrack for unforgettable moments: elevate your event with our exceptional music services. </p>
                    </div>
                </div>
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
            </div>
        </section>
        <!-- How-To -->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">How-To</h2>
                    <h3 class="section-subheading text-muted">Unsure of where to start? Follow these steps!</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?= $this->request->getAttribute('webroot') ?>assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Step 1</h4>
                                <h4 class="subheading">Select your desired location</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Step 2</h4>
                                <h4 class="subheading">Select your desired date</h4>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Step 3</h4>
                                <h4 class="subheading">How many people would you like to host?</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Step 4</h4>
                                <h4 class="subheading">Add any additional services</h4>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Plan Your
                                <br />
                                Dream
                                <br />
                                Event!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Contact-->
<!--
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">DELETE</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
<!--
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
-->
                                <!-- Name input-->
<!--
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
-->
                                <!-- Email address input-->
<!--
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
-->
                                <!-- Phone number input-->
<!--
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
-->
                                <!-- Message input-->
<!--
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
-->
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
<!--
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
-->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
<!--
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
-->
                    <!-- Submit Button-->
<!--
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
