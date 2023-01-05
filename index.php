<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/common.css">


    <style>
        .availability-form {
            position: relative;
            margin-top: -55px;
            z-index: 2;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>

    <title>MSR Hotel</title>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">MSR Hotel</a>
            <button class="navbar-toggler  shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link me-2 active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">About</a>
                    </li>



                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#LoginModal">
                        Login
                    </button>

                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#RegisterModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Modal Code -->

    <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">

                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>
                            User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-dark SHADOW-NONE">Login</button>
                            <a href="javascript: void(0)" class="text-decoration-none text-secondary">Forgot Password?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Register Modal Code -->

    <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">

                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            NOTE: Your details must with match your ID (Aadhar card, passport, dricing license, etc..) that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <!-- name--email -->
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <!-- phone--picture -->
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <!-- address -->
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <!-- pincode--DOB -->
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <!-- password--confirm-password -->
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button class="btn btn-dark shadow-none">REGISTER</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Swipper -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" />
                </div>

            </div>
        </div>
    </div>

    <!--End  -->


    <!-- Check Availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12  my-2 p-4 bg-white shadow rounded">
                <h5>Check Booking Availability</h5>
                <form action="">
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button class="btn text-white custom-bg shadow-none">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <!-- First Card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                <i class="bi bi-wifi me-2"></i> Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-tv me-2"></i> Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-fan me-2"></i> AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-fire me-2"></i> Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm text-white custom-bg ">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark ">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
                    <img src="images/rooms/2.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                <i class="bi bi-wifi me-2"></i> Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-tv me-2"></i> Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-fan me-2"></i> AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-fire me-2"></i> Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm text-white custom-bg ">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark ">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Third Card -->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
                    <img src="images/rooms/3.png" class="card-img-top">
                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap ">
                                <i class="bi bi-wifi me-2"></i> Wi-fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-tv me-2"></i> Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-fan me-2"></i> AC
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                <i class="bi bi-fire me-2"></i> Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm text-white custom-bg ">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark ">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- Our Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow p-4 my-3">
                <img src="images/facilities/wifi.svg" alt="">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow p-4 my-3">
                <img src="images/facilities/firealarm.svg" alt="">
                <h5 class="mt-3">Fire Alarm</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow p-4 my-3">
                <img src="images/facilities/ac.svg" alt="">
                <h5 class="mt-3">A/C</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow p-4 my-3">
                <img src="images/facilities/massage.svg" alt="">
                <h5 class="mt-3">Massage</h5>
            </div>

            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow p-4 my-3">
                <img src="images/facilities/heater.svg" alt="">
                <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-outline-dark rounded-0 fw-bold shadow-none align-items-center"> More Facilities >>> </a>
            </div>
        </div>
    </div>

    <!-- Testimonils -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONILS</h2>
    <div class="conatiner">
        <div class="swiper swiper-testimonils">
            <div class="swiper-wrapper mb-5">
                <!--  -->
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-item-center mb-3">
                        <img src="images/facilities/ac.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Libero laboriosam ipsam, dolorum reiciendis delectus esse
                        lat beatae quos? Harum a vel earum nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-item-center mb-3">
                        <img src="images/facilities/ac.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Libero laboriosam ipsam, dolorum reiciendis delectus esse
                        lat beatae quos? Harum a vel earum nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-item-center mb-3">
                        <img src="images/facilities/ac.svg" width="30px">
                        <h6 class="m-0 ms-2">Random User 1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Libero laboriosam ipsam, dolorum reiciendis delectus esse
                        lat beatae quos? Harum a vel earum nobis?
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <!--  -->
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-outline-dark rounded-0 fw-bold shadow-none align-items-center">
                     Know More >>> </a>
            </div>
    </div>

    <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="380px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31182.08906849306!2d76.61522447910156!3d12.331858000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf707cf622d0ad%3A0x81fc945c806b3a68!2sOYO%2010193%20Hotel%20MSR%20Comfort!5e0!3m2!1sen!2sin!4v1672899168663!5m2!1sen!2sin" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- Call Us -->
                <div class="bg-white p-4 rounded mb-3">
                    <h5>Call Us</h5>
                    <a href="tel: +919119515866" class="d-inline-block mb-2  text-decoration-none text-dark ">
                        <i class="bi bi-telephone-fill"></i>+919119515866</a>
                    <br>
                    <a href="tel: +919119515866" class="d-inline-block mb-2  text-decoration-none text-dark ">
                        <i class="bi bi-telephone-fill"></i>+919119515866</a>

                </div>
                <!-- follow us -->
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <!-- twitter -->
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </span>
                    </a>
                    <br>
                    <!--  -->
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>instagram
                        </span>
                    </a>
                    <br>
                    <!--  -->
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a>
                    <br>
                    <!--  -->
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-snapchat me-1"></i>SnapChat
                        </span>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">
                    MSR HOTEL
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Culpa error omnis eos aspernatur perspiciatis aut, dolor exercitationem 
                    sapiente maxime architecto.
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
                <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
                <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
                <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
            </div>
            <div class="col-lg-4 p-4">
                    <h5 class="mb-3">Follow Us</h5>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                        <i class="bi bi-twitter me-1"></i>
                        Twitter
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                        <i class="bi bi-instagram me-1"></i>
                        Instagram
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
                        <i class="bi bi-facebook me-1"></i>
                        Facebook
                    </a>
                    <br>
                    <a href="#" class="d-inline-block  text-dark text-decoration-none">
                        <i class="bi bi-snapchat me-1"></i>
                        SnapChat
                    </a>
            </div>
        </div>
    </div>

    <h6 class="text-center bg-dark text-white p-3 m-0">Designed by MSR Foundation</h6>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        // Hotel Images
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            }
        });
        // Testimonils
        var swiper = new Swiper(".swiper-testimonils", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>