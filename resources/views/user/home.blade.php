<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <title>Document</title>
</head>
<body>
<!--header and navbar-->
<header>
    <section class="position-relative border-bottom bg-header-color">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav text-secondary">
                        <li class="pt-2"><i class="fa-regular fa-envelope me-3"></i>info@sportsnews.com</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center text-uppercase text-secondary fw-semibold pt-1">sports news</h3>
                </div>
                <div class="col-md-4">
                    <ul class="nav float-end">

{{--                        <li class=""><a href="action.php?page=dashboard"class="text-secondary nav-link">--}}
{{--                                <img src="" class="pe-2" alt="user" style="height: 25px; width: 30px;">--}}
{{--                                <span></span>--}}
{{--                            </a></li>--}}
{{--                        <li class=""><a href="action.php?page=logout"class="text-secondary nav-link">LogOut</a></li>--}}

                        <li class=""><a href="#signin_modal" data-bs-toggle="modal" class="text-secondary nav-link">SignIn</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--modal for sign in-->
    <div class="modal fade" id="signin_modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="fw-bold text-uppercase ms-0">sign in</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center p-0">
                        <a href="#"><i class="fa-brands fa-square-facebook modal-icon-f mx-2"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g modal-icon-g "></i></a>
                    </div>
                    <div class="card card-body border-0 p-0">
                        <form action="action.php" method="POST">
                            <label class="pt-0" for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="your email" required>


                            <label class="pt-3" for="">Password</label>
                            <input type="password" name="password" class="form-control" required>

                            <div class="text-end pb-3"><span class="text-success">Forget password</span></div>
                            <input type="submit" name="loginBtn" class="btn btn-outline-primary form-control" value="Submit">
                            <!--                            <button type="submit" class="btn btn-outline-primary form-control">Login</button>-->
                        </form>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <span>Not registered? To register click </span><a href="action.php?page=registration" class="nav-link text-success" > here</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <section class="bg-header-color shadow">
        <nav class="navbar navbar-expand-md py-0">
            <div class="container py-0">
                <a href="" class="navbar-brand">
                    <h3 class="float-end ps-1 py-3 text-secondary fw-bold text-uppercase"></h3>
                </a>
                <ul class="navbar-nav mx-auto fw-bold text-secondary ">
                    <li><a href="#" class="nav-link py-4 ">Home</a></li>
                    <li><a href="#" class="nav-link py-4 ">Cricket</a></li>
                    <li><a href="#" class="nav-link py-4 ">Football</a></li>
                    <li><a href="#" class="nav-link py-4 ">About Us</a></li>
                    <li><a href="#" class="nav-link py-4 ">Contact</a></li>
                </ul>

                <ul class="navbar-nav">
                    <li class="">
                        <!--                        <input type="text" class="form-control-sm" hidden >-->
                        <button type="submit" class="btn btn-sm btn-outline-info border-0"><i class="fa-solid fw-bold fa-magnifying-glass text-secondary"></i></button>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</header>
<!-- end header and navbar-->

<section class="">
    <div class="row">
        <div id="banner-owl-demo" class="owl-carousel owl-theme">
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100" >
                            <img src="{{asset('/')}}images/cr7.jpg" alt="" style="height:600px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100">
                            <img src="{{asset('/')}}images/cr7-2.jpg" alt="" style="height:600px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100" >
                            <img src="{{asset('/')}}images/crick-1.jpg" alt="" style="height:600px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h5>Cricket News</h5>
                    </div>

                    <div class="col-md-6 pb-4">
                        <div class="card pb-0 m-0 h-100">
                            <img src="{{asset('/')}}images/blog/cricket-3.jpg" class="rounded-top" height="200" alt="">
                            <div class="card-body pb-0">
                                <a href="" class="text-decoration-none pb-5">this is title</a>
                                <p class="text-muted small pt-2"></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h5>Football News</h5>
                    </div>

                    <div class="col-md-6 pb-4">
                        <div class="card pb-0 m-0 h-100">
                            <img src="{{asset('/')}}images/blog/cricket-3.jpg" class="rounded-top" height="200" alt="">
                            <div class="card-body pb-0">
                                <a href="" class="text-decoration-none pb-5"></a>
                                <p class="text-muted small pt-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Recent News</h5>
                    </div>
                    <div class="card-body pt-0">

                        <div class="border-bottom py-3">
                            <p class="text-muted small"></p>
                            <a href="" class="text-decoration-none"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--footer section-->
<footer class="bg-footer-color font-size-footer position-relative" id="contact">
    <section class="position-relative">
        <div class="row py-5">
            <div class="col-md-4 ps-5">
                <h3 class="fw-bold text-color pb-2">Get In Touch</h3>
                <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i>KH-198, Goni Road, Middle Badda, Dhaka-1216, Bangladesh</p>
                <p class="text-white"><i class="fa fa-phone-alt me-2"></i>+8801601845222</p>
                <p class="text-white"><i class="fa fa-envelope me-2"></i>info@sportsnews.com</p>
                <div class="border-0 m-0 p-0">
                    <ul class="nav p-0  border-0">
                        <li class="me-3"><a href="" class="p-0"><i class="text-white fa-brands  fa-facebook-f circle-icon-b-facebook"></i></a></li>
                        <li class="me-3"><a href="" class="p-0"><i class="text-white fa-brands fa-twitter  circle-icon-b"></i></a></li>
                        <li class="me-3"><a href="" class="p-0"><i class="text-white fa-brands fa-linkedin-in  circle-icon-b"></i></a></li>
                        <li class=""><a href="" class="p-0"><i class="text-white fa-brands fa-instagram  circle-icon-b"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="text-color fw-bold pb-2">Quick Links</h3>
                <ul class="navbar-nav text-white">
                    <li><a href="" class="nav-link pt-0 pb-1">Home</a></li>
                    <li><a href="" class="nav-link pt-0 pb-1">Cricket</a></li>
                    <li><a href="" class="nav-link pt-0 pb-1">Football</a></li>
                    <li><a href="" class="nav-link py-1">About Us</a></li>
                    <li><a href="" class="nav-link py-1">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-5 pe-5">
                <h3 class="text-color fw-bold pb-2">Newsletter</h3>
                <p class=" text-white pt-0">This newsletter signup example from SOPRTSNEWS doesn’t bombard a guest with
                    too much information. It also maintains consistent branding (an important newsletter signup best practice),
                    and clearly explains how someone would benefit from signing up</p>
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm rounded-0" placeholder="Enter your email" >
                    <button type="button" class="btn btn-sm text-white bg-signup-color rounded-0">SIGN UP</button>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="row pb-5">
            <hr/>
            <div class="col-md-7 px-5">
                <span class="float-start text-white ">©</span><span class="text-color float-start">sportsnews.com.</span><span class="fw-bold text-white float-start"> All Rights Reserved. Designed by </span><a href="" class="nav-link float-start text-color">BITM Codex</a>
            </div>
            <div class="col-md-5 px-5 py-0">
                <div class="navbar navbar-expand py-0">
                    <ul class="navbar-nav  ms-0 fw-bold py-0">
                        <li><a href="" class="nav-link text-white py-0">Privacy</a></li>
                        <li><a href="" class="nav-link text-white py-0"> Terms</a></li>
                        <li><a href="" class="nav-link text-white py-0">FAQs</a></li>
                        <li><a href="" class="nav-link text-white py-0">Help</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>

<!--back to top-->
<button onclick="topFunction()" id="backToTopBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

<script src="{{asset('/')}}js/jquery.js"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}js/owl.carousel.min.js"></script>
<script>
    $(function() {
        // Owl Carousel
        var owl = $("#banner-owl-demo");
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 1000,
            animateOut: "slideOutDown",
            animateIn: "slideInDown",
        });
    });

</script>

<script>
    $(document).ready(function() {
        // $(".owl-carousel").owlCarousel();
        $("#owl-demo").owlCarousel({

            autoPlay: 2000, //Set AutoPlay to 3 seconds
            // //Autoplay
            // autoPlay : true,
            // goToFirst : true,
            // goToFirstSpeed : 1000,

            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    // nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1050:{
                    items:3,
                    // nav:true,
                    loop:false
                }
            }

        });

    });
</script>

<!--back to top-->
<script>
    // Get the button
    let mybutton = document.getElementById("backToTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>





