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