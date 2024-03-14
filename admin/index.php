<?php
    require('inc/essentials.php');
    require('inc/db_config.php');

    session_start();
        if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            redirect('dashboard.php');
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/link.php'); ?>
</head>
<style>
div.login-form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
}
</style>

<body class="bg-light">


    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center"
                        placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_password" required type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php

        if(isset($_POST['login']))
        {
            $frm_data = filteration($_POST);

            $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_password`=?";
            $values = [$frm_data['admin_name'],$frm_data['admin_password']];
            $datatypes = "ss";

            $res = select($query,$values,"ss");
            if($res->num_rows==1){
                $row = mysqli_fetch_assoc($res);
                session_start();
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['id'];
                redirect('dashboard.php');
            }else{
                alert('error', 'Login failed - Invalid Credentials!');
            }
        }

    ?>



    <?php require('inc/scripts.php'); ?>

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