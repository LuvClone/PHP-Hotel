<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Peninsula - FACILITIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/link.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold text-center">CONTACT</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Repudiandae quo quibusdam magnam obcaecati
            veniam
            sint molestiae assumenda ut nobis temporibus.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1165.4184376338876!2d106.81045043886246!3d10.735658827015119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317525716c80d5c7%3A0xb2c1d21e0c1dfa29!2zQ8O0bmcgdHkgVE5ISCBNVFYgU1gg4oCTIFRNIOKAkyBYRCBWxKluaCBQaMOhdA!5e0!3m2!1svi!2s!4v1709973824367!5m2!1svi!2s"
                        height="320" class="w-100 rounded" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/MjD5dGZwYYG5CgEP9"
                        class="d-inline-block text-decoration-none text-dark"><i class="bi bi-geo-alt-fill"></i>
                        PRP6+M32, Phước Lý, Nhơn Trạch, Đồng Nai, Việt Nam</a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="Tel: 0898475791" class="d-inline-block mb-2 text-decoration-none text-dark">0898475791</a>
                    <br>
                    <a href="Tel: 0898475791" class="d-inline-block mb-2 text-decoration-none text-dark">0898475791</a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: bubupvn@gmail.com" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-envelope-fill"></i> bubupvn@gmail.com</a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block  text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block  text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3"><label class="form-label" style="font-weight: 500;">Name</label>
                        </div> <input type="text" class="form-control shadow-none">
                        <div class="mt-3"> <label class="form-label" style="font-weight: 500;">Email</label>
                        </div> <input type="email" class="form-control shadow-none">
                        <div class="mt-3"> <label class="form-label" style="font-weight: 500;">Subject</label>
                        </div> <input type="text" class="form-control shadow-none">
                        <div class="mt-3"> <label class="form-label" style="font-weight: 500;">Message</label>
                        </div> <textarea class="form-control shadow-none" rows="1"></textarea>
                        <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
                    </form>
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