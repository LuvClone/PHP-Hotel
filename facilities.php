<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Peninsula - FACILITIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/link.php'); ?>
    <style>
    .pop:hover {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
    }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Repudiandae quo quibusdam magnam obcaecati
            veniam
            sint molestiae assumenda ut nobis temporibus.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.png" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.png" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.png" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.png" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.png" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/features/wifi.png" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Omnis quaerat non nam aperiam exercitationem neque a!
                    </p>
                </div>
            </div>
        </div>
    </div>



    <?php require('inc/footer.php') ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30, // Adds a 30px gap between slides
        effect: "fade", // Enables fade transition between slides
        loop: true, // Enables continuous looping
        autoplay: {
            delay: 3500, // Sets the duration of a slide (3.5 seconds)
            disableOnInteraction: false, // Carousel continues to play even after user interaction
        }
    });

    var swiper = new Swiper('.swiper-testimonials', {
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
                slidePerView: 1,
            },
            620: {
                slidePerView: 1,
            },
            768: {
                slidePerView: 2,
            },
            1024: {
                slidePerView: 3,
            },
        }
    });
    </script>
</body>

</html>