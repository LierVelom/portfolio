<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    @yield('content')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // // Xác định Dark Mode dựa vào `prefers-color-scheme`
            // function checkDarkMode() {
            //     if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
            //         document.body.classList.add("on-DarkMode");
            //     } else {
            //         document.body.classList.remove("on-DarkMode");
            //     }
            // }

            // // Kiểm tra ngay khi tải trang
            // checkDarkMode();

            // // Lắng nghe sự thay đổi của hệ thống
            // window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", checkDarkMode);

            // Các sự kiện của navigation
            document.addEventListener("click", function() {
                if (document.querySelector(".nav-dropdown-menu.show")) {
                    document.querySelectorAll(".nav-dropdown-menu, .nav-dropdown").forEach(el => el.classList.remove("show"));
                }
            });

            document.querySelectorAll(".nav-hidden-coverplace").forEach(el => {
                el.addEventListener("click", function(e) {
                    e.stopPropagation();
                    if (document.querySelector(".nav-collapse.show")) {
                        document.querySelectorAll(".nav-collapse, .nav-hidden-coverplace").forEach(el => el.classList.remove("show"));
                    }
                });
            });

            document.querySelectorAll(".nav-icon").forEach(el => {
                el.addEventListener("click", function(e) {
                    e.stopPropagation();
                    document.querySelectorAll(".nav-collapse, .nav-hidden-coverplace").forEach(el => el.classList.toggle("show"));
                });
            });

            document.querySelectorAll(".nav-dropdown").forEach(el => {
                el.addEventListener("click", function(e) {
                    e.stopPropagation();
                    const targetId = this.dataset.labelly;
                    if (targetId) {
                        document.getElementById(targetId)?.classList.toggle("show");
                    }
                    this.classList.toggle("show");
                });
            });
        });
    </script>
</body>

</html>