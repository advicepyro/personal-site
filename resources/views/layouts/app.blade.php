{{--The base for all pages. This is Freelancer's page broken up into blades.--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ config('sitevars.meta.description') }}">
    <meta name="author" content="{{ config('sitevars.meta.author') }}">

    <title>{{ config('app.name') }}</title>

    {{--Here's a crapload of icons--}}
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/icons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/icons/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="/icons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="/icons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/icons/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="/icons/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="/icons/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="/icons/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="/icons/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="/icons/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="/icons/mstile-310x310.png" />

    {{--Define mixed stylesheets here--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
</head>

<body id="page-top">

@include('parts.navbar')
@include('parts.header')

@include('parts.portfolio')


<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes
                    the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets
                    for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Whether you're a student looking to showcase your work, a professional looking to
                    attract clients, or a graphic artist looking to share your projects, this template is the perfect
                    starting point!</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="#">
                <i class="fa fa-download mr-2"></i>
                Download Now!
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required"
                                   data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address"
                                   required="required"
                                   data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number"
                                   required="required"
                                   data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                      required="required"
                                      data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Living Life on Pi</h4>
                <p class="lead mb-0">Proudly hosted on a Raspberry Pi 3+. Paying for hosting sucks.</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">This looks like Freelancer</h4>
                <p class="lead mb-0">Because it is the Freelancer template. Have a gander
                    <a href="https://startbootstrap.com/template-overviews/freelancer/">here</a>!</p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda
                        ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?
                        Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda
                        ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?
                        Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda
                        ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?
                        Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda
                        ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?
                        Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda
                        ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?
                        Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda
                        ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?
                        Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
