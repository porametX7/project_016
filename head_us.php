<?php
require 'database/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ร้านอร่อยดี</title>
    <!-- ไอคอนบนหัวเว็บ -->
    <link rel="shortcut icon" href="./dist/assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">

    <link rel="stylesheet" href="./dist/assets/compiled/css/app.css">
    <link rel="stylesheet" href="./dist/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./dist/assets/compiled/css/iconly.css">

    <link rel="stylesheet" href="./dist/assets/compiled/css/auth.css">
    <link rel="stylesheet" href="dist/assets/extensions/filepond/filepond.css">
    <link rel="stylesheet" href="dist/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
    <link rel="stylesheet" href="dist/assets/extensions/toastify-js/src/toastify.css">

    <link rel="stylesheet" href="dist/assets/extensions/sweetalert2/sweetalert2.min.css">

    <link rel="shortcut icon" href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e" type="image/x-icon">

</head>

<style>
    .no-products-message {
        display: none;
        /* ซ่อนข้อความเมื่อไม่มีสินค้า */
    }

    .has-products #modal-simple {
        display: block;
        /* แสดงเมื่อมีสินค้า */
    }

    .floating-button {
        position: fixed;
        /* Set the position to fixed so that it stays in a fixed position on the viewport */
        bottom: 35px;
        right: 35px;
        background-color: #6677CC;
        color: #fff;
        font-size: 15px;
        width: 45px;
        height: 45px;
        border-radius: 35%;
        text-align: center;
        line-height: 45px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        z-index: 1000;
        /* Set a high z-index to ensure it appears above other elements */
    }

    .floating-button:hover {
        background-color: #3333CC;
        color: #fff;
    }


    #main-content {
        text-align: center;
    }

    /* ทำให้สีจางลงจากสถานะสินค้าหมด */
    .out-of-stock {
        opacity: 0.7;
        /* Faded appearance for out-of-stock product */
    }

    .out-of-stock .btn-primary {
        pointer-events: none;
        /* Disable button click for out-of-stock product */
    }

    /* Add this to your existing styles */
    #scrollToTopBtn {
        display: none;
    }
</style>

<body>
    <script src="dist/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="home.php">
                                <h4>ร้านอร่อยดี</h4>
                                <h6>(THAI FOOD 2000)</h6>
                            </a>
                        </div>
                        <!-- แถบผู้ใช้งาน -->
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-xl me-3">
                                        <img src="logo/TB_01.png" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">#Table 01</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Your Name</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ส่วนหัวของคำสั่งไปหน้าต่างๆ -->
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="home.php" class='menu-link'>
                                    <span><i class="bi bi-house-door-fill"></i> Home</span>
                                </a>
                            </li>
                            <li class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-cart4"></i> รายการอาหาร</span>
                                </a>
                                <div class="submenu ">
                                    <!-- แถวข้างใน -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group" href="menu_us.php">
                                            <li class="submenu-item">
                                                <a href="menu_us.php" class="submenu-link">รวมเมนู</a>
                                            </li>
                                            <?php
                                            $see_product_types = "SELECT DISTINCT product_type FROM product_th";
                                            $sql_product_types = mysqli_query($conn, $see_product_types);

                                            while ($type_row = mysqli_fetch_assoc($sql_product_types)) {
                                                $product_type = $type_row['product_type'];
                                            ?>
                                                <li class="submenu-item">
                                                    <a href="#" class="submenu-link" onclick="filterProducts('<?php echo $product_type; ?>')"><?php echo $product_type; ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>


                                </div>
                            </li>
                            <li class="menu-item has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-file-earmark-medical-fill"></i> คำสั่งซื้อ</span>
                                </a>
                                <div class="submenu ">
                                    <!-- แถวข้างใน -->
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item  ">
                                                <a href="show_order.php" class='submenu-link'> คำสั่งซื้อล่าสุด</a>
                                            </li>
                                            <li class="submenu-item  ">
                                                <a href="#" class='submenu-link'> ประวัติคำสั่งซื้อ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="follow_us.php" class='menu-link'>
                                    <span><i class="bi bi-envelope-at-fill"></i> ข้อมูลการติดต่อทางร้าน</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <script src="dist/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
            <script src="dist/assets/static/js/components/dark.js"></script>
            <script src="dist/assets/static/js/pages/horizontal-layout.js"></script>
            <script src="dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="dist/assets/compiled/js/app.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


            <script src="dist/assets/extensions/toastify-js/src/toastify.js"></script>

            <script>
                // ปุ่มเด้งกลับไปข้างบน
                function scrollToTop() {
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                }

                // Set the scroll threshold in pixels
                var scrollThreshold = 100;

                // Function to toggle the visibility of the floating button
                function toggleScrollToTopButton() {
                    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

                    if (scrollToTopBtn) {
                        if (document.body.scrollTop > scrollThreshold || document.documentElement.scrollTop > scrollThreshold) {
                            scrollToTopBtn.style.display = "block"; // Show the button
                        } else {
                            scrollToTopBtn.style.display = "none"; // Hide the button
                        }
                    }
                }

                // Add an event listener for the scroll event
                window.addEventListener("scroll", toggleScrollToTopButton);

                // Run the toggle function on page load to hide the button initially
                toggleScrollToTopButton();
            </script>

            <div class="floating-button" id="scrollToTopBtn" onclick="scrollToTop()">
                <span>&uarr;</span>
            </div>